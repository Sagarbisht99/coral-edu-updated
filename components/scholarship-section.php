<style>
    /* Scholarship Section Wrapper */
    .scholarship-section {
        padding: 60px 20px;
        background-color: #f8f9fa; /* Light grey outer background */
        font-family: 'Inter', -apple-system, sans-serif;
    }

    /* Inner Yellow Card */
    .scholarship-card {
        max-width: 1140px;
        margin: 0 auto;
        background-color: #ffda58; /* Main Yellow Background */
        border-radius: 16px;
        display: flex;
        overflow: hidden;
        align-items: center;
        padding: 40px;
        gap: 40px;
    }

    /* Left Content Area */
    .scholarship-content {
        flex: 1;
        text-align: left;
    }

    .scholarship-badge {
        font-size: 13px;
        font-weight: 700;
        color: #111;
        margin-bottom: 20px;
        display: block;
        text-transform: capitalize;
    }

    .scholarship-title {
        font-size: 38px;
        font-weight: 800;
        color: #000;
        line-height: 1.1;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .scholarship-desc {
        font-size: 16px;
        color: #111;
        line-height: 1.5;
        margin-bottom: 35px;
        max-width: 480px;
    }

    /* Button Container */
    .scholarship-btns {
        display: flex;
        gap: 15px;
    }

    .btn-navy {
        background-color: #0a235b;
        color: #ffffff;
        text-decoration: none;
        padding: 14px 24px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 15px;
        transition: opacity 0.2s;
    }

    .btn-white {
        background-color: #ffffff;
        color: #111;
        text-decoration: none;
        padding: 14px 24px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 15px;
        transition: background-color 0.2s;
    }

    .btn-navy:hover { opacity: 0.9; }
    .btn-white:hover { background-color: #f3f4f6; }

    /* Right Image Area */
    .scholarship-image-box {
        flex: 1;
        height: 400px;
    }

    .scholarship-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    /* Responsive Handling */
    @media (max-width: 992px) {
        .scholarship-card {
            flex-direction: column;
            padding: 30px;
            text-align: center;
        }
        .scholarship-content { text-align: center; }
        .scholarship-desc { margin-left: auto; margin-right: auto; }
        .scholarship-btns { justify-content: center; flex-wrap: wrap; }
        .scholarship-image-box { width: 100%; height: 300px; }
        .scholarship-title { font-size: 30px; }
    }
</style>

<section class="scholarship-section">
    <div class="scholarship-card">
        
        <!-- Left Text Content -->
        <div class="scholarship-content">
            <span class="scholarship-badge">Scholarship assistance</span>
            
            <h2 class="scholarship-title">
                Scholarship Assistance Available for Eligible Students
            </h2>
            
            <p class="scholarship-desc">
                We help identify scholarship-friendly colleges, affordable options, and practical admission paths for families who want more value and clarity.
            </p>

            <div class="scholarship-btns">
                <a href="#" onclick="openGlobalPopup(); return false;" class="btn-navy">Check Scholarship Support</a>
                <a href="#" onclick="openGlobalPopup(); return false;" class="btn-white">Book Free Counselling</a>
            </div>
        </div>

        <!-- Right Visual Content -->
        <div class="scholarship-image-box">
            <!-- Replace with your actual image path -->
            <img src="https://i.pinimg.com/736x/d5/ff/bd/d5ffbd42db1e52b55d27c4ba3cde693a.jpg" alt="Students receiving scholarship award">
        </div>
    </div>
</section>