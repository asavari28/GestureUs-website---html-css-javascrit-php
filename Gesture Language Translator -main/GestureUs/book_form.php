<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $help = $_POST['help'];

      $request = " insert into book_form(name, email, phone, help) values('$name','$email','$phone','$help') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>