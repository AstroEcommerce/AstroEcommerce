<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="/public/css/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="login-container">
      <div class="login-box">
        <div class="login-header">
          <img src="/public/images/logo.png" alt="Logo" width="200px" class="login-logo" />
          <h2>Admin Dashboard</h2>
          <p>Please log in to access the admin panel</p>
        </div>
        <form class="login-form">
          <div class="input-group">
            <label for="email"
              ><i class="fas fa-envelope"></i> Admin Email</label
            >
            <input
              type="email"
              id="email"
              placeholder="Enter your admin email"
              required
            />
          </div>
          <div class="input-group">
            <label for="password"><i class="fas fa-lock"></i> Password</label>
            <input
              type="password"
              id="password"
              placeholder="Enter your password"
              required
            />
          </div>
          <button type="submit" class="login-button">Log In</button>
        </form>
        <div class="login-footer">
          <p>Contact the system administrator for access.</p>
        </div>
      </div>
    </div>
  </body>
</html>
