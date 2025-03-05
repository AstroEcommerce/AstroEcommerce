
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users</title>
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
        <div class="logo"><img src="/public/images/logo.png" alt="logo" width="150" /></div>
        <nav>
          <ul>
            <li>
              <a href="/admin/dashboard"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
              <a href="/admin/orders"
                ><i class="fas fa-shopping-cart"></i> Orders</a
              >
            </li>
            <li>
              <a href="/admin/users" class="active"
                ><i class="fas fa-users"></i> Users</a
              >
            </li>
            <li>
              <a href="/admin/admins"
                ><i class="fas fa-user-shield"></i> Admins</a
              >
            </li>
            <li>
              <a href="/admin/products"><i class="fas fa-box"></i> Products</a>
            </li>
            <li>
              <a href="/admin/categories"
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
          <h1>Users</h1>
          <button class="add-user" title="Add a new user">
            <i class="fas fa-plus"></i> Add User
          </button>
        </header>

        <!-- Users Table -->
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Joined</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#101</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>Customer</td>
                <td>2023-09-15</td>
                <td>
                  <button class="edit" title="Edit this user">
                  <a href="/admin/users/101/edit"><i class="fas fa-edit"></i></a>
                  </button>
                  <button class="delete" title="Delete this user">
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
