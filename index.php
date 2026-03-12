<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'components/links.php'; ?>
<style>
/* Mobile First Fixes */
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    overflow-x: hidden;
    width: 100%;
    min-width: 320px;
}

img {
    max-width: 100%;
    height: auto;
}

/* Force mobile layout */
@media screen and (max-width: 768px) {
    body {
        font-size: 14px;
    }
    
    .hero-content-grid,
    .cr-step-grid,
    .testimonial-grid,
    .placement-grid {
        display: block !important;
        width: 100% !important;
    }
    
    .hero-form-container,
    .cr-step-image-box,
    .main-success-card,
    .testimonial-list {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 auto 20px !important;
    }
}
</style>
</head>
<body>

<style>
/* Early Bird Scholarship Timer - Orange Theme Design */
    .early-bird-timer {
        position: fixed !important;
        bottom: 20px !important;
        left: 20px !important;
        background: linear-gradient(135deg, #ff7a00 0%, #ff9500 50%, #ffb347 100%) !important;
        color: #fff !important;
        padding: 20px 25px !important;
        border-radius: 20px !important;
        box-shadow: 0 20px 40px rgba(255, 122, 0, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.2) !important;
        z-index: 9999 !important;
        max-width: 350px !important;
        animation: float 3s ease-in-out infinite, slideInUp 0.6s ease-out !important;
        font-family: 'Inter', -apple-system, sans-serif !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        transform: translateZ(0) !important;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) translateZ(0);
        }
        50% {
            transform: translateY(-10px) translateZ(0);
        }
    }

    @keyframes slideInUp {
        from {
            transform: translateY(100px) translateZ(0);
            opacity: 0;
        }
        to {
            transform: translateY(0) translateZ(0);
            opacity: 1;
        }
    }

    @keyframes glow {
        0%, 100% {
            box-shadow: 0 20px 40px rgba(255, 122, 0, 0.4), 0 0 0 1px rgba(255, 255, 255, 0.2), 0 0 20px rgba(255, 122, 0, 0.3);
        }
        50% {
            box-shadow: 0 20px 40px rgba(255, 122, 0, 0.6), 0 0 0 1px rgba(255, 255, 255, 0.3), 0 0 30px rgba(255, 122, 0, 0.5);
        }
    }

    .timer-content {
        display: flex !important;
        align-items: center !important;
        gap: 15px !important;
        overflow: hidden !important;
        flex-wrap: wrap !important;
        justify-content: center !important;
    }

    .timer-icon {
        background: rgba(255, 255, 255, 0.25) !important;
        width: 55px !important;
        height: 55px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        animation: pulse 2s infinite !important;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }
    }

    .timer-icon i {
        font-size: 22px !important;
        color: #fff !important;
        animation: ring 3s infinite !important;
    }

    @keyframes ring {
        0%, 100% {
            transform: rotate(0deg) scale(1);
        }
        10%, 90% {
            transform: rotate(-5deg) scale(1.05);
        }
        20%, 80% {
            transform: rotate(5deg) scale(1.05);
        }
        30%, 70% {
            transform: rotate(0deg) scale(1.05);
        }
        40%, 60% {
            transform: rotate(-5deg) scale(1.05);
        }
        50% {
            transform: rotate(0deg) scale(1.1);
        }
    }

    .timer-text {
        flex: 1 !important;
        display: flex !important;
        flex-direction: column !important;
        gap: 5px !important;
        overflow: hidden !important;
        min-width: 0 !important;
        text-align: center !important;
        flex-wrap: wrap !important;
        min-width: 200px !important;
    }

    .timer-title {
        font-size: 13px !important;
        font-weight: 800 !important;
        line-height: 1.3 !important;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3) !important;
        color: #fff !important;
        white-space: normal !important;
        overflow: visible !important;
        text-overflow: clip !important;
        letter-spacing: 0.3px !important;
        word-wrap: break-word !important;
        flex-wrap: wrap !important;
    }

    .timer-date {
        font-size: 12px !important;
        opacity: 0.95 !important;
        font-weight: 600 !important;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3) !important;
        color: rgba(255, 255, 255, 0.95) !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        letter-spacing: 0.3px !important;
    }

    .timer-countdown {
        display: flex !important;
        gap: 6px !important;
        flex-shrink: 0 !important;
        overflow: hidden !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: center !important;
        margin-top: 8px !important;
        flex-wrap: wrap !important;
    }

    .countdown-value {
        background: rgba(255, 255, 255, 0.35) !important;
        color: #fff !important;
        padding: 6px 8px !important;
        border-radius: 10px !important;
        font-size: 11px !important;
        font-weight: 800 !important;
        min-width: 32px !important;
        text-align: center !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3) !important;
        transition: all 0.3s ease !important;
        animation: countdownPulse 1s infinite !important;
    }

    @keyframes countdownPulse {
        0%, 100% {
            transform: scale(1);
            background: rgba(255, 255, 255, 0.3);
        }
        50% {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.4);
        }
    }

    .countdown-value:hover {
        transform: scale(1.1) !important;
        background: rgba(255, 255, 255, 0.5) !important;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25) !important;
    }

    @media (max-width: 768px) {
        .early-bird-timer {
            bottom: 15px;
            left: 15px;
            right: 15px;
            max-width: 280px !important;
            width: calc(100% - 30px) !important;
            padding: 18px 20px !important;
        }
        
        .timer-content {
            gap: 12px !important;
        }
        
        .timer-icon {
            width: 45px !important;
            height: 45px !important;
        }
        
        .timer-icon i {
            font-size: 18px !important;
        }
        
        .timer-title {
            font-size: 13px !important;
        }
        
        .countdown-value {
            font-size: 11px !important;
            padding: 6px 8px !important;
            min-width: 30px !important;
        }
    }

    @media (max-width: 576px) {
        .early-bird-timer {
            bottom: 10px;
            left: 10px;
            right: 10px;
            max-width: 240px !important;
            width: calc(100% - 20px) !important;
            padding: 15px 18px !important;
        }
        
        .timer-icon {
            width: 40px !important;
            height: 40px !important;
        }
        
        .timer-icon i {
            font-size: 16px !important;
        }
        
        .timer-title {
            font-size: 12px !important;
        }
        
        .countdown-value {
            font-size: 10px !important;
            padding: 5px 7px !important;
            min-width: 28px !important;
        }
    }

    @media (max-width: 480px) {
        .early-bird-timer {
            bottom: 8px;
            left: 8px;
            right: 8px;
            max-width: 200px !important;
            width: calc(100% - 16px) !important;
            padding: 12px 15px !important;
        }
        
        .timer-content {
            gap: 8px !important;
        }
        
        .timer-icon {
            width: 35px !important;
            height: 35px !important;
        }
        
        .timer-icon i {
            font-size: 14px !important;
        }
        
        .timer-title {
            font-size: 11px !important;
        }
        
        .countdown-value {
            font-size: 9px !important;
            padding: 4px 6px !important;
            min-width: 25px !important;
        }
    }

    @media (max-width: 360px) {
        .early-bird-timer {
            bottom: 5px;
            left: 5px;
            right: 5px;
            max-width: 180px !important;
            width: calc(100% - 10px) !important;
            padding: 10px 12px !important;
        }
        
        .timer-content {
            gap: 6px !important;
        }
        
        .timer-icon {
            width: 30px !important;
            height: 30px !important;
        }
        
        .timer-icon i {
            font-size: 12px !important;
        }
        
        .timer-title {
            font-size: 10px !important;
        }
        
        .countdown-value {
            font-size: 8px !important;
            padding: 3px 5px !important;
            min-width: 22px !important;
        }
    }
