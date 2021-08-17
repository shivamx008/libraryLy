<?php
	session_start();
?>
<?php   include "connection.php"; ?>

<?php

  if(isset($_POST['submit']))
  {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");

    $row= mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);

    if($count==0)
    {
      ?>
            <!--
            <script type="text/javascript">
              alert("The username and password doesn't match.");
            </script>
            -->
        <div class="alert alert-danger" style="width: 430px; margin-left: 555px; background-color: #de1313; color: white">
          <strong>The username and password doesn't match</strong>
        </div>
      <?php
    }
    else
    {
      $_SESSION['login_user'] = $_POST['username'];
      $_SESSION['pic']= $row['pic'];

      ?>
        <script type="text/javascript">
				window.alert("The username and password matched.");
          window.location="student/library.php"
        </script>
      <?php
    }
  }

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Member signin</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
            border-radius: 10px;
        }
        body{
            background-color: #534427;
            color: white;
            line-height: 1.8;

        }
        a{
            text-decoration: none;
        }
        #container{

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
            width: 100%;
            padding: 10px;
            border: #ddd 1px solid;
            border-radius: 5px;
        }
        .form-wrap button{
            display: block;
            width: 100%;
            margin-top: 20px;
            background-color: #333;
            padding: 10px;
            color: #f7c08a;
            cursor: pointer;
            border-radius: 5px;
            border: 1px #ddd solid;
        }
        .form-wrap button:hover{
            background: #37a08e;
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


    </style>
</head>
<body>
    <div id="container">

        <div class="form-wrap">
            <h1>Sign In</h1>

            <p>Welcome Member</p>
            <form  action="signinmem.php" method="post" >



                <div class="form-group">
                    <label for="username">Member username</label>
                    <input type="text" name="username" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="must be of 8 characters">
                </div>
                <input class="btn btn-default" type="submit" name="submit" value="Signin">

                <!-- <button type="submit" class="btn">Sign In</button> -->
                <p class="button-text">
                    Welcome to the palace of BOOKS<br>
                    <a href="https://valid.com/terms-conditions">Terms & Conditions</a> and
                    <a href="">Privacy Policy</a>
                </p>
            </form>
        </div>
        <footer class="change">
            <p>Don't have an account? <a href="signup.php" class="btn btn-default">Sign Up</a></p>

        <p>
            This is an email link:
            <a href="mailto:sohammaity35@gmail.com?Subject=Hello%20again" target="_top" class="btn btn-default">Send Mail</a>
            </p>
        </footer>
    </div>
</body>
</html>



</div>
</body>
</html>
