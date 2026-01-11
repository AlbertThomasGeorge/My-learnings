<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div>
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div>
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td class='id'>1</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>2</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td> <!--the font-awesome icon will be blue in color by default since it is inside an anchor tag-->
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>3</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>4</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>5</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>6</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>7</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>8</td>
                              <td>Lorem ipsum dolor sit amet</td>
                              <td>Html</td>
                              <td>01 Nov, 2019</td>
                              <td>Admin</td>
                              <td class='edit'><a href='update-post.php'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a href="">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
