<?php
	session_start();
?>
<?php include "connection.php";?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


    </style>
</head>
<body>
    <div id="container">
        <div class="form-wrap">
            <h1>Sign Up</h1>
            <p>It's free and only takes a minute</p>
            <form action="signup.php" method="post">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first" id="first-name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last" id="last-name" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                     <input type="email" name="email" id="email" placeholder="ex:-yourname@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="must be of 8 characters" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password" id="password" placeholder="must be of 8 characters" required>
                </div>
                <div class="form-group">
                    <label for="roll">USN</label>
                    <input type="text" name="roll" id="roll" placeholder="Enter USN" required>
                </div>
                <div class="form-group">
                    <label for="contact">Phone no</label>
                    <input type="text" name="contact" id="contact" placeholder="contact number" required>
                </div>
                <input class="btn btn-default" type="submit" name="submit" value="Signup">
                <!-- <button type="submit" class="btn">Sign Up</button> -->
                <p class="button-text">
                    By clicking the Sign up button, you agree to our <br>
                    <a href="https://valid.com/terms-conditions">Terms & Conditions</a> and
                    <a href="#">Privacy Policy</a>
                </p>
            </form>
        </div>
        <footer class="change">
            <p class="" >Already have an account? <a href="signinmem.php" class="btn btn-default">Login Here</a></p>

        <p>
            This is an email link:
            <a href="mailto:sohammaity35@gmail.com?Subject=Hello%20again " target="_top" class="btn btn-default">Send Mail</a>
            </p>
        </footer>
    </div>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
      $count=0;

      $sql="SELECT username from `student`";
      $res=mysqli_query($db,$sql);

      while($row=mysqli_fetch_assoc($res))
      {
        if($row['username']==$_POST['username'])
        {
          $count=$count+1;
        }
      }
      if($count==0)
      {
        mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]','$_POST[email]', '$_POST[contact]', 'p.jpg');");
      ?>
        <script type="text/javascript">
         alert("Registration successful");
        </script>
      <?php
      }
      else
      {

        ?>
          <script type="text/javascript">
            alert("The username already exist.");
          </script>
        <?php

      }

    }

  ?>

</body>
</html>
