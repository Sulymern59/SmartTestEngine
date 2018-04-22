 <div class="menu"  style="background-color: purple">
    <div class="navbar"  style="background-color: purple">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <i class="fw-icon-th-list"></i>
        </a>
        <div class="nav-collapse collapse"  style="background-color: purple">
            <ul class="nav" >
          <?php
           $path = $_SERVER['SCRIPT_NAME'];
           $currenttitle = basename($path,'.php');
          ?>
              <li class="<?php if($currenttitle=='index') echo 'active';?> border-left"><a href="index.php"  style="background-color: purple">Home</a></li>
                <?php
          if(Session::get('admin') == true){ ?>
             <li class="<?php if($currenttitle=='admindashboard') echo 'active';?>"><a href="admindashboard.php"  style="background-color: purple">Dashboard</a></li>
        <?php   }  
          else if(Session::get('user') == true){  ?>
             <li class="<?php if($currenttitle=='userdashboard') echo 'active';?>"><a href="userdashboard.php"  style="background-color: purple">Dashboard</a></li>
         <?php }
        ?>      
                <li class="<?php if($currenttitle=='howitworks') echo 'active';?>"><a href="howitworks.php"  style="background-color: purple">How It Works</a></li>
                <li class="<?php if($currenttitle=='about') echo 'active';?>"><a href="about.php"  style="background-color: purple">About Us</a></li>
              
            </ul>
        </div><!--/.nav-collapse -->
    </div>
           
</div>