<section class="nexus-features">
    <div class="nexus-features-container">
        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-certificate"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">Harvard Certified</span>
                <span class="nexus-feature-sub">Modules</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">No Cost EMI</span>
                <span class="nexus-feature-sub">Plan Available</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-handshake"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">300+</span>
                <span class="nexus-feature-sub">Hiring Partners</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">Upto 25% Assured</span>
                <span class="nexus-feature-sub">Scholarship</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-chair"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">Book Your Seat</span>
                <span class="nexus-feature-sub">By Paying ₹ 10,000</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">100% Placement</span>
                <span class="nexus-feature-sub">Assistance</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-file-signature"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">On Demand</span>
                <span class="nexus-feature-sub">Examination</span>
            </div>
        </div>

        <div class="nexus-feature-card">
            <div class="nexus-icon-box">
                <i class="fas fa-headset"></i>
            </div>
            <div class="nexus-content-box">
                <span class="nexus-feature-title">24/7 AI Learners</span>
                <span class="nexus-feature-sub">Support</span>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --nexus-bg: #0a235b;
    --nexus-card: #163a74;
    --nexus-primary: #ff7a00;
    --nexus-secondary: #ffda58;
    --nexus-text: #ffffff;
    --nexus-muted: rgba(255, 255, 255, 0.8);
}

.nexus-features {
    background-color: var(--nexus-bg);
    padding: 60px 20px;
    font-family: 'Inter', sans-serif;
}

.nexus-features-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.nexus-feature-card {
    display: flex;
    background-color: var(--nexus-card);
    border-radius: 4px; /* Matching the blocky style of your image */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.nexus-feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    border-color: var(--nexus-secondary);
}

.nexus-icon-box {
    background-color: var(--nexus-primary);
    width: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.nexus-icon-box i {
    font-size: 28px;
    color: white;
}

.nexus-content-box {
    padding: 15px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.nexus-feature-title {
    color: var(--nexus-text);
    font-size: 15px;
    font-weight: 600;
    line-height: 1.2;
}

.nexus-feature-sub {
    color: var(--nexus-muted);
    font-size: 14px;
    margin-top: 4px;
}

/* Responsive Scaling */
@media (max-width: 1100px) {
    .nexus-features-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .nexus-features-container {
        grid-template-columns: 1fr;
    }
    .nexus-icon-box {
        width: 70px;
    }
    .nexus-feature-title {
        font-size: 14px;
    }
}
</style>