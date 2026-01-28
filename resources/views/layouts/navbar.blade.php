<nav class="navbar-main">
    <div class="nav-container glass-effect">
        <a href="/" class="nav-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Optiflow Logo">
            <span class="logo-text">OPTIFLOW</span>
        </a>

        <ul class="nav-links">
            <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Service</a></li>
            <li><a href="/portfolio" class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="/team" class="{{ request()->is('team') ? 'active' : '' }}">Team</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        </ul>

        <div class="nav-right">
            <a href="/contact" class="nav-contact-link">
                Contact Us <span class="contact-icon">▲</span>
            </a>
            
            <div class="nav-toggle" id="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>

<div class="sidebar-overlay" id="sidebar-overlay"></div>

<aside class="mobile-sidebar" id="sidebar">
    <div class="sidebar-header">
        <h3 class="sidebar-title">MENU</h3>
        <div class="close-btn" id="close-sidebar">&times;</div>
    </div>
    
    <ul class="sidebar-links">
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/team">Team</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact" class="sidebar-cta-link">Contact Us</a></li>
    </ul>
</aside>