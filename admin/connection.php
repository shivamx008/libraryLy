<?php


   $db = mysqli_connect('localhost', 'root', '', 'library');
    if(!$db) {
        die("Database connection failed");
    }
