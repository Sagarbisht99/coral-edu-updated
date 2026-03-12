<style>
    /* Why Study Section Styles - Updated Theme */
    .why-study-section {
        padding: 80px 20px;
        background: linear-gradient(135deg, #001a35 0%, #00254a 100%);
        font-family: 'Inter', sans-serif;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    /* Glow Effect */
    .why-glow-top {
        position: absolute;
        top: -10%;
        left: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255, 122, 0, 0.15) 0%, transparent 70%);
        filter: blur(80px);
        pointer-events: none;
    }

    .why-glow-bottom {
        position: absolute;
        bottom: -10%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(245, 158, 11, 0.15) 0%, transparent 70%);
        filter: blur(80px);
        pointer-events: none;
    }

    .section-title {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 60px;
        color: #ffffff;
        position: relative;
        z-index: 1;
    }

    .highlight-text {
        background: linear-gradient(135deg, #ff7a00 0%, #f59e0b 100%);
        color: #ffffff;
        padding: 6px 20px;
        border-radius: 50px;
        display: inline-block;
        font-weight: 700;
    }

    .benefits-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        position: relative;
        z-index: 1;
    }

    .benefit-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 35px 25px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .benefit-item:hover {
        transform: translateY(-8px);
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 122, 0, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    /* Icon Container with Orange Theme */
    .icon-box {
        width: 70px;
        height: 70px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, rgba(255, 122, 0, 0.2) 0%, rgba(245, 158, 11, 0.2) 100%);
        border-radius: 50%;
        border: 2px solid rgba(255, 122, 0, 0.3);
    }

    .icon-box img {
        width: 65%;
        height: 65%;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .benefit-title {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
        color: #ffffff;
        margin: 0;
        max-width: 280px;
    }

    /* Responsive for Mobile */
    @media (max-width: 992px) {
        .benefits-grid { grid-template-columns: repeat(2, 1fr); gap: 25px; }
        .section-title { font-size: 32px; margin-bottom: 40px; }
        .why-study-section { padding: 60px 20px; }
    }
    
    @media (max-width: 768px) {
        .benefits-grid { grid-template-columns: 1fr; gap: 20px; }
        .section-title { font-size: 28px; margin-bottom: 35px; }
        .why-study-section { padding: 50px 20px; }
        .benefit-item { padding: 30px 20px; }
    }
    
    @media (max-width: 576px) {
        .section-title { font-size: 24px; margin-bottom: 30px; }
        .why-study-section { padding: 40px 15px; }
        .benefit-item { padding: 25px 18px; }
        .icon-box { width: 60px; height: 60px; }
    }
    
    @media (max-width: 480px) {
        .section-title { font-size: 22px; }
        .why-study-section { padding: 35px 15px; }
        .benefit-title { font-size: 16px; }
    }
</style>

<section class="why-study-section">
    <div class="why-glow-top"></div>
    <div class="why-glow-bottom"></div>
    
    <h2 class="section-title">Why study with <span class="highlight-text">Coral Education?</span></h2>
    
    <div class="benefits-grid">
        <div class="benefit-item">
            <div class="icon-box">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135810.png" alt="UGC Entitled">
            </div>
            <h4 class="benefit-title">UGC & AICTE Entitled Programs</h4>
        </div>

        <div class="benefit-item">
            <div class="icon-box">
                <img src="https://cdn-icons-png.flaticon.com/512/2942/2942544.png" alt="Industry Partners">
            </div>
            <h4 class="benefit-title">Curriculum Insights by Industry Leaders</h4>
        </div>

        <div class="benefit-item">
            <div class="icon-box">
                <img src="https://cdn-icons-png.flaticon.com/512/1946/1946115.png" alt="Faculty">
            </div>
            <h4 class="benefit-title">Experienced & Corporate Mentors</h4>
        </div>

        <div class="benefit-item">
            <div class="icon-box">
                <img src="https://cdn-icons-png.flaticon.com/512/2845/2845812.png" alt="Fees">
            </div>
            <h4 class="benefit-title">Affordable Fee With No Cost EMI Options</h4>
        </div>

        <div class="benefit-item">
            <div class="icon-box">
                <img src="https://cdn-icons-png.flaticon.com/512/3210/3210158.png" alt="Live Sessions">
            </div>
            <h4 class="benefit-title">Regular Live Interactive Career Coaching</h4>
        </div>

        <div class="benefit-item">
            <div class="icon-box">
                <img src="https://cdn-icons-png.flaticon.com/512/906/906175.png" alt="LMS">
            </div>
            <h4 class="benefit-title">Advanced Job Readiness Dashboard</h4>
        </div>
    </div>
</section>