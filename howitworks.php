<?php
include 'lib/Session.php';
 Session::init();
include('includes/header.php');
include('includes/menu.php');
?>
<div class="container bg-light-gray">
 <div class="main-content">
  <div class="featured-content">
     <div class="row-fluid">
     <div class="span10 offset1 aboutp">
       <h2>FOR THE TUTORS</h2>
                    <ol>
                        <li>
                        <p>Register and create an exam.You can create multiple exams</p></li>

                        <li><p>You can set the number of questions you want to show to the students.Suppose you want to make 100 questions.you have 10 students.You want each student will get 25 of questions randomly from 100 questions.you can do it there.</p></li>

                        <li><p>You will have to set the per question time limit.</p></li>

                        <li><p>You will have to set the number of students who will perticipate in the exam.Suppose you want 5 students will perticipate in the exam.then you have to enter 5 and you will get 5 unique token IDs for that exam.You will have to give each token ID to each student.Students who will register using these token ID's can perticiapte in the exam.</p></li>

                        <li><p>Then you have set questions for the exam.</p></li>

                        <li><p>Then you must have to adjust the starting time and ending time of the exam.Student will not be able to perticipate in the exam before the starting time.They will not be able to perticipate in the exam after the ending time.</p></li>

                        <li><p>After the end of the exam go to the 'ASSIGN NUMBER OF STUDENTS FOR THIS EXAM' option and there you can publish the result to the students.Then the students will be able see their marks as well as their competitors marks.They will also see the answers of the questions.</p></li>
                    </ol>
                <h2>FOR THE STUDENTS</h2>
                <ol>
                <li><p>You have to register with the token ID you get from your teacher.</p></li>

                <li><p>You can perticipate in an exam once.</p></li>

                <li><p>If you do not give answer to a question within the given time.You will get zero marks for that question.</p></li>

                <li><p>Don't try to cheat by changing the url or trying to go back when the exam is running.Your account will get suspension.</p></li>
                </ol>



     </div>
    </div>
   </div>
  </div>
</div>
<?php
include('includes/footer.php');
?>