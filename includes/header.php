<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="index.php">
        <span>Electronic Waste System</span>
      </a>
      <div class="navbar-collapse" id="navbarNav">
        <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="admin/login.php">
                <img src="images/login.png" alt="Admin Login" />
                <span>Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee/login.php">
                <img src="images/signup.png" alt="Employee Login" />
                <span>Employee</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users/login.php">
                <img src="images/signup.png" alt="User Login" />
                <span>User</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>

<style>
  /* Header background */
  .header_section {
    background: linear-gradient(135deg, #ff007f, #ff9900, #33cc33, #00c6ff);
    background-size: 600% 600%;
    animation: gradientAnimation 10s ease infinite;
    padding: 5px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  @keyframes gradientAnimation {
    0% { background-position: 0% 0%; }
    50% { background-position: 100% 100%; }
    100% { background-position: 0% 0%; }
  }

  .custom_nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .navbar-brand span {
    font-size: 2rem;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    animation: textGlow 1.5s infinite alternate;
  }

  @keyframes textGlow {
    from {
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }
    to {
      text-shadow: 0 0 20px rgba(255, 255, 255, 1);
    }
  }

  .navbar-nav .nav-item .nav-link {
    color: #fff;
    font-size: 1.2rem;
    margin: 0 20px;
    display: flex;
    align-items: center;
    position: relative;
    transition: color 0.3s, transform 0.3s;
  }

  .navbar-nav .nav-item .nav-link::before {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 3px;
    background: #ffeb3b;
    transition: width 0.3s;
  }

  .navbar-nav .nav-item .nav-link:hover::before {
    width: 100%;
  }

  .navbar-nav .nav-item .nav-link img {
    width: 24px;
    margin-right: 10px;
    transition: transform 0.3s, filter 0.3s;
  }

  .navbar-nav .nav-item .nav-link:hover img {
    transform: scale(1.2);
    filter: brightness(1.2);
  }

  /* Responsive adjustments */
  @media (max-width: 991px) {
    .d-none {
      display: block !important;
    }

    .navbar-nav {
      flex-direction: column;
      align-items: center;
      margin-top: 15px;
    }

    .navbar-nav .nav-item {
      margin: 10px 0;
    }
  }
</style>
