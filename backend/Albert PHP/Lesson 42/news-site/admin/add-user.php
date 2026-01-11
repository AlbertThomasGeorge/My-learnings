<?php include "header.php";  
    if($_SESSION['user_role']==0){
      header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
    }
    if(isset($_POST['save'])){
        include 'config.php';
        $fname = mysqli_real_escape_string($conn, $_POST['fname']); /* mysqli_real_escape_string function is used so as to be safe from hackers */
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $role = mysqli_real_escape_string($conn, $_POST['role']);
        $sqlquery1 = "SELECT username FROM users WHERE username='{$user}'";
        $result = mysqli_query($conn, $sqlquery1) or die("Query Failed"); 
        if(mysqli_num_rows($result)>0){
            echo "<p style='color:red; text-align:center; margin:10px 0;'>UserName already exists</p>";
        }
        else{
            $sqlquery2 = "INSERT into users(first_name, last_name, username, `password`, `role`) VALUES ('{$fname}', '{$lname}', '{$user}', '{$password}', '{$role}')";
            if(mysqli_query($conn, $sqlquery2)){
                /* only if query runs successfully then statements inside if are run */
                mysqli_close($conn);
                header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/users.php");
            }
        }
        mysqli_close($conn);
    }
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div>
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div>
                  <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role">
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save">
                  </form>
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