</style>

<!-- WhatsApp Fixed Bottom Right -->
<style>
    .whatsapp-fixed {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #25d366 0%, #22c55e 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        text-decoration: none;
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
        z-index: 9998;
        transition: all 0.3s ease;
        animation: whatsappPulse 2s infinite;
    }

    .whatsapp-fixed:hover {
        transform: scale(1.1);
        box-shadow: 0 12px 30px rgba(37, 211, 102, 0.6);
    }

    .whatsapp-fixed:active {
        transform: scale(0.95);
    }

    @keyframes whatsappPulse {
        0%, 100% {
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
        }
        50% {
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
        }
    }

    @media (max-width: 768px) {
        .whatsapp-fixed {
            bottom: 15px;
            right: 15px;
            width: 55px;
            height: 55px;
            font-size: 24px;
        }
    }
</style>

<?php include 'components/header.php'; ?>
<?php include 'components/popup-form-new.php'; ?>
<?php include 'components/herosection.php'; ?>
<?php include 'components/work.php'; ?>
<?php include 'components/cta.php'; ?>
<?php include 'components/signal.php'; ?>
<?php include 'components/grid.php'; ?>
<?php include 'components/placement.php'; ?>
<?php include 'components/why_choose.php'; ?>
<?php include 'components/campus.php'; ?>
<?php include 'components/cta.php'; ?>
<?php include 'components/about.php'; ?>
<?php include 'components/testimunial.php'; ?>
<?php include 'components/specializations-section.php'; ?>
<?php include 'components/cta.php'; ?>
<?php include 'components/scholarship-section.php'; ?>
<?php include 'components/emotion_cta.php'; ?>
<?php include 'components/student-reviews.php'; ?>
<?php include 'components/faq.php'; ?>

<!-- Footer Section -->
<?php include 'components/footer.php'; ?>

<script>
    // Page load hone par countdown start karein
    document.addEventListener('DOMContentLoaded', function() {
        startEarlyBirdCountdown();
    });

    function startEarlyBirdCountdown() {
        // Target Date: Current Year, June (Index 5), 30th Day, 23:59:59
        const currentYear = new Date().getFullYear();
        const targetDate = new Date(currentYear, 5, 30, 23, 59, 59).getTime();

        // Elements ko cache karein
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        // Har 1 second mein update karne wala function
        const timerInterval = setInterval(function() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            // Agar time khatam ho jaye
            if (distance < 0) {
                clearInterval(timerInterval);
                document.getElementById('countdown').innerHTML = "<span class='countdown-value' style='width:100%'>ADMISSIONS OPEN!</span>";
                return;
            }

            // Time calculation logic
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Live DOM Update (padSart(2, '0') se single digit ke aage '0' lag jayega)
            if (daysEl) daysEl.textContent = days.toString().padStart(2, '0') + "d";
            if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0') + "h";
            if (minutesEl) minutesEl.textContent = minutes.toString().padStart(2, '0') + "m";
            if (secondsEl) secondsEl.textContent = seconds.toString().padStart(2, '0') + "s";

        }, 1000);
    }
</script>

<body>



<?php include 'components/early-bird-timer.php'; ?>



<!-- WhatsApp Fixed Button - Bottom Right -->
<?php include 'site_identity.php'; ?>
<a href="<?php echo $site_identity['whatsapp']; ?>" target="_blank" class="whatsapp-fixed">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>