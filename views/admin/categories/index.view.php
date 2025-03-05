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
          <button class="add-category" title="Add a new category">
            <i class="fas fa-plus"></i> Add Category
          </button>
        </header>

        <!-- Categories Table -->
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Category ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#401</td>
                <td>Electronics</td>
                <td>Devices and gadgets</td>
                <td>2023-07-01</td>
                <td>
                  <button class="edit" title="Edit this category">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="delete" title="Delete this category">
                    <i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
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
  </body>
</html>
