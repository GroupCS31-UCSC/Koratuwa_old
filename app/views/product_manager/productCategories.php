<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/product_manager/productCategories.css">
<?php require APPROOT.'/views/product_manager/pm_dashboard.php'; ?>
<!-- ______________________________________________________________________________________________________-->



  <div class="container">
  <!--Dashboard-->
  

  <!--main-->
  <!-- <div class="main"> -->
    

    
    <!-- <h1>View categories!</h1> -->

<?php flash('addCategory_flash') ?>
<?php flash('deleteCategory_flash') ?>

<!-- <h2><?php echo $_SESSION['user_id']; ?></h2> -->

<div class="gallery">
<div class="content">


</div>

</div>

  <?php foreach ($data['categoryView'] as $category) : ?>
    <a href="<?php echo URLROOT?>/Product_Manager/viewCategory/<?php echo $category->product_id ?>"><button class="post-control-btn1"><?php echo $category->product_name ?></button></a>
  <?php endforeach; ?>

  </div>

</div>


<!-- <input type="button" value="Add new Product Category" class="add-btn" onclick="location.href='<?php echo URLROOT; ?>/Product_Manager/addCategory' "> -->
<!-- 
<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
 -->


<?php require APPROOT.'/views/include/footer.php'; ?>