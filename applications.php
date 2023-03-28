<?php


    $firstName = $_POST['fname'];
    $lasttName = $_POST['lname'];
    $email = $_POST['email'];
    $pnum = $_POST['pnum'];
    $bday = $_POST['dob'];
    $program = $_POST['program'];
    // $toddler = $_POST['toddler'];
    // $primary = $_POST['primary'];
    // $daycare = $_POST['daycare'];
    // $summercamp = $_POST['summercamp'];

    $mailheader = "From:" .$firstname."<".$email.">\r\n";
    $recipient = "sana.marwa12@gmail.com";
    mail($recipient, $subject, $firstName , $mailheader)
    or die("Error!");

    echo "message sent";

 ?>