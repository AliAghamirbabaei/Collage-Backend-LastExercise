<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $family = $_POST['family'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    echo "your name: ".$name."<br>";
    echo "your family: ".$family."<br>";
    echo "your phone: ".$phone."<br>";
    echo "your email: ".$email."<br>";
}