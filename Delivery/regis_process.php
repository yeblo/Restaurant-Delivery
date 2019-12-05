<?php
$name = $email =  $phone = $address = $city = $state = $zipcode = $pwd = $rpwd= '';
require('Database/db.php'); 

if (isset($_POST['regis_submit']))
    {
      global $conn;
//    dd($_POST);
//    die();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state= $_POST['state'];
    $zipcode = $_POST['zip'];
    $pwd = $_POST['pwd'];
    $rpwd = $_POST['rpwd'];
    $pk = 1020 + 1;
    if ($pwd === $rpwd ){        
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
       $insertquery = "insert into Customer (customer_id,name, email, phone_num, address, zip, password) values ('$pk','$name', '$email', '$phone' , '$address' , '$zipcode', '$pwd')";
        if ($conn->query($insertquery) === TRUE) {
            echo "New record created successfully";
            echo "<html>
                    <body>
                    <a href='index.php'> <button>Back to home page</button></a>
                    </body>
                    </html>";
            } else {
        echo "Error: " . $insertquery . "<br>" . $conn->error;
              echo "<html>
                    <body>
                    <a href='index.php'> <button>Back to home page</button></a>
                    </body>
                    </html>";
        }

        $conn->close();
}
    else{
        echo "password mismatch";
    }
    
}

$name = $email1 = $pwd1 ='';

if (isset($_POST['login_submit']))
    {
      global $conn;
//    dd($_POST);
//    die();
    $email1 = $_POST['email1'];
    $pwd1 = $_POST['pwd1'];

   
//    dd($res1);
 //   die();
//    $user = mysqli_fetch_assoc($res1);
    if (empty($_POST['email1'])){
              echo 'email required to log-in';
               echo "<html>
                    <body>
                    <a href='index.php'> <button>Back to home page</button></a>
                    </body>
                    </html>";
            }
        if (empty($_POST['pwd1'])){
              echo 'password required';
               echo "<html>
                    <body>
                    <a href='index.php'> <button>Back to home page</button></a>
                    </body>
                    </html>";
            }
    $query1 = "select * from Customer where email = '$email1' and password = '$pwd1'";
    $res1 = $conn->query($query1);
    

    if ($res1->num_rows > 0) {
    // output data of each row
    while($user = $res1->fetch_assoc()) {
        echo "Login successful";
             header('location: index.php');
              $_SESSION['name']= $user['name'];
              $_SESSION['customer_id'] = $user['customer_id'];
              $_SESSION['message'] = 'You are now logged in';
              $_SESSION['type'] = 'success';
            exit();
    }
    } else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
              echo "<html>
                    <body>
                    <a href='index.php'> <button>Back to home page</button></a>
                    </body>
                    </html>";
    }
    
     
    
    $conn->close();
    
    
    
    
    
    
    
        

      
    
       
  
       
       
   } 
 
        



?>

        

