<?php 
if(isset($_POST['submit'])){
    $to = "ivancosic@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $employees = $_POST['employees'];
    $about = $_POST['about'];
    $subject = "Form demo";
    $message = $name . " " . $surname . " " .$company . " " .$country . " " .$employees . " " .$about;

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>