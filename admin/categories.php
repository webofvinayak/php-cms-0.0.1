<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
<?php include "includes/admin_navigation.php"; ?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>



                  <div class="col-lg-6">

                    <?php
                              if(isset($_POST['submit'])){

                                $cat_title = $_POST['cat_title'];
                                //echo $title;

                               if($cat_title=="" || empty($cat_title)){

                                 echo "this field can not be empty";
                               }else{
                                  echo $cat_title;

                                   $query = "INSERT INTO categories(cat_title) ";
                                   $query .= "VALUE('{$cat_title}') " ;

                                   $create_category = mysqli_query($connection,$query);
                             }
                      } else {echo"found nothing";}

                     ?>


                        <form action="categories.php" method="post">
                              <div class="form-group">
                                <label for="cat_title">Category</label>
                                <input class="form-control" type="text" name="cat_title" value=""></input>
                               </div>

                              <div class="form-group">
                                <input class="btn btn-primary btn-md" type="submit" name="submit" value="Add Category">

                              </div>

                        </form>

    <?php include 'includes/edit_categories.php'; ?>


                    </div>

                    <div class="col-lg-6">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> id </th>
                            <th> category </th>
                          </tr>
                        </thead>
                      <tbody>

<?php

$query = "SELECT * FROM categories ";
$fetch_categories = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($fetch_categories)){
$cat_title = $row["cat_title"];
$cat_id = $row["cat_id"];
//echo "<tr> <td> {$cat_id} </td> <td> {$cat_title} </td> </tr>";

echo "<tr>";
echo "<td> {$cat_id} </td>";
echo "<td> {$cat_title} </td>";
echo "<td> <a href ='categories.php?delete={$cat_id}' >Delete </a> </td>";
echo "<td> <a href ='categories.php?edit={$cat_id}' >Edit </a> </td>";
echo "<tr>";

 }

 ?>

<?php

    if(isset($_GET['delete'])){
      $del_cat_id = $_GET["delete"];

      $delete_query = "DELETE FROM categories WHERE cat_id = {$del_cat_id} ";

      $delete_category = mysqli_query($connection,$delete_query);
      //header("Location : categories.php");
      header("Location: categories.php");
     }
 ?>

                      </tbody>

                      </table>


                    </div>
                   </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
