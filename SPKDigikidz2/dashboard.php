<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSS Digikidz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="assets/js/dashboard.js" defer></script> <!-- Include JavaScript file -->
    <style>
        /* Add your existing styles here */
    </style>
</head>
<body>
  <div class="hamburger" id="hamburger">
    <i class="fas fa-bars"></i>
  </div>

  <div class="sidebar" id="sidebar">
    <h1># DSS Digikidz</h1>
    <div class="profile">
      <img alt="Profile Picture" height="50" src="assets/images/Pion-07.png" width="50"/>
      <p>Administrator</p>
      <small>Admin</small>
    </div>
    <ul>
      <li class="active" id="dashboardMenu">
        <i class="fas fa-tachometer-alt"></i> Dashboard
      </li>
      <li id="dataMuridMenu"><i class="fas fa-child"></i> Data Murid</li>
      <li id="dataKriteriaMenu"><i class="fas fa-clipboard-list"></i> Data Kriteria</li>
      <li id="dataTrainingMenu"><i class="fas fa-table"></i> Data Training</li>
      <li id="knnMenu"><i class="fas fa-brain"></i> KNN</li>
      <li><i class="fas fa-history"></i> History Hasil</li>
      <li><i class="fas fa-user-cog"></i> Akun</li>
    </ul>
  </div>

  <div class="main-content">
    <div class="header">
      <div class="user-info">
        <img alt="User Picture" src="assets/images/Pion-07.png"/>
        <p>Administrator</p>
        <i class="fas fa-chevron-down"></i>
        <a href="logout.php" style="text-decoration:none; color:black;"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>

    <div id="dashboardSection" class="dashboard">
      <h2>DASHBOARD</h2>
      <img alt="Digikidz School Of Technology" height="400" src="assets/images/digikidz.png" width="800"/>
    </div>

    <!-- Include other sections -->
    <div id="dataMuridSection" class="table-container" style="display: none;">
      <?php include 'data/data_murid.php'; ?>
    </div>

    <div id="dataKriteriaSection" class="table-container" style="display: none;">
      <?php include 'data/data_kriteria.php'; ?>
    </div>

    <div id="dataTrainingSection" class="table-container" style="display: none;">
      <?php include 'data/data_training.php'; ?>
    </div>

    <div id="knnSection" style="display: none;">
      <?php include 'data/knn.php'; ?>
    </div>
  </div>
</body>
</html>
