<?php include 'site_identity.php'; ?>
<!-- Google Fonts - Inter -->

<!-- Top Header Strip -->
<header class="top-header-strip">
    <div class="header-container">
        <!-- Logo on Left -->
        <div class="header-logo">
            <img src="<?php echo $site_identity['logo']; ?>" alt="<?php echo $site_identity['site_name']; ?>" class="logo-img">
        </div>
        
        <!-- Contact Info on Right -->
        <div class="header-contact">
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <a href="tel:<?php echo str_replace([' ', '-'], '', $site_identity['phone']); ?>" class="contact-link">
                    <?php echo $site_identity['phone']; ?>
                </a>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <a href="mailto:<?php echo $site_identity['email']; ?>" class="contact-link">
                    <?php echo $site_identity['email']; ?>
                </a>
            </div>
            <!-- Social Media Links -->
            <div class="header-social">
                <a href="<?php echo $site_identity['whatsapp']; ?>" target="_blank" class="social-link">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="<?php echo $site_identity['facebook']; ?>" target="_blank" class="social-link">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="<?php echo $site_identity['instagram']; ?>" target="_blank" class="social-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="<?php echo $site_identity['linkedin']; ?>" target="_blank" class="social-link">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="<?php echo $site_identity['youtube']; ?>" target="_blank" class="social-link">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<section class="hero-layout">
    <div class="hero-overlay"></div>

    <div class="hero-main-container">
        <div class="hero-content-grid">
            <div class="hero-text-content">
                <h1 class="hero-headline">
                    Find the Right MBA College
                    Build Your Future as a Leader
                    <!-- <span>Brighter Future</span> For<br>Your Education -->
                </h1>
                <p class="hero-description">
                    Get personalized MBA college guidance and find the right institute — even with an average entrance
                    exam percentile. Our experts guide you to top ranked colleges.
                </p>
                <div class="hero-cta-group">
                    <a href="#" class="cta-orange" onclick="openGlobalPopup(); return false;">APPLY NOW</a>
                    <a href="#about" class="cta-white">OUR ACADEMICS</a>
                </div>
            </div>

            <!-- Transparent Form on Right Side -->
            <div class="hero-form-container">
                <form class="hero-transparent-form" action="submit.php" method="POST">
                    <h3 class="form-title">Request Call Back</h3>

                    <input type="text" name="fullname" placeholder="Full Name" required>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="tel" name="mobile" placeholder="Mobile" required>

                    <input type="text" name="city" placeholder="City">

                    <select name="program" required>
                        <option value="">Select Program</option>
                        <option value="mba">MBA</option>
                        <option value="pgdm">PGDM</option>
                    </select>

                    <select name="specialization" required>
                        <option value="">Select Specialization</option>
                        <option value="marketing">MBA in Marketing</option>
                        <option value="finance">MBA in Finance</option>
                        <option value="hr">MBA in Human Resources</option>
                        <option value="operations">MBA in Operations</option>
                        <option value="business-analytics">MBA in Business Analytics</option>
                        <option value="international-business">MBA in International Business</option>
                        <option value="supply-chain">MBA in Supply Chain Management</option>
                        <option value="entrepreneurship">MBA in Entrepreneurship</option>
                    </select>

                    <button type="submit" class="form-submit-btn">Request Call Back</button>
                </form>
            </div>
        </div>
    </div>

    <!-- The 3-Color Bottom Strip -->
    <div class="hero-bottom-grid">
        <div class="feat-box navy-bg">
            <i class="fas fa-users"></i>
            <h3>Skilled Lectures</h3>
            <p>Expert-led sessions focusing on real-world management applications and leadership.</p>
        </div>
        <div class="feat-box blue-bg">
            <i class="fas fa-graduation-cap"></i>
            <h3>Scholarship Facility</h3>
            <p>We help identify scholarship-friendly colleges and practical financial aid paths.</p>
        </div>
        <div class="feat-box orange-bg">
            <div class="student-avatars">
                <img src="https://i.pravatar.cc/100?u=a" alt="s1">
                <img src="https://i.pravatar.cc/100?u=b" alt="s2">
                <img src="https://i.pravatar.cc/100?u=c" alt="s3">
                <span class="plus-tag">2K+</span>
            </div>
            <h3>Top Graduates</h3>
            <p>Join a network of successful alumni placed in top-tier global corporations.</p>
        </div>
    </div>
</section>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919876543210" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Early Bird Scholarship Timer - Fixed Bottom Left -->

<script>
function openPopup() {
    document.getElementById('popupModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
    document.querySelector('.whatsapp-float').style.display = 'none';
}

function closePopup() {
    document.getElementById('popupModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close popup on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePopup();
    }
});

// Close popup when clicking outside the form content
document.getElementById('popupModal').addEventListener('click', function(e) {
    if (e.target === this || e.target.classList.contains('popup-overlay')) {
        closePopup();
    }
});

