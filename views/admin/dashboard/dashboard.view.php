<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="/public/css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="logo"><img src="/public/images/logo.png" alt="logo" width="150"></div>
      <nav>
        <ul>
          <li><a href="/admin/dashboard" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
          <li><a href="/admin/orders"><i class="fas fa-shopping-cart"></i> Orders</a></li>
          <li><a href="/admin/users"><i class="fas fa-users"></i> Users</a></li>
          <li><a href="/admin/admins"><i class="fas fa-user-shield"></i> Admins</a></li>
          <li><a href="/admin/products"><i class="fas fa-box"></i> Products</a></li>
          <li><a href="/admin/categories"><i class="fas fa-list"></i> Categories</a></li>
          <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </nav>
    </div>

    <!-- Content Area -->
    <div class="content">
      <header>
        <h1>Welcome, Admin</h1>
        <div class="profile-icon">
          <i class="fas fa-user-circle"></i>
        </div>
      </header>

      <!-- Key Metrics Cards -->
      <div class="metrics">
        <div class="card">
          <h3>Total Sales</h3>
          <p>$12,345</p>
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="card">
          <h3>Users</h3>
          <p>1,234</p>
          <i class="fas fa-users"></i>
        </div