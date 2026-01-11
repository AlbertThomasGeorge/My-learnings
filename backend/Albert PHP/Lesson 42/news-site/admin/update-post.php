<?php include "header.php"; ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div>
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="1" placeholder="">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="post_title"  class="form-control" value="Lorem ipsum dolor sit amet">
            </div>
            <div class="form-group">
                <label> Description</label>
                <textarea name="postdesc" class="form-control" required rows="5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                </textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
                    <option value="">Html</option>
                    <option value="">Css</option>
                    <option value="">javascript</option>
                    <option value="">Python</option>
                </select>
            </div>
            <div class="form-group">
                <label>Post image</label>
                <input type="file" name="new-image">
                <img src="upload/post_1.jpg" height="150px">
                <input type="hidden" name="old-image" value="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
