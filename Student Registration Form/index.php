<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="form.js"></script>
    <!-- <link rel="stylesheet" href="form.css"> -->
    <link rel="stylesheet" href="CSS/form.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

<div class="all">
    <form name="myForm" action="" method="POST">
        <div clas="hadding">
            <h1 >Students Registration Form</h1>
        </div>
        
            <label for="Fname">First Name</label><br>
            <input type="text" id="Fname" name="fname" ><br><br>

            <label for="Lname">Last Name</label><br>
            <input type="text" id="Lname" name="lname" ><br><br>
            

            <label for="Email">Email Id</label><br>
            <input type="text" id="Email" name="email" onkeyup="mailfun()"><br><br>
            <!-- .<p id="errorEm"></p> it will show error msgs whle entering the value -->
                <!-- We can not use Id From input becouse it will show the msg in table not outside -->

            

            <label for="phn">Phone no</label><br>
            <input type="number" id="phn" name="Phn" onkeyup="phonenumber()"><br><br>
            <p id="errorPh"></p> 

            <label for="pass">Password</label><br>
            <input type="password" id="pass" name="Pass" onkeyup="password()"><br><br>
            

            

            <!-- <label for="rePaswrd">Re Password</label><br>
            <input type="password" id="rePaswrd" name="RePaswrd" onkeyup="repaswrd()"><br><br>
            <p id="errorRepss"></p> -->

            <label for="Cname">Collage name</label><br>
            <input type="text" id="clgname" name="Clgname" onkeyup="mailfun()" ><br><br>
            
            <label for="usn">USN</label><br>
            <input type="text" id="usn" name="Usn" ><br><br>
            
            <label for="py">Passing Year</label><br>
            <input type="number" id="py" name="Py"><br><br>

            <label for="Tgrade">Total grade in CGPA</label><br>
            <input type="text" id="Tgrade" name="Tgrade" ><br><br>

            <label for="gender">Gender</label><br>
            <input type="text" id="gender" name="gender" ><br><br>
        
        <button type="submit" class="btn btn-success" name="submit" value ="submit">submit</button>
        <!-- <input type="submit" name="submit" value ="submit" > -->
        <!-- <input type="reset" value="Reset"> -->
        </div>
    </form>
</div>

<style type="text/css">
.all {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left:25%;
  margin-right:25%; 
}

/* .hadding
{
  margin-left:25%;
  margin-right:25%; 
} */
.h1,h1{
  color: darkblue;
  padding-bottom: 20px;
}
input{
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}

</style>

    <?php
       include 'connection.php';
        //require_once "connection.php";
        if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $Phn = $_POST['Phn'];
            $Pass = $_POST['Pass'];
            // $rePassword = $_POST['RePaswrd'];
            $Clgname = $_POST['Clgname'];
            $Usn = $_POST['Usn'];
            $Py = $_POST['Py'];
            $Tgrade = $_POST['Tgrade'];
            $gender = $_POST['gender'];

            $result = mysqli_query($con,"INSERT INTO students values('','$fname','$lname',
            '$email','$Phn','$Pass','$Clgname','$Usn','$Py','$Tgrade','$gender')");
            // if($result)
            // {
            //     echo "Success";
            // }
            // else{
            //     echo "Failed";
            // }

        }

?>
</body>
</body>
</html>
