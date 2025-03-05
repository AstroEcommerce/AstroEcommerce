<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Product</title>
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
          <h1>Edit Product <?php echo '#' . $id; ?></h1>
        </header>

        <!-- Edit Product Form -->
        <form class="edit-form" action="/admin/products/<?php echo $id; ?>/edit" method="POST">
          
        <input type="hidden" name="_method" value="PUT" />
          
          <?php
          if (isset($errors) && !empty($errors)) {
              foreach ($errors as $error) {
                  echo '<li style="color:red">' . $error[0] . '</li> <br>';
              }
          }
          ?>
        
          <div class="input-group">
            <label for="name"><i class="fas fa-box"></i> Name</label>
            <input
              type="text"
              id="name"
              name="name"
              value="<?php if (isset($product) && !empty($product)) echo $product['name']; ?>"
              placeholder="Enter product name"
              required
            />
          </div>
          <div class="input-group">
            <label for="description"><i class="fas fa-align-left"></i> Description</label>
            <textarea
              id="description"
              name="description"
              placeholder="Enter product description"
              rows="4"
            ><?php if (isset($product) && !empty($product)) echo $product['description']; ?></textarea>
          </div>
          <div class="input-group">
            <label for="price"><i class="fas fa-dollar-sign"></i> Price</label>
            <input
              type="number"
              id="price"
              name="price"
              value="<?php if (isset($product) && !empty($product)) echo $product['price']; ?>"
              placeholder="Enter price"
              required
            />
          </div>
          <div class="input-group">
            <label for="stock"><i class="fas fa-cubes"></i> Stock</label>
            <input
              type="number"
              id="stock"
              name="stock"
              value="<?php if (isset($product) && !empty($product)) echo $product['stock']; ?>"
              placeholder="Enter stock quantity"
              required
            />
          </div>
          <div class="input-group">
            <label for="duration"><i class="fas fa-calendar"></i> Duration</label>
            <input
              type="number"
              id="duration"
              name="duration"
              value="<?php if (isset($product) && !empty($product)) echo $product['duration']; ?>"
              placeholder="Enter duration in days"
              required
            />
          </div>
          <div class="input-group">
            <label for="power-level"><i class="fas fa-bolt"></i> Power Level</label>
            <select id="power-level" name="power_level" required>
              <option value="low" <?php if (isset($product) && $product['power_level'] == 'low') echo 'selected'; ?>>Low</option>
              <option value="medium" <?php if (isset($product) && $product['power_level'] == 'medium') echo 'selected'; ?>>Medium</option>
              <option value="high" <?php if (isset($product) && $product['power_level'] == 'high') echo 'selected'; ?>>High</option>
            </select>
          </div>
          <div class="input-group">
            <label for="category"><i class="fas fa-list"></i> Category</label>
            <select id="category" name="category_id" required>
            <?php if (isset($categories) && count($categories) > 0): ?>
              <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>" <?php if (isset($product) && $product['category_id'] == $category['id']) echo 'selected'; ?>><?php echo $category['name']; ?></option>
              <?php endforeach; ?>
            <?php else: ?>
              <option value="">No categories found</option>
            <?php endif; ?>
            </select>
          </div>
          <div class="input-group">
            <label for="image-url"><i class="fas fa-image"></i> Image URL</label>
            <input
              type="text"
              id="image-url"
              name="image_url"
              value="<?php if (isset($product) && !empty($product)) echo $product['image_url']; ?>"
              placeholder="Enter image URL"
              required
            />
          </div>
          <button type="submit" class="save-button">Save Changes</button>
        </form>
      </div>
    </div>
  </body>
</html>