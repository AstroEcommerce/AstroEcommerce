<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Admin</title>
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
          <h1>Add Admin</h1>
        </header>

        <!-- Add Admin Form -->
        <form class="add-form">
          <div class="input-group">
            <label for="name"><i class="fas fa-user"></i> Name</label>
            <input
              type="text"
              id="name"
              placeholder="Enter admin name"
              required
            />
          </div>
          <div class="input-group">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input
              type="email"
              id="email"
              placeholder="Enter admin email"
              required
            />
          </div>
          <div class="input-group">
            <label for="role"><i class="fas fa-user-tag"></i> Role</label>
            <select id="role" required>
              <option value="">Select role</option>
              <option value="Admin">Admin</option>
              <option value="Super Admin">Super Admin</option>
            </select>
          </div>
          <div class="input-group">
            <label for="password"><i class="fas fa-lock"></i> Password</label>
            <input
              type="password"
              id="password"
              placeholder="Enter password"
              required
            />
          </div>
          <button type="submit" class="save-button">Add Admin</button>
        </form>
      </div>
    </div>
  </body>
</html>
