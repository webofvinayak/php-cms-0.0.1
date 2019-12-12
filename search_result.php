<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>

    <!-- Navigation -->

<?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

              <?php

              if(isset($_POST["submit"])){

                echo $search = $_POST['search'];

               $query = "SELECT * FROM posts WHERE post_tag LIKE '%$search%' ";
               $search_query = mysqli_query($connection,$query);

               if(!$search_query){
                 die("QUERY failed".mysqli_error($connection));
               }else{

                  $count = mysqli_num_rows($search_query);
                  if($count == 0 ){
                    echo "found_nothing"; }
               }
            } else {}



                  $fetch_posts = mysqli_query($connection,$query);
                  while($row = mysqli_fetch_assoc($fetch_posts)){
                  $post_title = $row["post_title"];
                  $post_author = $row["post_author"];
                  $post_date = $row["post_date"];
                  $post_content = $row["post_content"];
                  $post_image = $row["post_image"];
                  //$post_title = $row["post_title"]; ?>

                  <h1 class='page-header'>
                           <?php echo $post_title; ?>
                        <small>Secondary Text</small>
                    </h1>

                    <h2>
                        <a href="#"> <?php echo $post_title; ?> </a>
                    </h2>

                    <p class="lead">
                        by <a href="index.php"> <?php echo $post_author; ?> </a>
                    </p>

                   <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?> </p >


                     <hr>
                     <img class="img-responsive" src="images/<?php echo $post_image;  ?>" alt="">
                     <hr>
                     <p> <?php echo $post_content; ?></p>
                     <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                     <hr>

               <?php }  ?>




                <!-- First Blog Post -->







            </div>

            <!-- Blog Sidebar Widgets Column -->

<?php include "includes/sidebar.php" ?>


        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

<?php include "includes/footer.php" ?>