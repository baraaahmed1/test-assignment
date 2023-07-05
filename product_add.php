
<?php
include ("design/header.php");
?>
<style>

    .hide{
        display:none !important;
    }
    .show{
        display:block !important;
    }

</style>
    <div class="d-flex align-items-end ">
        <div class="me-auto p-1 fs-2 m-3 fw-semibold"> Product Add</div>
        <button  class="btn btn-primary m-3 h-25 sub "> Save </button>
        
        <a href="index.php" class="btn btn-danger m-3 h-25  ">Cancel </a>
    </div>

<div class="d-flex justify-content-center"> 
    <hr style="width: 90%;">
</div>

<div class="container">

<form action="function/add_product.php" id='product_form' method='post' >
    <label for="sku">SKU </label>
    <input type="text" class="form-control"name="sku" id='sku' style="width:15%;">
    <label for="name">Name</label>
    <input type="text" class="form-control" name='name' id='name' style="width:15%;">
    <label for="price">Price</label>
    <input type="number" class="form-control" name='price' id='price' style="width:15%;">
    <div class="switcher">
    <select name="typeSwitcher" class="form-select mt-2" aria-label="Default select example" id="productType" style="width:10%;">
        <option > Type Switcher</option>
        <option value="dvd" id='DVD'>DVD</option>
        <option value="book" id='Book'>Book</option>
        <option value="furniture" id='Furniture'>Furniture</option>
    </select>
    </div>

    <div id='size-container' class="hide" class="d-flex  dvd switcher"  >
        <label for="size">Size (MB)</label>
        <input type="number" class="form-control" name='size' id='size' style="width:10%;">
    </div>


    <div id='weight-container'class="hide"  class="book  switcher" >
        <label for="weight">Weight (KG)</label>
        <input type="number" class="form-control" name='weight' id='weight' style="width:10%;">
    </div>


    <div id='dimensions-container' class="hide" class="furniture  switcher" >
        <label for="height">Height (CM)</label>
        <input type="number" class="form-control" name='height' id='height' style="width:10%;">
        <label for="width">Width (CM)</label>
        <input type="number" class="form-control" name='width' id='width' style="width:10%;">
        <label for="length">Length (CM)</label>
        <input type="number" class="form-control" name='length' id='length' style="width:10%;">
    </div>
</form>
</div>


<div class="d-flex justify-content-center"> 
    <hr style="width: 90%;">
</div>

<div class="d-flex justify-content-center">
    <p class="fs-5"> Scandiweb Test Assignment </p>
</div>



<?php include("design/footer.php"); ?>


