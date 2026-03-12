<section class="hero-layout">
    <div class="hero-main-container">
        <div class="hero-content-grid">
            <div class="hero-text-content">
                <div class="badge">TOP RANKED COLLEGES 2026</div>
                <h1 class="hero-headline">
                    Find the Right MBA College<br>
                    <span>Build Your Future as a Leader</span>
                </h1>
                <p class="hero-description">
                    Get personalized guidance and find the right institute — even with an average percentile. 
                    Our experts guide you to the industry's most prestigious programs.
                </p>
                <div class="hero-cta-group">
                    <a href="#" class="cta-primary" onclick="openGlobalPopup(); return false;">APPLY NOW</a>
                    <a href="#about" class="cta-outline">EXPLORE PROGRAMS</a>
                </div>
            </div>

            <div class="hero-form-container">
                <form class="hero-premium-form" action="submit.php" method="POST">
                    <h3 class="form-title">Request Call Back</h3>
                    <div class="input-row">
                        <input type="text" name="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="input-row">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-row">
                        <input type="tel" name="mobile" placeholder="Mobile Number" required>
                    </div>
                    <div class="input-row-grid">
                        <select name="program" id="heroProgramSelect" required>
                            <option value="">Program</option>
                            <option value="mba">MBA</option>
                            <option value="pgdm">PGDM</option>
                        </select>
                        <input type="text" name="city" placeholder="City">
                    </div>
                    <div class="input-row">
                        <select name="specialization" id="heroSpecializationSelect" required>
                            <option value="">Select Specialization</option>
                        </select>
                    </div>
                    <button type="submit" class="form-submit-btn">GET EXPERT GUIDANCE</button>
                    <p class="form-footer">Our experts will contact you within 24 hours.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    /* CSS Variables using website orange theme */
    :root {
        --primary-orange: #ff7a00;
        --secondary-orange: #ff9500;
        --light-orange: #ffb347;
        --navy-dark: #0a235b;
        --navy-medium: #163a74;
        --navy-light: #1b53a8;
        --white: #ffffff;
        --text-light: #f8faff;
        --text-muted: #94a3b8;
        --bg-dark: #12141d;
        --surface-dark: #1e212b;
    }

    .hero-layout {
        position: relative;
        min-height: 100vh;
        background: linear-gradient(to right, rgba(10, 35, 91, 0.8) 0%, rgba(10, 35, 91, 0.2) 50%, rgba(10, 35, 91, 0.1) 100%), 
                    var(--bg-dark) url("/assets/images/hero.jpg") center/cover no-repeat;
        display: flex;
        align-items: center;
        padding: 120px 0 60px 0;
        font-family: 'Inter', sans-serif;
        color: var(--white);
        overflow: hidden;
    }

    .hero-main-container {
        position: relative;
        z-index: 10;
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 24px;
        width: 100%;
    }

    .hero-content-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 80px;
        align-items: center;
    }

    /* Text Content */
    .badge {
        display: inline-block;
        padding: 6px 14px;
        background: rgba(255, 122, 0, 0.15);
        border: 1px solid var(--primary-orange);
        color: var(--primary-orange);
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 24px;
    }

    .hero-headline {
        font-size: clamp(32px, 5vw, 56px);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 24px;
    }

    .hero-headline span {
        color: var(--primary-orange);
        background: linear-gradient(to right, var(--primary-orange), var(--secondary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-description {
        font-size: 18px;
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 40px;
        max-width: 600px;
    }

    .hero-cta-group {
        display: flex;
        gap: 20px;
    }

    .cta-primary {
        background: var(--primary-orange);
        color: white;
        padding: 16px 36px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 700;
        transition: 0.3s;
        box-shadow: 0 10px 20px rgba(255, 122, 0, 0.3);
    }

    .cta-primary:hover {
        background: var(--secondary-orange);
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(255, 122, 0, 0.4);
    }

    .cta-outline {
        border: 1px solid rgba(255,255,255,0.2);
        color: white;
        padding: 16px 36px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .cta-outline:hover {
        background: rgba(255,255,255,0.05);
        border-color: var(--primary-orange);
        color: var(--primary-orange);
    }

    /* Premium Form */
    .hero-premium-form {
        background: var(--surface-dark);
        padding: 40px;
        border-radius: 24px;
        border: 1px solid rgba(255,255,255,0.05);
        box-shadow: 0 30px 60px rgba(0,0,0,0.5);
    }

    .form-title {
        font-size: 24px;
        margin-bottom: 25px;
        text-align: center;
        font-weight: 700;
        color: var(--white);
    }

    .input-row { margin-bottom: 16px; }
    .input-row-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 16px;
    }

    .hero-premium-form input, 
    .hero-premium-form select {
        width: 100%;
        padding: 14px 18px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        color: white;
        font-size: 15px;
        transition: 0.3s;
    }

    .hero-premium-form input:focus, 
    .hero-premium-form select:focus {
        outline: none;
        border-color: var(--primary-orange);
        background: rgba(255,255,255,0.07);
    }

    .form-submit-btn {
        width: 100%;
        padding: 16px;
        background: var(--primary-orange);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        margin-top: 10px;
        transition: 0.3s;
    }

    .form-submit-btn:hover {
        background: var(--secondary-orange);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 122, 0, 0.4);
    }

    .form-footer {
        text-align: center;
        font-size: 12px;
        color: var(--text-muted);
        margin-top: 20px;
    }

    /* Mobile Logic */
    @media (max-width: 992px) {
        .hero-content-grid {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 50px;
        }
        .hero-description { margin: 0 auto 40px auto; }
        .hero-cta-group { justify-content: center; }
        .hero-premium-form { max-width: 500px; margin: 0 auto; }
    }
</style>

<script>
    const specData = {
        mba: [
            { v: 'marketing', t: 'MBA in Marketing' },
            { v: 'finance', t: 'MBA in Finance' },
            { v: 'hr', t: 'MBA in Human Resources' },
            { v: 'it', t: 'MBA in Operations' }
        ],
        pgdm: [
            { v: 'gen', t: 'PGDM in Marketing' },
            { v: 'fintech', t: 'PGDM in Finance' },
            { v: 'digital', t: 'PGDM in Human Resources' },
            { v: 'retail', t: 'PGDM in Operations' },
        ]
    };

    document.getElementById('heroProgramSelect').addEventListener('change', function() {
        const specSelect = document.getElementById('heroSpecializationSelect');
        const selected = this.value;
        
        specSelect.innerHTML = '<option value="">Select Specialization</option>';
        
        if(selected && specData[selected]) {
            specData[selected].forEach(item => {
                let opt = document.createElement('option');
                opt.value = item.v;
                opt.textContent = item.t;
                specSelect.appendChild(opt);
            });
        }
    });
</script>