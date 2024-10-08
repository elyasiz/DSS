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

document.getElementById('hamburger').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
});
