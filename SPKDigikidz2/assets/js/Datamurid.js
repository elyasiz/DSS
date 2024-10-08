// Mengambil elemen menu dan section
const dataMuridMenu = document.getElementById('dataMuridMenu');
const dataKriteriaMenu = document.getElementById('dataKriteriaMenu');
const dashboardSection = document.getElementById('dashboardSection');
const dataMuridSection = document.getElementById('dataMuridSection');
const dataKriteriaSection = document.getElementById('dataKriteriaSection');

// Menambahkan event listener untuk menu Data Murid
dataMuridMenu.addEventListener('click', () => {
    // Sembunyikan semua section
    dashboardSection.style.display = 'none';
    dataKriteriaSection.style.display = 'none';
    
    // Tampilkan section Data Murid
    dataMuridSection.style.display = 'block';
});

// Menambahkan event listener untuk menu Data Kriteria
dataKriteriaMenu.addEventListener('click', () => {
    // Sembunyikan semua section
    dashboardSection.style.display = 'none';
    dataMuridSection.style.display = 'none';
    
    // Tampilkan section Data Kriteria
    dataKriteriaSection.style.display = 'block';
});

// Menampilkan dashboard section secara default saat halaman dimuat
window.onload = () => {
    dashboardSection.style.display = 'block';
};

