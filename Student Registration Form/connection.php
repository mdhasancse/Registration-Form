<?php
$firstName = $_POST['fname'];
$lststName = $_POST['lname'];
$Email = $_POST['email'];
$phone = $_POST['Phn'];
$password = $_POST['Pass'];
// $rePassword = $_POST['RePaswrd'];
$CollageName = $_POST['Clgname'];
$USN = $_POST['Usn'];
$passinYear = $_POST['Py'];
$totalGrade = $_POST['Tgrade'];
$gender = $_POST['gender'];

// DataBase connecion
$conn = new mysqli('localhost','root','','registrationform');
if($conn -> connect_error){
    die('Connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(fname,lname,email,Phn,Pass,
        Clgname,Usn,Py,Tgrade,gender)");
        $stmt->bind_param("sssisssiis",$firstName,$lststName,$Email,$phone,$password,
        $CollageName,$USN,$passinYear,$totalGrade,$gender);
        $stmt->execute();
        echo"registration successfully....";
        $stmt->close();
        $conn->close();
    }


?>