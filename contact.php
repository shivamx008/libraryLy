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
    <title>library Contact | Contact</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"><a href="index.html"></a>Library</h1>
                <ul>
                    <li><a  href="index.php">Home</a></li>
                    <li><a  href="about.php">About</a></li>
                    <li><a  class="current" href="contact.php">Contact</a></li>
                </ul>

            </div>
            </nav>

    </header>
    <section id="contact-form" class="py-3">
        <div class="container">
            <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
            <p>Please fill out the form below to contact us</p>
            <form action="process.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" id="message" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>

    <section id="contact-info" class="bg-dark">
        <div class="container">
            <div class="box ">
                <i class="fas fa-building fa-3x"></i>
                <h3>Location</h3>
                <p>RNSIT, RR Nagar </p>
            </div>
            <div class="box ">
                <i class="fas fa-phone fa-3x"></i>
                <h3>Phone Number</h3>
                <p>(+91) 9199-1673-88</p>
            </div>
            <div class="box ">
                <i class="fas fa-envelope fa-3x"></i>
                <h3>Email</h3>
                <p>frontdesl@library.co</p>
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
