<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSS Digikidz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/dashboard.css">


    <style>
        /* Hamburger CSS */
        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 250px;
                position: fixed;
                left: -250px;
                top: 0;
                height: 100%;
                background-color: #fff;
                z-index: 999;
                transition: left 0.3s ease;
            }

            .sidebar.active {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .hamburger {
                display: block;
            }
        }

        /* Styling untuk statistik */
        .stats {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .stat {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            flex: 1;
            margin: 0 10px;
        }

        .stat i {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .stat p {
            font-size: 16px;
            font-weight: bold;
        }

        .stat small {
            font-size: 12px;
            color: #888;
        }

        /* KNN Form */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
  <!-- Hamburger menu -->
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
      <li id="dataTrainingMenu"><i class="fas fa-table"></i> Data Training</li> <!-- Menu baru -->
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

    <!-- Statistik bagian -->
    <div class="stats" id="statsSection">
      <div class="stat">
        <i class="fas fa-user"></i>
        <p>Data Murid</p>
        <small>12</small>
      </div>
      <div class="stat">
        <i class="fas fa-archive"></i>
        <p>Data Kriteria</p>
        <small>6</small>
      </div>
      <div class="stat">
        <i class="fas fa-table"></i>
        <p>Data Training</p>
        <small>11</small>
      </div>
      <div class="stat">
        <i class="fas fa-history"></i>
        <p>Data Hasil</p>
        <small>0</small>
      </div>
    </div>

    <!-- Dashboard Section -->
    <div id="dashboardSection" class="dashboard">
      <h2>DASHBOARD</h2>
      <img alt="Digikidz School Of Technology" height="400" src="assets/images/digikidz.png" width="800"/>
    </div>

    <!-- Data Murid Section -->
    <div id="dataMuridSection" class="table-container" style="display: none;">
      <div class="table-header">
        <h2>Data Murid</h2>
        <button class="btn">Tambah Data</button>
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Age</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Junior 1</td>
            <td>10</td>
            <td class="actions">
              <i class="fas fa-eye view"></i>
              <i class="fas fa-edit edit"></i>
              <i class="fas fa-trash delete"></i>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Data Kriteria Section -->
    <div id="dataKriteriaSection" class="table-container" style="display: none;">
      <div class="table-header">
        <h2>Data Kriteria</h2>
        <div class="table-controls">
          <label for="entries">Show 
            <select id="entries" name="entries">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="20">20</option>
            </select> entries
          </label>
          <input type="text" id="search" placeholder="Search...">
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Durasi Penyelesaian Tugas (menit)</th>
            <th>Keberhasilan Aktivitas (%)</th>
            <th>Interaksi dengan Instruktor (frekuensi)</th>
            <th>Kreativitas (skor 1-10)</th>
            <th>Konsentrasi (skor 1-10)</th>
            <th>Grade/Level</th>
          </tr>
        </thead>
        <tbody id="kriteriaTableBody">
          <tr>
            <td>1</td>
            <td>Jane Doe</td>
            <td>12</td>
            <td>45</td>
            <td>85</td>
            <td>10</td>
            <td>8</td>
            <td>7</td>
            <td>Junior 2</td>
          </tr>
        </tbody>
      </table>
      <div class="pagination">
        <button class="prev-btn">Previous</button>
        <span id="pageInfo">Page 1 of 1</span>
        <button class="next-btn">Next</button>
      </div>
    </div>

    <!-- Data Training Section -->
    <!-- Data Training Section -->
<div id="dataTrainingSection" class="table-container" style="display: none;">
    <div class="table-header">
        <h2>Data Training</h2>
        <div class="table-controls">
            <label for="entriesTraining">Show 
                <select id="entriesTraining" name="entriesTraining">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select> entries
            </label>
            <input type="text" id="searchTraining" placeholder="Search...">
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>Level</th>
                <th>Actions</th> <!-- Added Actions Header -->
            </tr>
        </thead>
        <tbody id="trainingTableBody">
            <tr>
                <td>1</td>
                <td>Student X</td>
                <td>40</td>
                <td>80</td>
                <td>30</td>
                <td>60</td>
                <td>5</td>
                <td>Junior 1</td>
                <td class="actions"> <!-- Added Actions Column -->
                    <i class="fas fa-edit edit" title="Edit"></i>
                    <i class="fas fa-trash delete" title="Delete"></i>
                </td>
            </tr>
            <!-- You can add more rows here -->
        </tbody>
    </table>
    <div class="pagination">
        <button class="prev-btn-training">Previous</button>
        <span id="pageInfoTraining">Page 1 of 1</span>
        <button class="next-btn-training">Next</button>
    </div>
</div>


    <!-- KNN Section -->
    <div id="knnSection" style="display: none;">
    <h2>PROSES METODE KNN</h2>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input id="nama" placeholder="Masukkan Nama" type="text" />
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input id="umur" placeholder="Masukkan Umur" type="text" />
    </div>
    <div class="form-group">
        <label for="durasi">Durasi Penyelesaian Tugas (menit)</label>
        <input id="durasi" placeholder="Masukkan Durasi (menit)" type="text" />
    </div>
    <div class="form-group">
        <label for="keberhasilan">Keberhasilan Aktivitas (%)</label>
        <input id="keberhasilan" placeholder="Masukkan Keberhasilan (%)" type="text" />
    </div>
    <div class="form-group">
        <label for="interaksi">Interaksi dengan Instruktor (frekuensi)</label>
        <input id="interaksi" placeholder="Masukkan Interaksi (frekuensi)" type="text" />
    </div>
    <div class="form-group">
        <label for="kreativitas">Kreativitas (skor 1-10)</label>
        <input id="kreativitas" placeholder="Masukkan Kreativitas (skor 1-10)" type="text" />
    </div>
    <div class="form-group">
        <label for="konsentrasi">Konsentrasi (skor 1-10)</label>
        <input id="konsentrasi" placeholder="Masukkan Konsentrasi (skor 1-10)" type="text" />
    </div>
    <button id="knnSubmitBtn" class="btn">Proses</button>
    <div id="knnResult" style="margin-top: 20px;"></div>
</div>

  <script>
    // JavaScript to handle menu clicks and section visibility
    document.getElementById('dashboardMenu').addEventListener('click', function() {
        showSection('dashboardSection');
    });

    document.getElementById('dataMuridMenu').addEventListener('click', function() {
        showSection('dataMuridSection');
    });

    document.getElementById('dataKriteriaMenu').addEventListener('click', function() {
        showSection('dataKriteriaSection');
    });

    document.getElementById('dataTrainingMenu').addEventListener('click', function() {
        showSection('dataTrainingSection');
    });

    document.getElementById('knnMenu').addEventListener('click', function() {
        showSection('knnSection');
    });

    function showSection(sectionId) {
        const sections = ['dashboardSection', 'dataMuridSection', 'dataKriteriaSection', 'dataTrainingSection', 'knnSection'];
        
        sections.forEach(section => {
            document.getElementById(section).style.display = (section === sectionId) ? 'block' : 'none';
        });
    }

    // Hamburger Menu Toggle
    document.getElementById('hamburger').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    });
  </script>
  
</body>
</html>
