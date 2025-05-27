<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VietnamWorks Login</title>
  <link rel="stylesheet" href="../css/login.css" />
</head>
<body>

  <header class="site-header">
    <div class="header-text">
      <img src="../img/vnw_empower_growth_logo_white.png" alt="Jobhive Logo" class="">
    </div>
  </header>

  <div class="container">
    <div class="login-box">
      <h2>Sign in to your account</h2>
      <p>Access your account to manage your profile and apply for the jobs you want.</p>
      
      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Input Your Password" required />
        
        <div class="options">
          <label><input type="checkbox" name="remember" /> Remember me</label>
          <a href="#">Forgot password?</a>
        </div>
        
        <button type="submit">Sign In</button>
      </form>
      
      <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
    </div>
  </div>

</body>
</html>
