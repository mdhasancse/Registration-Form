<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <h1>Students Registration Form</h1>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="form.js"></script>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <form name="myForm" action="connection.php" method="post">
        <label for="Fname">First Name</label><br>
        <input type="text" id="Fname" name="fname" ><br><br>

        <label for="Lname">Last Name</label><br>
        <input type="text" id="Lname" name="lname" ><br><br>
          

        <label for="Email">Email Id</label><br>
        <input type="text" id="Email" name="email" onkeyup="mailfun()"><br><br>
        <p id="errorEm"></p> <!-- it will show error msgs whle entering the value -->
            <!-- We can not use Id From input becouse it will show the msg in table not outside -->

        

        <label for="phn">Phone no</label><br>
        <input type="number" id="phn" name="Phn" onkeyup="phonenumber()"><br><br>
        <p id="errorPh"></p> 

        <label for="pass">Password</label><br>
        <input type="password" id="pass" name="Pass" onkeyup="password()"><br><br>
        <p id="errorps">g</p>

        

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
        <input type="text" id="gender" name="gender" ><br><br><br>
        <input type="submit"   value=" Submil">
        <input type="reset" value="Reset">
    </form>
    
</body>
</html>