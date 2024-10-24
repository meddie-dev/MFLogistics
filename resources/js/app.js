import './bootstrap';

// Sidebar Toggler
window.addEventListener('DOMContentLoaded', event => {

  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector('#sidebarToggle');
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener('click', event => {
      event.preventDefault();
      document.body.classList.toggle('sb-sidenav-toggled');
      localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
  }

});

// Simple-DataTables
window.addEventListener('DOMContentLoaded', event => {
  // Simple-DataTables
  // https://github.com/fiduswriter/Simple-DataTables/wiki

  const datatablesSimple = document.getElementById('datatablesSimple');
  if (datatablesSimple) {
    new simpleDatatables.DataTable(datatablesSimple);
  }
});

/**
  * Preloader
  */
const preloader = document.querySelector('#preloader');
if (preloader) {
  window.addEventListener('load', () => {
    preloader.remove();
  });
}

document.addEventListener("DOMContentLoaded", function() {
  var alertElement = document.getElementById('autoHideAlert');
  if (alertElement) {
      // Set timeout to auto-hide after 3 seconds (3000ms)
      setTimeout(function () {
          var alertInstance = new bootstrap.Alert(alertElement);
          alertInstance.close();
      }, 3000); // 3000ms = 3 seconds
  }
});

// Annual user count

