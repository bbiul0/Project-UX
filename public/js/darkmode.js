/*Dark mode*/
document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const search = document.getElementById('search');
    const body = document.body;
    const navbar = document.querySelector('.navbar');
    const formlog = document.getElementById('form-log');

    if (localStorage.getItem('dark-mode') === 'enabled') {
        enableDarkMode();
    }
    else {
        disableDarkMode();
    }

    darkModeToggle.addEventListener('click', () => {
        if (body.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    });

    function enableDarkMode() {
        body.classList.add('dark-mode');
        navbar.classList.add('dark-mode');
        document.querySelectorAll('.card').forEach(card => card.classList.add('dark-mode'));
        document.querySelectorAll('table').forEach(table => table.classList.add('dark-mode'));
        document.querySelectorAll('.alink').forEach(alink => alink.classList.add('dark-mode'));
        document.querySelectorAll('.list-group-item').forEach(item => item.classList.add('dark-mode'));
        document.querySelectorAll('.modal-content').forEach(popup => popup.classList.add('dark-mode'));
        document.querySelectorAll('.c-btn').forEach(cbtn => cbtn.classList.add('text-light'));
        // document.querySelectorAll('.log-btn').forEach(logbtn => logbtn.classList.add('text-light'));
        document.querySelectorAll('.btn-close').forEach(popup => popup.classList.add('btn-close-white'));
        localStorage.setItem('dark-mode', 'enabled');
        darkModeToggle.textContent = 'Light Mode';
        search.classList.add('bg-dark', 'text-light');
        if (formlog) {
            formlog.classList.add('dark-mode');
        }
        // darkModeToggle.classList.remove('btn-outline-dark', 'text-light');
        // darkModeToggle.classList.add('btn-outline-light', 'text-light');
    }

    function disableDarkMode() {
        body.classList.remove('dark-mode');
        navbar.classList.remove('dark-mode');
        document.querySelectorAll('.card').forEach(card => card.classList.remove('dark-mode'));
        document.querySelectorAll('.list-group-item').forEach(item => item.classList.remove('dark-mode'));
        document.querySelectorAll('.modal-content').forEach(popup => popup.classList.remove('dark-mode'));
        document.querySelectorAll('.c-btn').forEach(cbtn => cbtn.classList.remove('text-light'));
        // document.querySelectorAll('.log-btn').forEach(logbtn => logbtn.classList.remove('text-light'));
        document.querySelectorAll('.btn-close').forEach(popup => popup.classList.remove('btn-close-white'));
        localStorage.setItem('dark-mode', 'disabled');
        darkModeToggle.textContent = 'Dark Mode';
        search.classList.remove('bg-dark', 'text-light');
        if (formlog) {
            formlog.classList.remove('dark-mode');
        }
        // darkModeToggle.classList.add('btn-outline-dark', 'text-light');
        // darkModeToggle.classList.remove('btn-outline-light', 'text-light');
    }
});