// Countdown Timer Functionality
function startCountdown() {
    // Set the target date (15th March of current year)
    const currentYear = new Date().getFullYear();
    const targetDate = new Date(currentYear, 2, 15, 23, 59, 59); // March 15, 11:59:59 PM
    
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate.getTime() - now;
        
        if (distance < 0) {
            document.getElementById('countdown').innerHTML = 
                '<span class="countdown-value">EXPIRED</span>';
            clearInterval(countdownInterval);
            return;
        }
        
        // Time calculations
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the result
        document.getElementById('countdown').innerHTML = 
            '<span class="countdown-value">' + days + 'd</span>' +
            '<span class="countdown-value">' + hours + 'h</span>' +
            '<span class="countdown-value">' + minutes + 'm</span>' +
            '<span class="countdown-value">' + seconds + 's</span>';
    }
    
    // Update immediately
    updateCountdown();
    
    // Update every second
    const countdownInterval = setInterval(updateCountdown, 1000);
}

// Start countdown when page loads
document.addEventListener('DOMContentLoaded', startCountdown);
</script>

<style>
    /* Top Header Strip Styles */
    .top-header-strip {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        z-index: 1000;
        padding: 15px 0;
        transition: all 0.3s ease;
    }

    .header-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-logo .logo-img {
        height: 50px;
        width: auto;
        object-fit: contain;
    }

    .header-contact {
        display: flex;
        gap: 30px;
        align-items: center;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #333;
        font-size: 14px;
        font-weight: 600;
    }

    .contact-item i {
        color: #ff7a00;
        font-size: 16px;
    }

    .contact-link {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: #ff7a00;
    }

    /* Social Media Links Styles */
    .header-social {
        display: flex !important;
        gap: 20px !important;
        align-items: center !important;
    }

    .social-link {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 36px !important;
        height: 36px !important;
        border-radius: 50% !important;
        background: rgba(255, 255, 255, 0.1) !important;
        color: #333 !important;
        text-decoration: none !important;
        transition: all 0.3s ease !important;
        font-size: 16px !important;
    }

    .social-link:hover {
        background: #ff7a00 !important;
        color: #fff !important;
        transform: scale(1.1) !important;
        box-shadow: 0 4px 8px rgba(255, 122, 0, 0.3) !important;
    }

    .social-link i {
        font-size: 16px !important;
    }

    /* Adjust hero layout to account for fixed header */
    .hero-layout {
        position: relative;
        min-height: 100vh;
        background: url("https://i.pinimg.com/1200x/f8/2b/c6/f82bc6c975a9db9982394a0575c2a3fd.jpg") center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        font-family: 'Inter', -apple-system, sans-serif;
        padding-top: 80px; /* Space for fixed header */
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(75deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.3) 100%);
    }

    .hero-main-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        padding: 0 40px;
        margin-bottom: 120px;
    }

    .hero-content-grid {
        display: grid;
        grid-template-columns: 1fr 400px;
        gap: 60px;
        align-items: center;
    }

    .hero-headline {
        color: #fff;
        font-size: 52px;
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 25px;
    }

    .hero-description {
        color: rgba(255, 255, 255, 0.9);
        font-size: 18px;
        max-width: 600px;
        margin-bottom: 35px;
    }

    .hero-cta-group {
        display: flex;
        gap: 15px;
    }

    .cta-orange {
        background: #ff7a00;
        color: white;
        padding: 16px 35px;
        text-decoration: none;
        font-weight: 700;
        border-radius: 4px;
    }

    .cta-white {
        background: #fff;
        color: #111;
        padding: 16px 35px;
        text-decoration: none;
        font-weight: 700;
        border-radius: 4px;
    }

    /* Bottom Grid */
    .hero-bottom-grid {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        z-index: 5;
    }

    .feat-box {
        padding: 40px;
        color: white;
    }

    .navy-bg {
        background: #163a74;
    }

    .blue-bg {
        background: #1b53a8;
    }

    .orange-bg {
        background: #ff7a00;
    }

    .feat-box i {
        font-size: 28px;
        margin-bottom: 15px;
        display: block;
    }

    .feat-box h3 {
        margin-bottom: 10px;
        font-size: 22px;
    }

    .feat-box p {
        font-size: 14px;
        opacity: 0.8;
        line-height: 1.5;
    }

    .student-avatars {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .student-avatars img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: 2px solid #fff;
        margin-right: -10px;
    }

    .plus-tag {
        margin-left: 20px;
        font-weight: 800;
        font-size: 14px;
    }

    /* Transparent Form Styles */
    .hero-form-container {
        display: flex;
        justify-content: flex-end;
    }

    .hero-transparent-form {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        padding: 35px;
        width: 100%;
        max-width: 380px;
        position: relative;
        z-index: 100;
    }

    .form-title {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 25px;
        text-align: center;
    }

    .hero-transparent-form input,
    .hero-transparent-form select {
        width: 100%;
        padding: 14px 16px;
        margin-bottom: 15px;
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 8px;
        color: #fff;
        font-size: 15px;
        outline: none;
        transition: all 0.3s ease;
    }

    .hero-transparent-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .hero-transparent-form input:focus,
    .hero-transparent-form select:focus {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .hero-transparent-form select {
        cursor: pointer;
    }

    .hero-transparent-form select option {
        background: #333;
        color: #fff;
    }

    .form-submit-btn {
        width: 100%;
        padding: 16px;
        background: #ff7a00;
        border: none;
        border-radius: 8px;
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .form-submit-btn:hover {
        background: #e06600;
        transform: translateY(-2px);
    }

    @media (max-width: 992px) {
        .hero-bottom-grid {
            position: static;
            grid-template-columns: 1fr;
        }

        .hero-headline {
            font-size: 36px;
        }

        .hero-main-container {
            padding: 60px 20px;
            margin-bottom: 0;
        }

        .hero-content-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .hero-form-container {
            justify-content: center;
        }

        .hero-transparent-form {
            max-width: 100%;
        }

        /* Header responsive styles */
        .header-container {
            padding: 0 20px;
        }

        .header-contact {
            gap: 15px;
        }

        .contact-item {
            font-size: 13px;
        }

        .header-logo .logo-img {
            height: 40px;
        }

        .hero-transparent-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 2000;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.3s ease;
    }

    .popup-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .popup-content {
        position: relative;
        background: #ffffff;
        border-radius: 20px;
        padding: 0;
        width: 90%;
        max-width: 450px;
        animation: slideUp 0.4s ease;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .popup-close {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 35px;
        height: 35px;
        background: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #666;
        font-size: 16px;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .popup-close:hover {
        background: #e9e9e9;
        transform: rotate(90deg);
    }

    .popup-form {
        padding: 40px 30px;
        width: 100%;
    }

    .popup-form .form-title {
        color: #111;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
    }

    /* Override all hero form styles for popup */
    .popup-modal .popup-form input,
    .popup-modal .popup-form select {
        width: 100% !important;
        padding: 16px !important;
        margin-bottom: 15px !important;
        background: #f8f9fa !important;
        border: 1px solid #ddd !important;
        border-radius: 10px !important;
        color: #333 !important;
        font-size: 15px !important;
        outline: none !important;
        transition: all 0.3s ease !important;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }

    .popup-modal .popup-form input::placeholder {
        color: #999 !important;
    }

    .popup-modal .popup-form input:focus,
    .popup-modal .popup-form select:focus {
        background: #fff !important;
        border-color: #ff7a00 !important;
        transform: translateY(-2px) !important;
    }

    .popup-modal .popup-form select {
        cursor: pointer !important;
        background: #f8f9fa !important;
        color: #333 !important;
    }

    .popup-modal .popup-form select option {
        background: #fff !important;
        color: #333 !important;
    }

    .popup-modal .popup-form .form-submit-btn {
        width: 100% !important;
        padding: 18px !important;
        background: #ff7a00 !important;
        border: none !important;
        border-radius: 10px !important;
        color: #fff !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        cursor: pointer !important;
        transition: all 0.3s ease !important;
        margin-top: 10px !important;
    }

    .popup-modal .popup-form .form-submit-btn:hover {
        background: #e06600 !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 10px 20px rgba(255, 122, 0, 0.3) !important;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.02);
        }
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Mobile responsive for early bird timer */
    @media (max-width: 768px) {
        .early-bird-timer {
            bottom: 15px;
            left: 15px;
            right: 15px;
            max-width: none;
            width: calc(100% - 30px);
        }
        
        .timer-content {
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .timer-text {
            flex: 1;
            min-width: 200px;
        }
        
        .timer-countdown {
            flex-shrink: 0;
        }
    }

    @media (max-width: 576px) {
        .early-bird-timer {
            bottom: 10px;
            left: 10px;
            right: 10px;
            padding: 12px 15px;
        }
        
        .timer-icon {
            width: 35px;
            height: 35px;
        }
        
        .timer-icon i {
            font-size: 14px;
        }
        
        .timer-title {
            font-size: 12px;
        }
        
        .timer-date {
            font-size: 10px;
        }
        
        .countdown-value {
            font-size: 10px;
            padding: 3px 5px;
            min-width: 25px;
        }
    }

    @media (max-width: 576px) {
        .popup-content {
            width: 95%;
            margin: 20px;
        }

        .popup-form {
            padding: 30px 20px;
        }

        .popup-form .form-title {
            font-size: 20px;
        }

        .popup-close {
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            font-size: 14px;
        }
    }
</style>