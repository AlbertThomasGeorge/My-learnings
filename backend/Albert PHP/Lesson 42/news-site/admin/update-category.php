<?php include "header.php"; 
    if($_SESSION['user_role']==0){
      header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
    }
    if(isset($_POST['submit'])){
        include 'config.php';
        $catid = mysqli_real_escape_string($conn, $_POST['cat_id']);
        $catname = mysqli_real_escape_string($conn, $_POST['cat_name']); 
        $sqlquery = "UPDATE category SET category_name='{$catname}' WHERE category_id={$catid}";
        if(mysqli_query($conn, $sqlquery)){
            /* only if query runs successfully then statements inside if are run */
            mysqli_close($conn);
            header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/category.php");
        }
        mysqli_close($conn);
    }
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div>
                  <h1 class="admin-heading"> Update Category</h1>
              </div>
              <div>
                <?php
                    include 'config.php';
                    $cat_id = $_GET['catid'];
                    $sql = "SELECT * FROM category WHERE category_id={$cat_id}";
                    $result = mysqli_query($conn, $sql) or die("Query Failed");
                    if(mysqli_num_rows($result)>0){ 
                        while($row=mysqli_fetch_assoc($result)){
                ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
                                <div class="form-group">
                                    <input type="hidden" name="cat_id" class="form-control" value="<?php echo $row['category_id']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>" placeholder="" required>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            </form>
                <?php
                        }
                    }
                    mysqli_close($conn);
                ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
