<?php
   if(isset($_POST['Edit'])){

     //print_r($_POST['cat_id']);
     $update_cat_id = $_POST['cat_id'];
     $update_cat_title = $_POST['cat_title'];

    /*UPDATE Customers
    SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
    WHERE CustomerID = 1;*/

    $query = "UPDATE categories SET cat_title = '{$update_cat_title}' WHERE cat_id = {$update_cat_id}" ;

    $update_catogory = mysqli_query($connection,$query);


   }


 ?>




<?php
if(isset($_GET['edit'])){ ?>
<form action="categories.php" method="post">
      <div class="form-group">
        <label for="cat_title">Category</label>
        <?php

          $edit_cat_id = $_GET["edit"];

          $edit_query = "SELECT * FROM categories WHERE cat_id = {$edit_cat_id} ";

          $edit_category = mysqli_query($connection,$edit_query);
        // header("Location: categories.php");
         while($row = mysqli_fetch_assoc($edit_category)){
          $cat_title = $row["cat_title"];
          $cat_id = $row["cat_id"];
         echo "<input class='form-control' type='text' name='cat_title' value='{$cat_title}'></input>";
         echo "<input class='form-control' type='hidden' name='cat_id' value='{$edit_cat_id}'></input>";
        echo "</div>";
  ?>
      <div class="form-group">
        <input class="btn btn-primary btn-md" type="submit" name="Edit" value="Update Category">

      </div>
</form>
<?php    } } ?>
