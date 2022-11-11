
<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "hostel_admin";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("Could not Connect MySql Server:" . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
       $firstname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $course=$_POST['myCourse'];
       $branch=$_POST['mybranch'];
       $tenthmarks=$_POST['10th marks'];
       $twelfthmarks=$_POST['12th marks'];
       $lastsemestermarks=$_POST['last semester marks'];
       $rollnumber=$_POST['rollnumber'];
       $section=$_POST['section'];
       $hobbies=$_POST['hobbies'];
       $preferedstudyhours=$_POST['mystudyhours'];
       $intersets=$_POST[''];
       $email=$_POST['email'];
       $dob=$_POST['dob'];
       $gender=$_POST['gender'];
       $aboutyou=$_POST['aboutyou']; 

       $sql = "INSERT INFO entry_details (fristname,lastname,course,branch,tenthmarks,twelfthmarks,lastsemestermarks,rollnumber,section,hobbies,preferedstudyhours,intersets,email,dob,gender,aboutyou)
       VALUE ('$fristname','$lastname','$myCourse',$mybranch','$10th marks','$12th marks','$last semester marks','$rollnumber','$section','$hobbies','$mystudyhours','','$email','$dob','$gender','$aboutyou')";
       
       if(!mysqli_query($con, $sql))
       {
           echo "New Details Entry inserted successfully !"; 
       }
       else
       {
           echo "Error: " . $sql . "" . mysqli_error($con);
       }

       
       mysqli_close($con);
}

?>

