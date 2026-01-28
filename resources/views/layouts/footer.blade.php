<footer class="footer-new">
    <div class="footer-top-section">
        <div class="footer-links-grid">
            <div class="footer-brand-area">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Optiflow">
                    <span class="logo-text">OPTIFLOW</span>
                </div>
                <p class="brand-tagline">
                    Empowering businesses with advanced digital solutions to improve brand visibility and market outcomes.
                </p>
            </div>

            <div class="links-columns">
                <div class="link-group">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Why Optiflow?</a></li>
                        <li><a href="#">Customer Stories</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Webinars</a></li>
                        <li><a href="#">Workplace Management</a></li>
                    </ul>
                </div>
                <div class="link-group">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/leadership">Leadership</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="link-group">
                    <h3>Social</h3>
                    <ul>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-cta-area">
            <div class="cta-content">
                <span class="demo-label">DEMO</span>
                <h2>Request a <br> Demo</h2>
                <form class="email-input-group">
                    <input type="email" placeholder="Enter your email..." required>
                    <button type="submit" class="submit-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
            
            <div class="character-overlay">
                <img src="{{ asset('assets/images/footer-character.png') }}" alt="Optiflow Character">
            </div>
        </div>
    </div>

    <div class="footer-bottom-bar">
        <div class="bottom-container">
            <p>© {{ date('Y') }} Optiflow Software Inc.</p>
            <div class="bottom-links">
                <a href="/support">Support</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/terms">Terms of Use</a>
                <a href="/cookies">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>