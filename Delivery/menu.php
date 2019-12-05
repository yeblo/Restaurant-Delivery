
<?php
//require('Database/db.php'); 
//global $conn;
//session_start();
//
//$products_ids = array();
//session_destroy();
//if(filter_input(INPUT_POST, 'add_to_cart')){
//    if(isset($_SESSION['shopping_cart'])){
//        
//    }
//    else{
//        $_SESSION['shopping_cart'][0] = array
//        (
//            'pizza_id' => filter_input(INPUT_GET, 'pizza_id'),
//            'pizza_name' => filter_input(INPUT_GET, 'pizza_name'),
//            'pizza_num' => filter_input(INPUT_POST, 'pizza_num'),
//        );
//    }
//    
//}
//
//
//pre_r($_SESSION);
//    function pre_r($array){
//        echo '<pre>';
//        print_r($array);
//         echo '</pre>';
//    }
//(isset($_POST["size"])) ? $company = $_POST["size"] : $size=1;
?>


<section class="container" id="pizza_menu">
    <h3 class="text-center">Menu</h3>
    <div class="text-center">Place Your Order</div>
    <div class="text-center">Choose Your Pizza</div>
    
    
<?php  $orderquery = "select * from Pizza ORDER BY pizza_id ASC";
$res = mysqli_query($conn,$orderquery);
?>

<form action="menu.php?action=add&pizza_id=<?php echo $product['pizza_id'];?>" method="post">
<div class="card-deck p-3">
<?php
    if($res){
        if(mysqli_num_rows($res) > 0){
            while ($product = mysqli_fetch_assoc($res)){
//                print_r($product);
             
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                  <div class="card">
                    <img class="card-img-top" src="img/photoshoped-img/<?php echo $product['pizza_image'];?>" alt="Card image cap">
                     <div class="card-body">
                      <h5 class="card-title" name ="pizza_name"><?php echo $product['pizza_name'];?></h5>
                      <div class="form-group">
                    <label for="exampleFormControlSelect1">Quantity</label>
                    <input type ="number" min='1' max='50' name="pizza_num" class="form-control" id="exampleFormControlSelect1">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Size</label>
                    <select class="form-control" name='size' id="exampleFormControlSelect1">
                    <option></option>
                    <option <?//php if($size == 1) echo 'selected' ; ?> value ='1'>Small</option>
                    <option  <?//php if($size == 2) echo 'selected';?>value ='2'>Medium</option>
                    <option  <?//php if($size == 3) echo 'selected';?>value ='3'>Large</option>
                    </select>
                    </div>
                    <fieldset>
                    <button type="submit" name="add_to_cart" class="test-center">Add to Cart</button>
                    </fieldset>
    </div>
  </div>

    </div>
                
     <?php           
                
            }
        }
    }

?>
  </div>
    </form>
   
</section>