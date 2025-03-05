<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
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
              <a href="/admin/categories" class="active"
                ><i class="fas fa-list"></i> Categories</a
              >
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
          <h1>Categories</h1>
          <button class="add-product" title="Add a new product">
            <a href="/admin/categories/create" class="add-product-link"><i class="fas fa-plus"></i> Add Category</a>
          </button>
        </header>

        <!-- Categories Table -->
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php if ( isset($categories) && !empty($categories)): ?>
              <?php foreach ($categories as $key => $category): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['created_at']; ?></td>
                    <td><?php echo $category['updated_at']; ?></td>
                    <td>
                        <button class="edit" title="Edit this product">
                            <a href="/admin/categories/<?php echo $category['id']; ?>/edit" title="Edit this category">
                                <i class="fas fa-edit"></i>
                            </a>
                        </button>
                        
                        <!-- Delete Button -->
                        <form id="deleteForm_<?php echo $category['id']; ?>" action="/admin/categories/<?php echo $category['id']; ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" class="delete" title="Delete this category" onclick="showDeleteModal(<?php echo $category['id']; ?>)">
                                <i class="fas fa-trash"></i>
                            </button>

                            <!-- Custom Pop-up (Modal) -->
                            <div id="deleteModal_<?php echo $category['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <p>Are you sure you want to delete <?= $category['id']; ?>?</p>
                                    <div class="modal-buttons">
                                        <button type="submit" onclick="confirmDelete(<?php echo $category['id']; ?>)">Sure</button>
                                        <button type="button" onclick="closeDeleteModal(<?php echo $category['id']; ?>)">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
              <?php else: ?>
                  <tr>
                      <td colspan="12">No categories available.</td>
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
      // Show the delete confirmation modal for the selected category
        function showDeleteModal(categoryId) {
            document.getElementById('deleteModal_' + categoryId).style.display = 'flex';
        }

        // Close the delete confirmation modal for the selected category
        function closeDeleteModal(categoryId) {
            document.getElementById('deleteModal_' + categoryId).style.display = 'none';
        }

        // Confirm deletion and submit the form for the selected category
        function confirmDelete(categoryId) {
            document.getElementById('deleteForm_' + categoryId).submit();
        }

    </script>
    
  </body>
</html>
