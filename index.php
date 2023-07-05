


<?php
include("design/header.php");
?>



<div class="d-flex align-items-end ">
  <div class="me-auto p-1 fs-2 m-4 fw-semibold"> Product List</div>
  <a href="product_add.php"  class="btn btn-primary m-4 h-25 "> ADD </a>
  <button class="btn btn-danger m-4 h-25  del">MASS DELETE</button>
</div>

<div class="d-flex justify-content-center"> 
  <hr style="width: 90%;">
</div>
      <div class="container text-center  con" style="width: 90%;">
  <div class="row row-cols-4 ms-5 ">


  <?php
    $select_product = $connect -> query("SELECT * FROM task ");

    foreach($select_product as $row_product):
?>

<div class="card m-2 prod<?php echo$row_product['id']?>" style="width: 15rem ;">
  <div class="card-body  cardbody ">
        <input type="checkbox" class="delete-checkbox form-check-input row justify-content-start mt-1">
        <input class="pro" value="<?php echo$row_product['id']?>" style="display:none;">
    <p class="card-text m-0"><?php echo$row_product['sku']?></p>
    <p class="card-text m-0"><?php echo$row_product['name']?> </p>

    <?php
    echo !empty($row_product['price']) ? "<p class='card-text m-0'>".$row_product['price'].'$</p>':''; 
    ?>
    <?php
    echo !empty($row_product['size']) ? "<p class='card-text m-0'> Size:".$row_product['size'].'MP</p>':''; 
    ?>
    <?php
    echo !empty($row_product['weight']) ? "<p class='card-text m-0'> Weight:".$row_product['weight'].'KG</p>':''; 
    ?>
    <div style="display:flex;" class="ms-3">
    
    <?php
    echo !empty($row_product['height']) ? "<p class='card-text m-0'> Dimension:".$row_product['height'].'×</p>':''; 
    ?>
    <?php
    echo !empty($row_product['width']) ? "<p class='card-text m-0'>".$row_product['width'].'×</p>':''; 
    ?>

    <?php
    echo !empty($row_product['length']) ? "<p class='card-text m-0'>".$row_product['length'].'</p>':''; 
    ?>    
  </div>
  </div>
</div>


<?php endforeach; ?>

    </div>
      </div>


<div class="d-flex justify-content-center">
  <hr style="width: 90%;">
</div>

<div class="d-flex justify-content-center">
  <p class="fs-5"> Scandiweb Test Assignment </p>
</div>


<?php
include("design/footer.php");
?>


