<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Category</title>
    <link rel="stylesheet" href="/public/css/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="dashboard">
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="logo">
          <img src="/public/images/logo.png" alt="logo" width="150" />
        </div>
        <nav>
          <ul>
            <li>
              <a href="/admin/dashboard"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
              <a href="/admin/orders"><i class="fas fa-shopping-cart"></i> Orders</a>
            </li>
            <li>
              <a href="/admin/users"><i class="fas fa-users"></i> Users</a>
            </li>
            <li>
              <a href="/admin/admins"><i class="fas fa-user-shield"></i> Admins</a>
            </li>
            <li>
              <a href="/admin/products"><i class="fas fa-box"></i> Products</a>
            </li>
            <li>
              <a href="/admin/categories"><i class="fas fa-list"></i> Categories</a>
            </li>
            <li>
              <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Content Area -->
      <div class="content">
        <header>
          <h1>Edit Category <?php echo '#' .$id; ?></h1>
        </header>

        <!-- Edit Category Form -->
        <form class="edit-form" action="/admin/categories/<?php echo $id; ?>/edit" method="POST">

        
        <?php
          if (isset($errors) && !empty($errors)) {
              foreach ($errors as $error) {
                  echo '<li style="color:red">' . $error[0] . '</li> <br>';
              }
          }
          ?>

          <input type="hidden" name="_method" value="PUT" />
          <div class="input-group">
            <label for="name" ><i class="fas fa-list"></i> Name</label>
            <input type="text" id="name" name="name" value="<?php if (isset($category) && !empty($category)) echo $category[0]['name']; ?>" required />
          </div>
          <button type="submit" class="save-button">Save Changes</button>
        </form>
      </div>
    </div>
  </body>
</html>
