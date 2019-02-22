<?php
require 'ConnDB.php';
$firstnameerr=$lastnameerr=$phoneerr=$departerr=$emailerr=$querr=$univererr="";
$qu4=null;
if (isset($_POST['submit'])){
    $firstname  = test_input($_POST['fname']);
    $lastname   = test_input($_POST['lname']);
    $email      = test_input($_POST['email']);
    $phone      = test_input($_POST['phone']);
    $university = test_input($_POST['university']);
    $department = test_input($_POST['department']);
    $year       = test_input($_POST['years']);
    $aboutus    = test_input($_POST['relation']);

    $acceptfn=$accepte=$acceptUn=$acceptPh=$acceptDp=$acceptln=$acceptqu1=$acceptqu2=$acceptqu3=$acceptqu4=false;

    //________________________________________________First Name Validation_____________________________________________

    if(!preg_match("/^[a-zA-Z ]*$/", $firstname))
    {
        $firstnameerr="*Name may contain letters and whitespace only ";
    }
    else
    {
        $acceptfn=true;
    }
    //________________________________________________Last Name Validation______________________________________________

    if(!preg_match("/^[a-zA-Z ]*$/", $lastname))
    {
        $lastnameerr="*Name may contain letters and whitespace only ";
    }
    else
    {
        $acceptln=true;
    }
    //_________________________________________________Email Name Validation_____________________________________________

    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,10}$/",$email))
    {
        $emailerr="*example@gmail.com";
    }
    else {
        $query1= mysqli_query($conn, "SELECT * FROM applicant WHERE email LIKE'$email'")or die(mysqli_error($conn));
        if(mysqli_num_rows($query1) == true) {
            $emailerr = "This email is found , please choose another email";
            $accepte = false;
        }
        else{
            $accepte=true;
        }

    }

    //________________________________________________Phone Validation__________________________________________________

    if (!preg_match("/^(010|011|015|012)[0-9]{8}$/",$phone))
    {
        $phoneerr="*Phone must be 11 number start with 012 or 011 or 010 or 015";
    }
    else{
        $acceptPh=true;
    }
    //________________________________________________University Validation_____________________________________________

    if(!preg_match("/^[a-zA-Z ]*$/", $university))
    {
        $univererr="*Name may contain letters and whitespace only ";
    }
    else
    {
        $acceptUn=true;
    }
    //________________________________________________Department Validation_____________________________________________
    if(!preg_match("/^[a-zA-Z ]*$/", $department))
    {
        $departerr="*Department may contain letters and whitespace only ";
    }
    else
    {
        $acceptDp=true;
    }
    //__________________________________________Committee Validation____________________________________________________
   if(isset($_POST['committee'])){
       $committee  = test_input($_POST['committee']);
       $qu1        = test_input($_POST['que1']);
       $qu2        = test_input($_POST['que2']);
       $qu3        = test_input($_POST['que3']);

        $alert=false;
       if(!preg_match("/^[a-zA-Z ]*$/", $qu1))
       {
           $querr="*Answers may contain words and whitespace. ";
           $alert=true;
       }
       else
       {
           $acceptqu1=true;
       }

       if(!preg_match("/^[a-zA-Z ]*$/", $qu2))
       {
           $querr="*Answers may contain letters and whitespace only ";
           $alert=true;
       }
       else
       {
           $acceptqu2=true;
       }

       if(!preg_match("/^[a-zA-Z ]*$/", $qu3))
       {
           $querr="*Answers may contain letters and whitespace only ";
           $alert=true;
       }
       else
       {
           $acceptqu3=true;
       }

       if($committee!=='social')
       {
           $qu4= test_input($_POST['que4']);
           if (!preg_match("/^[a-zA-Z ]*$/", $qu4)) {
               $querr = "*Answers may contain letters and whitespace only ";
               $alert=true;
           }
           else
           {
               $acceptqu4 = true;
               $accepteness=array($acceptfn,$accepte,$acceptUn,$acceptPh,$acceptDp,$acceptln,$acceptqu1,$acceptqu2,$acceptqu3,$acceptqu4);
               $error=false;
               foreach ($accepteness as $val)
               {
                   if(!$val==true)
                   {
                       $error=true;
                       break;
                   }
               }
               if ( $error==false)
               {
                   // echo"all accept";
                   $GoToDB="INSERT INTO applicant(firstname,lastname,email,phone,department,university,year,aboutus,committee,qu1,qu2,qu3,qu4)VALUES('$firstname','$lastname','$email','$phone','$department','$university','$year','$aboutus','$committee','$qu1','$qu2','$qu3','$qu4')";
                   mysqli_query($conn, $GoToDB)or die(mysqli_error($conn));
                   $message = "Success Submit";
                   echo "<script type='text/javascript'>alert('$message');</script>";


               }
           }
       }
       else
       {
           $accepteness=array($acceptfn,$accepte,$acceptUn,$acceptPh,$acceptDp,$acceptln,$acceptqu1,$acceptqu2,$acceptqu3);
           $error=false;
           foreach ($accepteness as $val)
           {
               if(!$val==true)
               {
                   $error=true;
                   break;
               }
           }
           if ( $error==false)
           {
               // echo"all accept";
               $GoToDB="INSERT INTO applicant(firstname,lastname,email,phone,department,university,year,aboutus,committee,qu1,qu2,qu3)VALUES('$firstname','$lastname','$email','$phone','$department','$university','$year','$aboutus','$committee','$qu1','$qu2','$qu3')";
               mysqli_query($conn, $GoToDB)or die(mysqli_error($conn));
               $message = "Success Submit";
               echo "<script type='text/javascript'>alert('$message');</script>";
           }

       }
      /* if($alert==true){
           $message = "Please Answer your committee questions in English words";
           echo "<script type='text/javascript'>alert('$message');</script>";
       }*/

   }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
require 'index.php';
?>