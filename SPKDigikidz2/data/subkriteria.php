<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subkriteria</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/data_subkriteria.css">
</head>
<body>
    <div class="main-content">
        <!-- Subkriteria Section -->
        <div class="table-container">
            <div class="table-header">
                <h2>Subkriteria</h2>
                <button class="btn" onclick="window.location.href='data_kriteria.php'">Kembali ke Kriteria</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Subkriteria</th>
                        <th>Keterangan</th>
                        <th>Kriteria Induk</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Subkriteria Kreativitas</td>
                        <td>Aspek kreativitas dalam menyelesaikan tugas</td>
                        <td>Kreativitas</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Subkriteria Konsentrasi</td>
                        <td>Aspek konsentrasi dalam belajar</td>
                        <td>Konsentrasi</td>
                        <td class="actions">
                            <i class="fas fa-eye view" title="View"></i>
                            <i class="fas fa-edit edit" title="Edit"></i>
                            <i class="fas fa-trash delete" title="Delete"></i>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak subkriteria sesuai kebutuhan -->
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
