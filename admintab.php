<?php
include('config.php');
$query="SELECT * FROM userregistration";
$result = mysqli_query($mysqli,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        *{
    margin:0;
    padding:0;
}
header{
    height:80px;
    background-color:black;
    color:white;
	
    
}
header a{
    margin-left:100px;
    font-size:22px;
    text-decoration:none;
    background-color:bisque;
    color:black;
    width: 150px;
    height:30px;
    font-weight: 600;
    text-align:center;
    display:inline-block;
    top:10px;
    position:relative;
}
body{
	background-color: rgb(253, 225, 200);
}
h1{
    font-size: 2rem;;
}
h2{
    font-size:1.6rem;
}
table{
    align-items: center;
}

        </style>
</head>
<body>
<header>
            <a href="index.html">Logout </a>
        </header>
        <section>
            <center>
           <strong><h1>Admin Dashboard</h1> </strong> 
           <br>
            
            <br>
            <h2>View registered users details</h2>
            <br>
            <table  border="3px" width="900px" >
                <tr>
                    <th>USER ID</th>
                    <th>USERNAME</th>
                    <th>PHONE NO</th>
                    <th>EMAIL</th>
                </tr>
            <?php
                while($rows = mysqli_fetch_assoc($result))
                {
            ?>
                    <tr>
                        <td><?php echo $rows['u_id']; ?> </td>
                        <td><?php echo $rows['name']; ?> </td>
                        <td><?php echo $rows['phoneno']; ?> </td>
                        <td><?php echo $rows['email']; ?> </td>
                    </tr>
            <?php
                }
            ?>
              
            </table>
</center>
            
    
</body>
<footer>
        </footer>
</html>