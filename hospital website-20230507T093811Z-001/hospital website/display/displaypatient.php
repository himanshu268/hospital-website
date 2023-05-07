<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <link rel="stylesheet" type="text/css" href="displaypatient.css">
  <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" type="text/css" href="../home after login/home after login.css">
</head>
<body>
  <body style="background-color: #56baed ;>

    <section>
                <div class="col-sm-12">
            <div class="nav">
                <div class="col-sm-2">
                    <img class="image" style="height: 80px; width: 80px;" src="../home/people care.jpg">
                </div>
                <div class="col-sm-6">
                    <div class="topnav">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="../patient%20details/patient%20details.html">Insert Patient Details</a>
                            <a href="../Display%20patients%20details/displaypatient.php">Disply patient ditails</a>
                            <a href="../services/services1.html">Services</a>
                        </div>
                        <script>
                            function openNav() {
                                document.getElementById("mySidenav").style.width = "250px";
                            }

                            function closeNav() {
                                document.getElementById("mySidenav").style.width = "0";
                            }

                        </script>
                        <a style="font-size:30px;cursor:pointer; padding-top: 20px; text-decoration: none;"
                            onclick="openNav()">&#9776;</a>
                        <a href="../home after login/home after login.html">Home</a>

                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="../includes/logout.inc.php"> <button class="btn">Logout</button></a>
                </div>
            </div>
        </div>
        </div>

<h2>
  <u>
    Patients Details
  </u>
</h2>

<table border="2" align="center" cellspacing="0">
  <tr>
    <td>ID</td>
    <td>DOB</td>
    <td>Name</td>
    <td>Contact</td>
    <td>Email_Id</td>
    <td>Problem</td>
    <td>Gender</td>
    <td>Admitting</td>
    <td>Discharge</td>
  </tr>

<?php

include "../includes/server.php";

$records = mysqli_query($conn,"select * from patient"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ID']; ?></td>
    <td><?php echo $data['DOB']; ?></td>
    <td><?php echo $data['NAME']; ?></td>
    <td><?php echo $data['CONTACT']; ?></td>
    <td><?php echo $data['EMAIL_ID']; ?></td>
    <td><?php echo $data['PROBLEM']; ?></td>
    <td><?php echo $data['Gender']; ?></td>
    <td><?php echo $data['Admitting']; ?></td>
    <td><?php echo $data['Discharge']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); 
?>

</body>
</html>