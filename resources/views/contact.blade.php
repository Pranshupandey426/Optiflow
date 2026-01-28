@extends('layouts.app')

@section('title', 'Contact')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')

<section class="contact-section">
    <div class="contact-container">

        <!-- LEFT SIDE -->
        <div class="contact-visual">
            <div class="orbit-container">
                <p>Reach out and we’ll get in touch.</p>
            </div>
        </div>

        <!-- RIGHT SIDE FORM -->
        <div class="contact-form-box">
            <div class="form-header">
                <h2>We’d love to help</h2>
            </div>

            <form id="whatsappForm">

                <!-- NAME -->
                <div class="form-row">
                    <div class="input-group">
                        <label>First name</label>
                        <input type="text" id="firstName" required>
                    </div>

                    <div class="input-group">
                        <label>Last name</label>
                        <input type="text" id="lastName" required>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" id="email" required>
                </div>

                <!-- CONTACT NUMBER -->
                <div class="input-group">
                    <label>Contact Number</label>
                    <input type="tel" id="phone" placeholder="+91 9876543210" required>
                </div>

                <!-- COUNTRY -->
                <div class="input-group">
                    <label>Country</label>
                    <input type="text" id="country" placeholder="Enter your country" required>
                </div>

                <!-- MESSAGE -->
                <div class="input-group">
                    <label>Message</label>
                    <textarea id="message" rows="5" required></textarea>
                </div>

                <!-- PRIVACY -->
                <div class="checkbox-group">
                    <input type="checkbox" id="privacy" required>
                    <label for="privacy">
                        You agree to our <a href="#">privacy policy</a>.
                    </label>
                </div>

                <button type="button" onclick="sendToWhatsApp()" class="btn-send">
                    Send message
                </button>
            </form>

            <!-- SOCIAL ICONS -->
            <div class="partner-logos">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>

        </div>
    </div>
</section>

@endsection
