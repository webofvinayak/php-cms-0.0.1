
<?php
//global $connection;

    if(isset($_POST['createPost'])){
      //$post_id = $_POST['post_id'];
      $post_author = $_POST['post_author'];
      $post_title = $_POST['post_title'];
      $post_category = $_POST['post_category'];
      $post_date = date('d-m-y');
      $post_image = $_FILES['post_image']['name'];
      $post_image_temp = $_FILES['post_image']['tmp_name'];

      $post_content = $_POST['post_content'];
      $post_tag = $_POST['post_tags'];
      $post_comment_count =6;    //$_POST['post_comment_count'];
      $post_status = $_POST['post_status'];

      move_uploaded_file($post_image_temp,"../images/$post_image");

      $query = "INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tag,post_status,post_comment_count) ";
    //  $query = "INSERT INTO post(post_title) ";
     $query .= "VALUES('{$post_category}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}','{$post_comment_count}')";

    $add_new_post = mysqli_query($connection,$query);

     if(!$add_new_post){
       die("error".mysqli_error($connection));
     }

    header("Location: posts.php");

    }else{

      echo "i am out";
    }





 ?>




<form action="posts.php?source=add_post" method="post" enctype="multipart/form-data">

  <div class="form group">
    <label for="post_title">Post Title</label>
    <input type="text" name="post_title" class="form-control" value="">
  </div>

  <div class="form group">
    <label for="post_category">Post Category</label>
    <input type="text" name="post_category" class="form-control" value="">
  </div>

  <div class="form group">
    <label for="post_author">Post Author</label>
    <input type="text" name="post_author" class="form-control" value="">
  </div>

  <div class="form group">
    <label for="$post_status" >Post Status</label>
    <input type="text" name="post_status" class="form-control" value="">
  </div>

  <div class="form group">
    <label for="post_image" >Post Image </label>
    <input type="file" name="post_image" class="form-control" value="">
  </div>

  <div class="form group">
    <label for="post_tags" >Post Tags </label>
    <input type="text" name="post_tags" class="form-control" value="">
  </div>

  <div class="form group">
    <label for="post_content" >Post Content </label>
    <textarea cols='30' rows='10' type="text" name="post_content" class="form-control" value=""></textarea>
  </div>
  <div class="form group">
    <br>
    <input type="submit" class="btn btn-primary" name="createPost" class="form-control" value="Publish Post">
  </div>


</form>
