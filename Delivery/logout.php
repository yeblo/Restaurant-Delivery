<?php

session_start();
      unset($_SESSION['name']);
       unset($_SESSION['customer_id']);
       unset($_SESSION['message'] );
       unset($_SESSION['type']);

session_destroy();
 header('location: index.php');

?>