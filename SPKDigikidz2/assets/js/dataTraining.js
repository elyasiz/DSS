document.addEventListener("DOMContentLoaded", function () {
    const data = [
        // Sample data, replace this with actual data fetched from PHP/Database
        { no: 1, nama: 'John Doe', c1: 80, c2: 75, c3: 85, c4: 90, c5: 70, d6: 'A' },
        { no: 2, nama: 'Jane Smith', c1: 85, c2: 80, c3: 78, c4: 92, c5: 74, d6: 'B' },
        // Add more sample data as needed
    ];

    const tableBody = document.querySelector("#dataTrainingTable tbody");
    const searchInput = document.getElementById("searchInput");
    const entriesCount = document.getElementById("entriesCount");
    let currentPage = 1;
    let rowsPerPage = parseInt(entriesCount.value);

    // Render the table rows
    function renderTable(data) {
        tableBody.innerHTML = "";
        data.forEach((row, index) => {
            const tr = document.createElement("tr");
            tr.innerHTML = `
                <td>${row.no}</td>
                <td>${row.nama}</td>
                <td>${row.c1}</td>
                <td>${row.c2}</td>
                <td>${row.c3}</td>
                <td>${row.c4}</td>
                <td>${row.c5}</td>
                <td>${row.d6}</td>
                <td><button class="edit-btn">Edit</button></td>
            `;
            tableBody.appendChild(tr);
        });
    }

    // Update the table based on search and pagination
    function updateTable() {
        const filteredData = data.filter(row =>
            Object.values(row).some(val =>
                val.toString().toLowerCase().includes(searchInput.value.toLowerCase())
            )
        );

        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        renderTable(filteredData.slice(start, end));

        updatePagination(filteredData.length);
    }

    // Handle pagination updates
    function updatePagination(totalRows) {
        const totalPages = Math.ceil(totalRows / rowsPerPage);
        document.getElementById("pageInfo").textContent = `Page ${currentPage} of ${totalPages}`;
        document.getElementById("prevPage").disabled = currentPage === 1;
        document.getElementById("nextPage").disabled = currentPage === totalPages;
    }

    // Event Listeners
    searchInput.addEventListener("input", updateTable);
    entriesCount.addEventListener("change", function () {
        rowsPerPage = parseInt(this.value);
        currentPage = 1;
        updateTable();
    });

    document.getElementById("prevPage").addEventListener("click", function () {
        if (currentPage > 1) currentPage--;
        updateTable();
    });

    document.getElementById("nextPage").addEventListener("click", function () {
        currentPage++;
        updateTable();
    });

    updateTable();
});

// Data training

document.addEventListener('DOMContentLoaded', function () {
    // Fungsi untuk Search pada tabel Data Training
    const searchTraining = document.getElementById('searchTraining');
    const trainingTableBody = document.getElementById('trainingTableBody');
    const entriesTraining = document.getElementById('entriesTraining');
    const pageInfoTraining = document.getElementById('pageInfoTraining');
  
    // Data contoh (dapat disesuaikan dengan data sebenarnya)
    const trainingData = [
      { no: 1, nama: 'John Doe', c1: 45, c2: 85, c3: 10, c4: 8, c5: 7, d6: 'Junior 1' },
      { no: 2, nama: 'Jane Smith', c1: 60, c2: 90, c3: 12, c4: 9, c5: 6, d6: 'Junior 2' },
      // Tambahkan data lainnya...
    ];
  
    let currentPageTraining = 1;
    let rowsPerPageTraining = 5;
  
    function displayTrainingTable() {
      trainingTableBody.innerHTML = '';
  
      const filteredData = trainingData.filter(row => {
        return row.nama.toLowerCase().includes(searchTraining.value.toLowerCase());
      });
  
      const start = (currentPageTraining - 1) * rowsPerPageTraining;
      const end = start + rowsPerPageTraining;
  
      const paginatedData = filteredData.slice(start, end);
  
      paginatedData.forEach(row => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${row.no}</td>
          <td>${row.nama}</td>
          <td>${row.c1}</td>
          <td>${row.c2}</td>
          <td>${row.c3}</td>
          <td>${row.c4}</td>
          <td>${row.c5}</td>
          <td>${row.d6}</td>
          <td class="actions">
            <i class="fas fa-eye view"></i>
            <i class="fas fa-edit edit"></i>
            <i class="fas fa-trash delete"></i>
          </td>
        `;
        trainingTableBody.appendChild(tr);
      });
  
      const totalPages = Math.ceil(filteredData.length / rowsPerPageTraining);
      pageInfoTraining.innerText = `Page ${currentPageTraining} of ${totalPages}`;
    }
  
    searchTraining.addEventListener('input', displayTrainingTable);
  
    entriesTraining.addEventListener('change', function () {
      rowsPerPageTraining = parseInt(this.value);
      displayTrainingTable();
    });
  
    // Pagination button events
    document.querySelector('.prev-btn').addEventListener('click', function () {
      if (currentPageTraining > 1) {
        currentPageTraining--;
        displayTrainingTable();
      }
    });
  
    document.querySelector('.next-btn').addEventListener('click', function () {
      const totalPages = Math.ceil(trainingData.length / rowsPerPageTraining);
      if (currentPageTraining < totalPages) {
        currentPageTraining++;
        displayTrainingTable();
      }
    });
  
    // Inisialisasi tabel dengan data
    displayTrainingTable();
  });
  