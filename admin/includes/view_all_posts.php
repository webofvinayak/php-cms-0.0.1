<?php
  if(isset($_GET['delete'])){

    $delete_post_id = $_GET['delete'];

    ///echo $delete_post_id;

      $delete_query = "DELETE FROM posts WHERE post_id = {$delete_post_id} ";

      $delete_category = mysqli_query($connection,$delete_query);
      //header("Location : categories.php");
      //header("Location: ../posts.php");

  }

 ?>


<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Date</th>
      <th>Author</th>
      <th>Title</th>
      <th>Category</th>
      <th>Status</th>
      <th>Images</th>
     <th>Tags</th>
     <th>Comments</th>
     <th>Delete</th>
    </tr>
  </thead>

    <tbody>

      <?php
      $query = "SELECT * FROM posts ";
      $fetch_all_posts = mysqli_query($connection,$query);

      while($row = mysqli_fetch_assoc($fetch_all_posts)){
       $post_id = $row['post_id'];
       $post_author = $row['post_author'];
       $post_title = $row['post_title'];
       $post_category_id = $row['post_category_id'];
       $post_date = $row['post_date'];
       $post_image = $row['post_image'];
       $post_content = $row['post_content'];
       $post_tag = $row['post_tag'];
       $post_comment_count = $row['post_comment_count'];
       $post_status = $row['post_status'];



    echo "<tr>";
    echo "<td>{$post_id}</td>";
    echo "<td>{$post_date}</td>";
    echo "<td>{$post_author}</td>";
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_category_id}</td>";
    echo "<td>{$post_status}</td>";
    echo "<td><img width='100' src='../images/{$post_image}'/></td>";
    echo "<td>{$post_tag}</td>";
    echo "<td>{$post_comment_count}</td>";
    echo "<td><a href='posts.php?delete={$post_id}'> Delete</a></td>";
    echo"<tr>";


    }
    ?>

    </tbody>

</table>
