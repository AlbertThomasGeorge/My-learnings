<?php include "header.php"; 
    if($_SESSION['user_role']==0){
      header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
    }
    if(isset($_POST['save'])){
        include 'config.php';
        $cat = mysqli_real_escape_string($conn, $_POST['cat']); /* mysqli_real_escape_string function is used so as to be safe from hackers */
        $sqlquery = "INSERT into category(category_name) VALUES ('{$cat}')";
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
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div>
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save">
                  </form>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
