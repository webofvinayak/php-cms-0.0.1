<?php

///////////////////////////////////////////////////////////////////////////////
function insert_category(){
  global $connection;
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
     }
  }

///////////////////////////////////////////////////////////////////////////////
function table_categories(){
  global $connection;
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
}


///////////////////////////////////////////////////////////////////////////////
function delete_categories(){
  global $connection;

  if(isset($_GET['delete'])){
    $del_cat_id = $_GET["delete"];

    $delete_query = "DELETE FROM categories WHERE cat_id = {$del_cat_id} ";

    $delete_category = mysqli_query($connection,$delete_query);
    //header("Location : categories.php");
    header("Location: categories.php");
   }

}

//////////////////////////////////////////////////////////////////////////////

 ?>
