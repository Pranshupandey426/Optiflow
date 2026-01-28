document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar-main');
    const hamburger = document.getElementById('hamburger-menu');
    const sidebar = document.getElementById('sidebar');
    const closeBtn = document.getElementById('close-sidebar');
    const overlay = document.getElementById('sidebar-overlay');

    // 1. SCROLL EFFECT: Transparent to Solid
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. SIDEBAR TOGGLE: Open
    hamburger.addEventListener('click', () => {
        sidebar.classList.add('open');
        overlay.classList.add('active');
    });

    // 3. SIDEBAR TOGGLE: Close
    const closeMenu = () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
    };

    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
});