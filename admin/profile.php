<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PROFILE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    .card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 300px;
margin: auto;
text-align: center;
}

.title {
color: grey;
font-size: 18px;
}

.wrapper
  {
    width: 300px;
    margin: 0 auto;

  }

button {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
font-size: 18px;
}

a {
text-decoration: none;
color: black;
}

button:hover, a:hover {
opacity: 0.7;
}


    </style>
  </head>
  <body>
    <!-- <form action="" method="post">
    <button class="btn btn-default" style="float: right; width: 70px;" name="submit1">Edit</button>
  </form> -->
    <div class="card">
      <img src="images/p.jpg" style="width:61%">

      <h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 				<div class="wrapper">
          <?php

      $q=mysqli_query($db,"SELECT * FROM admin where username='$_SESSION[login_user]' ;");
    ?>
    <h3 style="text-align: center;">My Profile</h3>

    <?php
      $row=mysqli_fetch_assoc($q);

      // echo "<div style='text-align: center'>
      //   <img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
      // </div>";
    ?>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['first'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['last'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";


 				echo "</table>";
 				echo "</b>";
 			?>
</div>

    </div>

  </body>
</html><!-- Add icon library -->
