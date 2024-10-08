<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kriteria</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/data_kriteria.css">
</head>
<body>
    <div class="main-content">
        <!-- Data Kriteria Section -->
        <div class="table-container">
            <div class="table-header">
                <h2>Data Kriteria</h2>
                <div class="table-controls">
                    <button class="btn" onclick="window.location.href='data/subkriteria.php'">Subkriteria</button>
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
                        <th>Nama Kriteria</th>
                        <th>Keterangan</th>
                        <th>Actions</th> <!-- Kolom Actions -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Umur</td>
                        <td>Usia dari peserta didik</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Kelas</td>
                        <td>Tingkat atau level dari peserta didik</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Durasi Penyelesaian Tugas</td>
                        <td>Waktu yang dibutuhkan untuk menyelesaikan tugas (dalam menit)</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Interaksi dengan Instruktor</td>
                        <td>Frekuensi interaksi peserta didik dengan instruktur selama pembelajaran</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Kreativitas</td>
                        <td>Penilaian kreativitas peserta didik dalam penyelesaian tugas (skor 1-10)</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Konsentrasi</td>
                        <td>Penilaian tingkat konsentrasi peserta didik selama belajar (skor 1-10)</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">
                <button class="prev-btn">Previous</button>
                <span id="pageInfo">Page 1 of 1</span>
                <button class="next-btn">Next</button>
            </div>
        </div>
    </div>
</body>
</html>
