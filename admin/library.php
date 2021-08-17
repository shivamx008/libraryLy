<?php
  include "connection.php";
  session_start();
  if(isset($_SESSION['login_user']))
  {
  	$sql1="SELECT * from fine";
  	$res1=mysqli_query($db,$sql1);
  	while($row1=mysqli_fetch_assoc($res1))
  	{
  		if($row1['status'] == 'unpaid')
  		{
  		$d1= $row1['due_date'];
  		$rer1= strtotime($row1['due_date']);//return date in seconds
  		$cur1= strtotime(date("Y-m-d"));//current date in seconds
  	    if($cur1 > $rer1)
  	    {

  	      $diff1= $cur1-$rer1;

  	      $late1 = floor(($diff1)/(60*60*24));
  	      $fine1 = $late1*5;
  	      mysqli_query($db,"UPDATE fine set `fines` = $fine1 , `day`=$late1 WHERE `due_date` = $d1; ");
  	    }
  		}
  	}




  	$c=0;


  	    $sql="SELECT student.username,roll,books.bid,name,authors,edition,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='Yes' ORDER BY `issue_book`.`return` ASC";
  	    $res=mysqli_query($db,$sql);


  	  while($row=mysqli_fetch_assoc($res))
  	  {

  			$rer= strtotime($row['return']);//return date in seconds
  			$cur= strtotime(date("Y-m-d"));//current date in seconds
  	    if($cur > $rer)
  	    {
  	      $c=$c+1;
  	      $var='<p style="color:yellow; background-color:red;">EXPIRED</p>';

  				$diff= $cur-$rer;
  				$late = floor(($diff)/(60*60*24));
  				$fine = $late*5;
  				$_POST['username']=$row['username'];
  				$_POST['bid']=$row['bid'];
  				$_POST['day']=$late;
  				$_POST['fines']=$fine;
  				$_POST['status']="unpaid";
  				$_POST['due']=$row['return'];

  				mysqli_query($db,"INSERT INTO `fine` values('','$_POST[username]','$_POST[bid]','$_POST[day]','$_POST[fines]','$_POST[status]','$_POST[due]'); ");
  	      mysqli_query($db,"UPDATE issue_book SET approve='$var' where `return`='$row[return]' and approve='Yes' limit $c;");




  	      // echo $d."</br>";
  	    }


  	  }


  }

  	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Welcome to the most extraordinary hotel in Boston">
    <script src="https://kit.fontawesome.com/17fc1dbb73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"><a href="#">Welcome User</a></h1>
                <ul>

                    <li><a  href="logout.php">Log Out</a></li>
                </ul>

            </div>
            </nav>

    </header>


    <section id="library-info" class="bg-dark">
        <div class="container ">
            <div class="box1 bg-light cs">
                <i class="fas fa-book fa-3x"></i>
                <h3><a href="books.php">Books</a></h3>

            </div>
            <div class="box1 bg-light cs1">
                <i class="fas fa-user-alt fa-3x"></i>
                <h3><a href="profile.php">User</a></h3>

            </div>
            <div class="box1 bg-light cs2">
                <i class="fas fa-envelope fa-3x"></i>
                <h3><a href="issue_info.php"> Reports</a><h3>

            </div>
            <div class="box1 bg-light cs2">
                <i class="fas fa-receipt fa-3x"></i>
                <h3><a href="expired.php">Due/return</a><h3>

            </div>
            <div class="box1 bg-light cs2">
                <i class="fas fa-pen fa-3x"></i>
                <h3><a href="request.php">Issue Centre</a><h3>

            </div>
        </div>
    </section>

    <footer id="main-footer">
        <p>Library NewGrid &copy; 2020, All Rights Reserved
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-linkedin"></a>
        </p>
    </footer>
</body>
</html>
<?php
