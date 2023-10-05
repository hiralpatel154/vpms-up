<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS Links -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/all.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- JS Links -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


   <!---------------------- Data Table links ------------------>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/autofill/2.4.0/css/autoFill.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/autofill/2.4.0/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <title>Vehicle Parking Management System</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="fa-solid fa-square-parking"></i>
      <span class="logo_name">Parking Management</span>
    </div>
    <hr class="hr-css m-0">
    <div class="logged-in-user">
      <a href="#">
        <img src="../images/user2.jpg" alt="" class="user-img">
        <span class="link-name">Name</span>
      </a>

      <hr class="hr-css m-0">
    </div>
    <ul class="nav-links p-0">
      <li>
        <a href="dashboard.php" class="link-item">
          <i class="fa-solid fa-gauge"></i>
          <span class="link-name">Dashboard</span>
        </a>
        <ul class="sub-menu hidden-link blank">
          <li><a href="dashboard.php" class="link_name"></i>Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="booking.php" class="link-item">
          <i class="fa-solid fa-book"></i>
          <span class="link-name">Booking</span>
        </a>
        <ul class="sub-menu hidden-link blank">
          <li><a href="booking.php" class="link_name"></i>Booking</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link d-flex justify-content-between">
          <a href="#">
            <i class="fa-solid fa-car"></i>
            <span class="link-name">Vehicle</span>
          </a>
          <i class="fa-solid fa-angle-up me-4 arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a href="#" class="link_name"></i>Vehicle</a></li>
          <li><a href="owner-management.php" class="sub-item"><i class="fa-solid fa-bars-progress"></i>Owner Management Form</a></li>
          <li><a href="category.php" class="sub-item"><i class="fa-solid fa-list-ol"></i>Category</a></li>
          <li><a href="info-management.php" class="sub-item"><i class="fa-solid fa-sitemap"></i>Information Management</a></li>
        </ul>
      </li>
      <li>
        <a href="parking-slot.php" class="link-item">
          <i class="fa-solid fa-check-to-slot"></i>
          <span class="link-name">Parking Slot</span>
        </a>
        <ul class="sub-menu hidden-link blank">
          <li><a href="parking-slot.php" class="link_name"></i>Parking Slot</a></li>
        </ul>
      </li>
      <li>
        <a href="payment.php" class="link-item">
          <i class="fa-solid fa-money-bill"></i>
          <span class="link-name">Payment</span>
        </a>
        <ul class="sub-menu hidden-link blank">
          <li><a href="payment.php" class="link_name"></i>Payment</a></li>
        </ul>
      </li>
      <li>
        <a href="user-management.php" class="link-item">
          <i class="fa-solid fa-users-gear"></i>
          <span class="link-name">User Management</span>
        </a>
        <ul class="sub-menu hidden-link blank">
          <li><a href="user-management.php" class="link_name"></i>User Management</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link d-flex justify-content-between">
          <a href="user-group.php" class="link-item">
            <i class="fa-solid fa-users"></i>
            <span class="link-name">User Group</span>
          </a>
        </div>
        <ul class="sub-menu hidden-link">
          <li><a href="user-group.php" class="link_name"></i>User Group</a></li>
        </ul>
      </li>
      <li>
        <a href="logout.php" class="link-item">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span class="link-name">Logout</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Main Content -->
  <section class="home-section">
    <div class="home-content">
      <i class="fa-solid fa-bars menu-bar"></i>
    </div>