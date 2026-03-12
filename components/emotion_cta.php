<section class="cr-cta-wrapper">
    <div class="cr-cta-bg-shapes">
        <div class="cr-shape cr-shape-1"></div>
        <div class="cr-shape cr-shape-2"></div>
    </div>
    
    <div class="cr-cta-container">
        <div class="cr-cta-content">
            <span class="cr-cta-badge">Final Counselling CTA</span>
            <h2 class="cr-cta-title">Still Confused About <span>MBA Admission?</span></h2>
            <h3 class="cr-cta-subtitle">Talk to our expert counsellor today.</h3>
            <p class="cr-cta-description">
                Get personalized help on colleges, eligibility, specializations, fees, scholarships, and placement possibilities.
            </p>
            
            <div class="cr-cta-action">
                <a href="#" class="cr-cta-btn" onclick="openGlobalPopup(); return false;">
                    Book Free Counselling
                    <i class="fas fa-arrow-right"></i>
                </a>
                <p class="cr-cta-note"><i class="fas fa-clock"></i> Limited slots available for this week</p>
            </div>
        </div>
    </div>
</section>

<style>
    .cr-cta-wrapper {
        background-color: #001a35; /* Matching your theme */
        padding: 100px 0;
        position: relative;
        overflow: hidden;
        font-family: 'Inter', sans-serif;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Abstract background shapes for a modern look */
    .cr-cta-bg-shapes .cr-shape {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        z-index: 1;
        opacity: 0.15;
    }
    .cr-shape-1 {
        width: 300px;
        height: 300px;
        background: #f59e0b;
        top: -100px;
        left: -50px;
    }
    .cr-shape-2 {
        width: 400px;
        height: 400px;
        background: #3b82f6;
        bottom: -150px;
        right: -50px;
    }

    .cr-cta-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 10;
    }

    .cr-cta-badge {
        background: rgba(255, 255, 255, 0.1);
        color: #f59e0b;
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 1px solid rgba(245, 158, 11, 0.3);
    }

    .cr-cta-title {
        color: #ffffff;
        font-size: 48px;
        font-weight: 800;
        margin-top: 25px;
        margin-bottom: 10px;
        line-height: 1.2;
    }

    .cr-cta-title span {
        color: #f59e0b;
    }

    .cr-cta-subtitle {
        color: #ffffff;
        font-size: 28px;
        font-weight: 500;
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .cr-cta-description {
        color: #cbd5e1;
        font-size: 18px;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto 40px auto;
    }

    /* Modern Pulsing Button */
    .cr-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: #ff7a00; /* Bright orange for high conversion */
        color: #ffffff;
        padding: 18px 45px;
        border-radius: 12px;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(255, 122, 0, 0.3);
        position: relative;
    }

    .cr-cta-btn:hover {
        transform: translateY(-3px);
        background: #ff8c21;
        box-shadow: 0 15px 40px rgba(255, 122, 0, 0.4);
        color: #fff;
    }

    .cr-cta-btn i {
        font-size: 16px;
        transition: transform 0.3s ease;
    }

    .cr-cta-btn:hover i {
        transform: translateX(5px);
    }

    .cr-cta-note {
        margin-top: 20px;
        color: #94a3b8;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .cr-cta-note i {
        color: #f59e0b;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .cr-cta-title { font-size: 32px; }
        .cr-cta-subtitle { font-size: 22px; }
        .cr-cta-description { font-size: 16px; }
        .cr-cta-btn { width: 100%; justify-content: center; padding: 15px 30px; }
    }
</style>