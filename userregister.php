<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register Form</title>
    <link rel="stylesheet" href="css/style2.css" type=text/css>
   

</head>

<body>
    <script src="userreg.js"></script>
    <header>
        <a href="userlogin.html">User Login </a> 
        <a href="index.html">Logout </a>
    </header>
    <section>
    <center>
    <h1>User Registration </h1>
   
    <form action ="userregistration.php" name="myForm" onsubmit="return validateForm()" method="POST">
        <div class="formdesign" id="userid">
            
            <input type="text" name="uid" placeholder="Enter id" required><b><span class="formerror"> </span></b>
       </div>
        <div class="formdesign" id="name">

             <input type="text" name="uname" placeholder="Enter name" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="email">
            <input type="email" name="uemail" placeholder="Enter email" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="phone">
             <input type="number" name="uphone" placeholder="Enter phone" required><b><span class="formerror"></span></b>
        </div>

        <div class="formdesign" id="pass">
          <input type="password" name="upass" placeholder="Enter password" required><b><span class="formerror"></span></b>
        </div>

        <input class="but" type="submit" name="submit" value="Submit">

    </form>
</center>
</section>
 
</body>
<footer>

</footer>



</html>
