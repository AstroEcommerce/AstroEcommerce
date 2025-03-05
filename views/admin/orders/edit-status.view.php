<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Order</title>
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
          <h1>Edit Order #<?php echo $id; ?> Status</h1>
        </header>

        <!-- Edit Order Form -->
        <form class="edit-form">
          <div class="input-group">
            <label for="customer"><i class="fas fa-user"></i> Customer</label>
            <input type="text" id="customer" value="John Doe" required />
          </div>
          <div class="input-group">
            <label for="date"><i class="fas fa-calendar"></i> Date</label>
            <input type="date" id="date" value="2023-10-01" required />
          </div>
          <div class="input-group">
            <label for="status"><i class="fas fa-tasks"></i> Status</label>
            <select id="status">
              <option value="Pending">Pending</option>
              <option value="Completed">Completed</option>
              <option value="Cancelled">Cancelled</option>
            </select>
          </div>
          <div class="input-group">
            <label for="total"><i class="fas fa-dollar-sign"></i> Total</label>
            <input type="number" id="total" value="199.99" required />
          </div>
          <button type="submit" class="save-button">Save Changes</button>
        </form>
      </div>
    </div>
  </body>
</html>
