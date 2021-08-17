<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}

    *{
        box-sizing: border-box;
        margin: 0px;
        padding: 0px;
        border-radius: 10px;
    }
    body{
        background-color: #ffeedf;
        color: white;
        line-height: 1.8;
    }
    a{
        text-decoration: none;
    }
    #container{
        position:relative; top:-50px;
        margin: 30px auto;
        max-width: 400px;
        padding: 20px;
    }
    .form-wrap{
        background: white;
        padding: 15px 25px;
        color: #333;
    }
    .form-wrap h1, .form-wrap p{
        text-align: center;
    }
    .form-wrap .form-group{
        margin-top: 15px;
    }
    .form-wrap .form-group label{
        display: block;
        color: #666;
    }
    .form-wrap .form-group input{
        width: 80%;
        padding: 10px;
        border: #ddd 1px solid;
        border-radius: 5px;
    }
    .form-wrap button{
        display: block;
        width: 50%;
        margin-top: 20px;
        background-color: #333;
        padding: 10px;
        color: white;
        cursor: pointer;
        border-radius: 5px;
        border: 1px #ddd solid;
    }
    .form-wrap button:hover{
        background: #f7c08a ;
    }
    .form-wrap .button-text{
        font-size: 13px;
        margin-top: 20px;


    }
    .change{
        color: white;
        font-size: 15px;
    }
    .color{
        color: black;
    }
    .change a:hover{
        color: white;;
    }

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* #main {
  transition: margin-left .5s;
  padding: 16px;
} */

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #f29942;
}

.book
{
    width: 400px;
    margin: 0px auto;
}


	</style>


</head>
<body>
	<!--_________________sidenav_______________-->

	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user'];
                }
                ?>
            </div><br><br>

 <div class="h"> <a href="add.php">Add Books</a> </div>
  <div class="h"> <a href="delete.php">Delete Books</a></div>
  <div class="h"> <a href="request.php">Issue Requests</a></div>
  <div class="h"> <a href="issue_info.php">Issue Information</a></div>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>

  <!-- <div class="container" style="text-align: center;"> -->
  <div id="container">
      <div class="form-wrap">
    <h2 style="color:black; font-family: inherit; text-align: center"><b>Add New Books</b></h2>

    <form class="book" action="add.php" method="post">
      <div class="form-group">
        <label for="Book id">Book id</label>
        <input type="text" name="bid" id="Book id" placeholder="Book id" required="">
      </div>
      <div class="form-group">
        <label for="Book Name">Book Name</label>
        <input type="text" name="name" id="Book Name" placeholder="Book Name" required="">
      </div>
      <div class="form-group">
        <label for="Author">Author's Name</label>
        <input type="text" name="authors" id="Author" placeholder="Author's Name" required="">
      <div class="form-group">
        <label for="edition">Edition</label>
        <input type="text" name="edition" id="edition" placeholder="Edition" required="">
        </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" placeholder="Status" required="">
        </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity" placeholder="Quantity" required="">
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <input type="text" name="department" id="department" placeholder="Department" required="">
      </div>
        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
  </div>

<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
        ?>
          <script type="text/javascript">
            alert("Book Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#ffeedf";
}
</script>

</body>
