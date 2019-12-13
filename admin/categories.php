<?php include "includes/admin_header.php"; ?>
<?php include "functions.php"; ?>

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
                    <?php insert_category(); ?>

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
                            <?php  table_categories(); ?>
                            <?php delete_categories();  ?>
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
