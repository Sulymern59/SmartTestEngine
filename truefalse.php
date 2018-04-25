<?php
include 'lib/Session.php';
Session::checkadminSession();
include('includes/header1.php');
include('includes/menu.php');
   $aid = Session::get('aid');
   $adminId = Session::get('adminId');
?>
<?php 
 if(!isset($_GET['trefaq']) && $_GET['trefaq']==NULL){
     echo "<script>window.location='admindashboard.php'</script>";
  }else{
     $trefaq = $_GET['trefaq'];
  }
  $fgt = $gp->findGroupTokenForAddQues($trefaq);
  if($fgt){
    $val = $fgt->fetch_assoc();
    $gtoken = $val['groupToken'];
  }
  if(($_SERVER['REQUEST_METHOD']=='POST')){
    $msg = $qs->addtruefalsequestion($_POST,$_FILES,$trefaq,$gtoken);
    if(isset($msg)){
       echo "<script>alert('".$msg."')</script>";
    } 
 }
?>
<script>  
function addValueToRadioBtn() {
    if (document.getElementById("tftf").checked == true){
        document.getElementById("tftf").value = document.getElementById("tffiop").value;
    }
    //added an alert box just to test that the value has been updated
    //alert(document.getElementById("amntother").value);
	if (document.getElementById("tftff").checked == true){
        document.getElementById("tftff").value = document.getElementById("tfsiop").value;
    }
} 

</script>
<div class="container bg-light-gray">
 <div class="main-content">
  <div class="featured-content">
   <section>
    <div class="row-fluid">
     <div class="span8 offset3">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group hgad" style="margin-top: 0px;">
            <label style="margin-right: 56px;">Question Title: </label>
            <!--<input type="text" class="form-control adgrfs" name="tfqtitle" required="1" placeholder="Question Title">-->
            <textarea class="form-control" rows="5"  name="tfqtitle" required="1" placeholder="Question Title" ></textarea>
          </div>
          <div class="form-group hgad form-inline">
            <label style="margin-right: 42px;">Image If Needed: </label>
            <input type="file" class="form-control adgrfs" name="image">
          </div>
          <div class="form-group hgad">
            <input type="text" class="form-control adgrfs" name="tffiop" id="tffiop"  value="True" readonly required="1">
			<label style="cursor:pointer; color:#06F;">
            <input type="radio" name="tfcs" value="" id="tftf" onclick="addValueToRadioBtn();">Correct Answer?</label>
          </div>
            
          <div class="form-group hgad">
            <input type="text" class="form-control adgrfs" name="tfsiop" id="tfsiop"  value="False" readonly required="1">
			<label style="cursor:pointer; color:#06F;">
              <input type="radio" name="tfcs" value="" id="tftff" onclick="addValueToRadioBtn();">Correct Answer?
			  </label>
          </div>
          <button type="submit" class="btn agb" style="background-color: purple;color: white">Add Question</button>
      </form>
     </div>
    </div>
    </section>
    <section>
      <div class="row-fluid">
       <div class="span12">
         <h2>Question List: </h2><br>
         <table class="table table-bordered table-striped">
            <thead>
            <tr class="warning">
              <th width="5%">No.</th>
              <th width="17%">Title</th>
              <th width="17%">Image</th>
              <th width="17%">First Option</th>
              <th width="17%">Second Option</th>
              <th width="17%">Correct Ans.</th>
              <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
             $smresult = $qs->showtruefalsequestion($trefaq);
             if($smresult){
              $i = 0;
               while ($value = $smresult->fetch_assoc()) {
                $i++;
          ?>
            <tr class="info cta">
              <td><?php echo $i;?></td>
              <td><?php echo $value['questionTitle'];?></td>
              <td><img src="<?php echo $value['image'];?>" height="65" width="65"></td>
              <td><?php echo $value['tffiop'];?></td>
              <td><?php echo $value['tfsiop'];?></td>
              <td><?php echo $value['tfcs'];?></td>
              <td><a href="deletetfquestion.php?tfqd=<?php echo $value['id']; ?>"><button class="btn" style="background-color: purple;color: white">Delete</button></a></td>
            </tr>
         <?php } }?>
            </tbody>             
          </table>
       </div>
      </div>
    </section>
  </div>
 </div>
</div>
<?php 
include('includes/footer.php');
?>
