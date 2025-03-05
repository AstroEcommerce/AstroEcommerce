<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
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
              <a href="/admin/products" class="active"
                ><i class="fas fa-box"></i> Products</a
              >
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
          <h1>Products</h1>
          <button class="add-product" title="Add a new product">
            <a href="/admin/products/create" class="add-product-link"><i class="fas fa-plus"></i> Add Product</a>
          </button>
        </header>

        <!-- Products Table -->
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Duration</th>
                <th>Power Lever</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($products)): ?>
                  <?php foreach ($products as $key => $product): ?>
                      <tr>
                          <td><?php echo $key + 1; ?></td>
                          <td><?php echo $product['id']; ?></td>
                          <td><img src="/public/images/products/<?php echo $product['image_url']; ?>" alt="product" width="50" /></td>
                          <td><?php echo $product['name']; ?></td>
                          <td><?php echo $product['description']; ?></td>
                          <td>$<?php echo $product['price']; ?></td>
                          <td><?php echo $product['stock']; ?></td>
                          <td><?php echo $product['duration']; ?> days</td>
                          <td><?php echo $product['power_level']; ?></td>
                          <td><?php echo $product['category']; ?></td>
                          <td><?php echo $product['created_at']; ?></td>
                          <td><?php echo $product['updated_at']; ?></td>
                          <td>
                              <button class="edit" title="Edit this product">
                                  <a href="/admin/products/<?php echo $product['id']; ?>/edit" title="Edit this product">
                                      <i class="fas fa-edit"></i>
                                  </a>
                              </button>
                              <!-- Delete Button -->
                                <form id="deleteForm" action="/admin/products/<?php echo $product['id']; ?>" method="post">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="button" class="delete" title="Delete this product" onclick="showDeleteModal()">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                </form>

                                <!-- Custom Pop-up (Modal) -->
                                <div id="deleteModal" class="modal">
                                  <div class="modal-content">
                                    <p>Are you sure you want to delete this product?</p>
                                    <div class="modal-buttons">
                                      <button type="button" onclick="confirmDelete()">Sure</button>
                                      <button type="button" onclick="closeDeleteModal()">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              <?php else: ?>
                  <tr>
                      <td colspan="12">No products available.</td>
                  </tr>
              <?php endif; ?>

              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="pagination">
          <button title="Previous page">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button title="Page 1">1</button>
          <button title="Page 2">2</button>
          <button title="Page 3">3</button>
          <button title="Next page">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
    
    
    
    <script>
      // Show the delete confirmation modal
      function showDeleteModal() {
        document.getElementById('deleteModal').style.display = 'flex';
      }

      // Close the delete confirmation modal
      function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
      }

      // Confirm deletion and submit the form
      function confirmDelete() {
        document.getElementById('deleteForm').submit();
      }
    </script>
    
  </body>
</html>
