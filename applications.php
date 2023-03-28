<?php
if(isset($_POST['textdata']))
{
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


              
              
              
              $fp = fopen('data.txt', 'a');
              fwrite($fp, $firstName, $lasttName);
              fclose($fp);
              }
              ?>