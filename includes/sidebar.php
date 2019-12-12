<div class="col-md-4">
 <?php


  ?>
    <!-- Blog Search Well -->

    <div class="well">
        <h4>Blog Search</h4>
        <form class="" action="search_result.php" method="post">
          <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" name="submit" type="submit">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
      </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
   <div class="well">



     <h4>Blog Categories</h4>
     <div class="row">
         <div class="col-lg-6">
             <ul class="list-unstyled">

     <?php
         $query = "SELECT * FROM categories ";

         $fetch_categories = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($fetch_categories)){
         $cat_title = $row["cat_title"];

         echo "<li><a href='#'>{$cat_title}</a>
         </li>";

          }
      ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
  <?php include "widget.php"; ?>

</div>
