<?php
include 'lib/Session.php';
 Session::init();
include('includes/header.php');
include('includes/menu.php');
?>
<div class="container bg-light-gray">
        <div class="main-content">
          <div class="featured-heading">
              <strong><h1>SMART TEST ENGINE</h1></strong>
              <h2 style="color: purple">Writing your exams efficiently!</h2>
          </div>
          <div class="ruler"></div>
          <div class="tabs">
              <ul id="myTabContent" class="nav nav-tabs">
                <li class="active"><a href="#vestibuluco" data-toggle="tab">Student Login</a></li>
                <li class=""><a href="#loginadmin" data-toggle="tab">Tutor Login</a></li>
				        <li class=""><a href="#praesent" data-toggle="tab">Administrator Login</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="vestibuluco">
                      <div class="media">
                        <img src="img/newsmart.png" class="spacing-r" alt="">
                        <div class="media-body">
                          <h1 class="media-heading ruler-bottom">Student Login Page</h1>
                          <p style="font-size: 16px;">Login here to take part in an exam.</p>
                          <div class="readmore">
                        <a href="login.php">Log In<i class="fw-icon-chevron-right"></i></a>
                        </div>
                        </div>
                      </div>  
                  </div>
                  <div class="tab-pane fade" id="loginadmin">
                          <div class="media">
                          <img src="img/exams.png" class="spacing-r" alt="">
                            <div class="media-body">
                              <h1 class="media-heading ruler-bottom">Tutor Login Page</h1>
                              <p style="font-size: 16px;">Login as a tutor to create exams.</p>
                              <div class="readmore">
                            <a href="login_twice.php">Log In<i class="fw-icon-chevron-right"></i> </a>
                            </div>
                            </div>
                        </div>
                  </div>
                  
				  <div class="tab-pane fade" id="praesent">
                          <div class="media">
                        <img src="img/registery2.jpg" class="spacing-r" alt="">
                            <div class="media-body">
                              <h1 class="media-heading ruler-bottom">Administrator Login</h1>
                              <p style="font-size: 16px;">Login as an Administrator to create user accounts</p>
                              <div class="readmore">
                            <a href="login_thrice.php">Login<i class="fw-icon-chevron-right"></i> </a>
                            </div>
                            </div>
                          </div>
                  </div>
              </div>
          </div>
        <div class="featured-content">
            <div class="row-fluid">
          
                <div class="span4">
				<div class="block">
                 <div class="block-title">
                            <h1>Create standard exams</h1>
                        </div>
				<div class="block-content">
                      <p style="text-align: justify;">Create standard professional exams for students and companies.</p>  
                    </div>
                </div>
				</div>
				<div class="span4">
				</div>
                <div class="span4">
                    <div class="block">
                        <div class="block-title">
                            <h1>About System</h1>
                        </div>
                        <div class="block-content">
                            <p style="text-align: justify;">Smart Test Engine(STE) is a Multiple Choice Questions(MCQ) based examination system that provides an easy to use environment for both Tutors and Students appearing for Examination. The main aim is providing and efficient exam system, with a user friendly interface".</p>                           
                        </div>
                    </div>
                </div>
                     </div>
                    </div>
                </div>
             </div>
        </div>      
    </div>
</div>
<?php
include('includes/footer.php');
?>