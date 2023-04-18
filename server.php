<?php

     session_start();

     $username = "";
     $errors = array(); 


     $db = mysqli_connect('localhost', 'root', '', 'inventory_system');
     if (mysqli_connect_errno())
     {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     if (isset($_POST['reg_user'])) 
     {
          $username = mysqli_real_escape_string($db, $_POST['username']);
          $password = mysqli_real_escape_string($db, $_POST['password']);
          $acctype = mysqli_real_escape_string($db, $_POST['acctype']);
          $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

          if (empty($username)) { array_push($errors, "Username is required"); }
          if (empty($password)) { array_push($errors, "Password is required"); }

          if ($password != $password_2) { array_push($errors, "The two passwords do not match"); }

          $user_check_query = "SELECT * FROM accounts WHERE username='$username'";
          $result = mysqli_query($db, $user_check_query);
          $user = mysqli_fetch_assoc($result);
            
          if ($user)
          { 
               if ($user['username'] === $username) { array_push($errors, "Username already exists"); }
          }

          if (count($errors) == 0) 

          {              
               $password = ($password);
               $query = "INSERT INTO accounts (username,password,acctype) VALUES('$username', '$password','$acctype')";
               mysqli_query($db, $query);
               $_SESSION['username'] = $username;
               array_push($errors, "Successfully created account");              
          }
     }
     if(isset($_POST['submit']))
     {  
          $username = mysqli_real_escape_string($db, $_POST['username']);
          $password = mysqli_real_escape_string($db, $_POST['password']);
  
          if (empty($username)) 
          {
               array_push($errors, "Username is required");
          }
          if (empty($password)) 
          {
               array_push($errors, "Password is required");
          }
          if (count($errors) == 0) 
          {
               $password = ($password);
               if (($_POST['password']) !== $password)
               {
                    echo "Password is invalid";
               }
               $query = "SELECT * FROM accounts WHERE username='$username' AND password ='$password'"; 
               $sql="SELECT * FROM accounts WHERE username='$username' AND password ='$password'";
               $result=mysqli_query($db,$sql);  
               $row=mysqli_fetch_assoc($result);        
               $results = mysqli_query($db, $query);
               $res=mysqli_num_rows($results);
                if (mysqli_num_rows($results) == 1) { // user found
               // check if user is admin or user
               $username = mysqli_fetch_assoc($results);
               if ($username['acctype'] == 'admin') 
               {

                    $_SESSION['username'] = $username;
                    header('location: inventoryadmin.php');            
               }
               else
               {
                    $_SESSION['username'] = $username;

                    header('location: inventory.php');
               }
          }
          else 
          {
               array_push($errors, "Incorrect username/password");
          }
        }      
            
     } 
?>