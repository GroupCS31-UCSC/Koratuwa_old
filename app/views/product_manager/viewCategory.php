<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/product_manager/viewCategory.css">
<!-- ______________________________________________________________________________________________________-->


<h1>View product details!</h1>

<?php flash('updateCategory_flash') ?>


<h2><?php echo $_SESSION['user_id']; ?></h2>
<table>
  <tr>
    <th>Ingredients</th>
    <th>Estimated Cost</th>
    <th>Price</th>
    <th>Image</th>
  </tr>

  <?php foreach ($data['category'] as $cat) : ?>
  <h1><?php echo $cat->product_name; ?></h1>

  <tr>
    <td><?php echo $cat->ingredients; ?></td>
    <td><?php echo $cat->unit_cost; ?></td>
    <td><?php echo $cat->unit_price; ?></td>
    <td><?php echo $cat->image; ?></td>
    <td><img src="<?=$cat->image;?>" width='200' height='200' accept="image/png, image/jpeg"></td>
    <td>
        <div class="post -control-btns">
          <a href="<?php echo URLROOT?>/Product_Manager/updateCategory/<?php echo $cat->product_id ?>"><button class="post-control-btn1">UPDATE</button></a>
          <a href="<?php echo URLROOT?>/Product_Manager/deleteCategory/<?php echo $cat->product_id ?>"><button class="post-control-btn2">DELETE</button></a>
        </div>
    </td>
  </tr><br>
  <?php endforeach; ?>

</table>



<?php require APPROOT.'/views/include/footer.php'; ?>
