<div class="table-header">
  <h2>Proses KNN</h2>
  <button class="btn">Jalankan Proses</button>
</div>

<div class="knn-process">
  <h3>Parameter KNN</h3>
  <form method="post" action="proses_knn.php">
    <div class="form-group">
      <label for="kValue">Nilai K (Jumlah Tetangga):</label>
      <input type="number" name="kValue" id="kValue" value="3" required>
    </div>
    <div class="form-group">
      <label for="distanceMetric">Metode Jarak:</label>
      <select name="distanceMetric" id="distanceMetric">
        <option value="euclidean">Euclidean</option>
        <option value="manhattan">Manhattan</option>
      </select>
    </div>
    <button type="submit" class="btn">Proses KNN</button>
  </form>
</div>

<div class="knn-results">
  <h3>Hasil KNN</h3>
  <!-- Example result -->
  <p>Nama: John Doe</p>
  <p>Prediksi Level: Senior 1</p>
</div>
