<?php
$server_name="local host";
$username="root";
$password="";
$database_name="miniproject"
$conn =mysqli_connect($server_name, $username, $password, $database_name);

if(!$conn)
{
    die("CONENCTION FAILED:".mysqli_connect_error());
}
if (isset($_POST['submit'])) 
{        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mycourse = $_POST['mycourse'];
        $branch = $_POST['mybranch'];
        $TM = $_POST['10th_marks'];
        $TTM = $_POST['12th_marks'];
        $lsm = $_POST['last_semester_marks'];
        $rollno = $_POST['roll_number'];
        $section = $_POST['section'];
        $hobbies = $_POST['myHobbies'];
        $studyhours = $_POST['myStudyhours'];
        $intersts = $_POST['interests'];
        $email = $_POST['myEmail'];
        $dob = $_POST['myDate'];
        $gender = $_POST['myGender'];
        $about = $_POST['myText'];
      
        
       $sql_query="INSERT INTO miniproject(firstname,lastname,mycourse,mybranch,10th_marks,12th_marks,last_semester_marks,roll_number,section,myHobbies,myStudyhours,interests,myEmail,myDate,myGender,myText)
       VALUES ('$firstname','$lastname','$mycourse','$branch','$TM','$TTM','$lsm','$rollno','$section','$hobbies','$studyhours','$intersts','$email','$dob','$gender','$about')";

if(mysqli_query($conn,$sql_query))
{
    echo "SUCCESSFULLY SUBMITTED";
}
else
{
    echo "ERROR: ".$sql."".mysqli_error($conn);
} 
?>