<section class="emotion-cta-wrapper">
    <div class="emotion-cta-bg-shapes">
        <div class="emotion-cta-shape emotion-cta-shape-1"></div>
        <div class="emotion-cta-shape emotion-cta-shape-2"></div>
        <div class="emotion-cta-shape emotion-cta-shape-3"></div>
    </div>
    
    <div class="emotion-cta-container">
        <div class="emotion-cta-content">
            <div class="emotion-cta-image-wrapper">
                <img src="https://i.pinimg.com/736x/a7/8f/47/a78f47af6401bec8b80b315f6cd5412b.jpg" alt="Student seeking college admission guidance" class="emotion-cta-image">
                <div class="emotion-cta-image-overlay"></div>
            </div>
            <div class="emotion-cta-text-content">
                <div class="emotion-cta-badge-wrapper">
                    <span class="emotion-cta-badge">🎓 MBA Admission 2026-27</span>
                    <div class="emotion-cta-badge-glow"></div>
                </div>
                <h2 class="emotion-cta-title">Still Confused About <span>MBA Admission?</span></h2>
                <h3 class="emotion-cta-subtitle">Let our experts guide you to success</h3>
                <p class="emotion-cta-description">
                    Get personalized guidance on college selection, eligibility criteria, specializations, fee structure, scholarships, and placement opportunities. Your dream MBA career starts here.
                </p>
                
                <div class="emotion-cta-action">
                    <a href="#" class="emotion-cta-btn" onclick="openGlobalPopup(); return false;">
                        <span class="emotion-cta-btn-text">Book Free Counselling</span>
                        <i class="fas fa-arrow-right emotion-cta-btn-icon"></i>
                        <div class="emotion-cta-btn-ripple"></div>
                    </a>
                    <div class="emotion-cta-urgency">
                        <p class="emotion-cta-note">
                            <i class="fas fa-fire emotion-cta-fire-icon"></i>
                            <span>Limited slots available - Book now!</span>
                        </p>
                        <div class="emotion-cta-timer">
                            <span class="emotion-cta-timer-text">Offer ends in:</span>
                            <span class="emotion-cta-countdown" id="emotion-timer">24:00:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --emotion-bg: #0a235b;
    --emotion-surface: #163a74;
    --emotion-primary: #ff7a00;
    --emotion-secondary: #ffda58;
    --emotion-accent: #ff9500;
    --emotion-text: #ffffff;
    --emotion-muted: rgba(255, 255, 255, 0.8);
    --emotion-border: rgba(255, 255, 255, 0.1);
}

.emotion-cta-wrapper {
    background: linear-gradient(135deg, var(--emotion-bg) 0%, var(--emotion-surface) 100%);
    padding: 120px 0;
    position: relative;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
    border-top: 3px solid;
    border-image: linear-gradient(90deg, var(--emotion-primary), var(--emotion-accent), var(--emotion-secondary)) 1;
}

/* Enhanced background shapes */
.emotion-cta-bg-shapes .emotion-cta-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    z-index: 1;
    animation: float 6s ease-in-out infinite;
}

.emotion-cta-shape-1 {
    width: 400px;
    height: 400px;
    background: linear-gradient(45deg, var(--emotion-primary), var(--emotion-accent));
    top: -150px;
    left: -100px;
    opacity: 0.2;
    animation-delay: 0s;
}

.emotion-cta-shape-2 {
    width: 350px;
    height: 350px;
    background: linear-gradient(45deg, var(--emotion-secondary), var(--emotion-primary));
    bottom: -100px;
    right: -50px;
    opacity: 0.15;
    animation-delay: 2s;
}

.emotion-cta-shape-3 {
    width: 250px;
    height: 250px;
    background: var(--emotion-secondary);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.1;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-20px) rotate(120deg); }
    66% { transform: translateY(20px) rotate(240deg); }
}

.emotion-cta-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 10;
}

.emotion-cta-content {
    display: flex;
    align-items: center;
    gap: 80px;
}

.emotion-cta-image-wrapper {
    flex: 1;
    max-width: 500px;
    position: relative;
}

.emotion-cta-image {
    width: 100%;
    height: auto;
    border-radius: 24px;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
    object-fit: cover;
    transition: transform 0.3s ease;
}

.emotion-cta-image:hover {
    transform: scale(1.05);
}

.emotion-cta-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, var(--emotion-primary), transparent);
    border-radius: 24px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.emotion-cta-image-wrapper:hover .emotion-cta-image-overlay {
    opacity: 0.1;
}

.emotion-cta-text-content {
    flex: 1;
    text-align: left;
}

.emotion-cta-badge-wrapper {
    position: relative;
    display: inline-block;
    margin-bottom: 30px;
}

.emotion-cta-badge {
    background: rgba(255, 122, 0, 0.15);
    color: var(--emotion-secondary);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    border: 1px solid rgba(255, 122, 0, 0.3);
    backdrop-filter: blur(10px);
    position: relative;
    z-index: 2;
}

.emotion-cta-badge-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, var(--emotion-primary), var(--emotion-accent), var(--emotion-secondary));
    border-radius: 50px;
    z-index: 1;
    opacity: 0.3;
    animation: glow 2s ease-in-out infinite alternate;
}

@keyframes glow {
    from { opacity: 0.3; }
    to { opacity: 0.6; }
}

.emotion-cta-title {
    color: var(--emotion-text);
    font-size: 52px;
    font-weight: 900;
    margin: 0 0 15px 0;
    line-height: 1.1;
    letter-spacing: -0.02em;
}

.emotion-cta-title span {
    background: linear-gradient(45deg, var(--emotion-primary), var(--emotion-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.emotion-cta-subtitle {
    color: var(--emotion-muted);
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 25px;
    line-height: 1.3;
}

.emotion-cta-description {
    color: var(--emotion-muted);
    font-size: 18px;
    line-height: 1.7;
    margin-bottom: 40px;
    max-width: 600px;
}

.emotion-cta-action {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.emotion-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 15px;
    background: linear-gradient(45deg, var(--emotion-primary), var(--emotion-accent));
    color: var(--emotion-text);
    padding: 20px 50px;
    border-radius: 16px;
    font-size: 18px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 15px 40px rgba(255, 122, 0, 0.4);
    position: relative;
    overflow: hidden;
    border: none;
    cursor: pointer;
}

.emotion-cta-btn-text {
    position: relative;
    z-index: 2;
}

.emotion-cta-btn-icon {
    position: relative;
    z-index: 2;
    transition: transform 0.3s ease;
}

.emotion-cta-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 60px rgba(255, 122, 0, 0.5);
}

.emotion-cta-btn:hover .emotion-cta-btn-icon {
    transform: translateX(8px);
}

.emotion-cta-btn-ripple {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.emotion-cta-btn:active .emotion-cta-btn-ripple {
    width: 300px;
    height: 300px;
}

.emotion-cta-urgency {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.emotion-cta-note {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--emotion-muted);
    font-size: 15px;
    font-weight: 500;
    margin: 0;
}

.emotion-cta-fire-icon {
    color: var(--emotion-primary);
    animation: fire 1.5s ease-in-out infinite;
}

@keyframes fire {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
}

.emotion-cta-timer {
    display: flex;
    align-items: center;
    gap: 8px;
}

.emotion-cta-timer-text {
    color: var(--emotion-muted);
    font-size: 14px;
    font-weight: 500;
}

.emotion-cta-countdown {
    background: rgba(255, 122, 0, 0.2);
    color: var(--emotion-secondary);
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    font-family: 'Courier New', monospace;
    border: 1px solid rgba(255, 122, 0, 0.3);
}

/* Mobile Responsive */
@media (max-width: 968px) {
    .emotion-cta-content {
        flex-direction: column;
        gap: 60px;
        text-align: center;
    }
    
    .emotion-cta-text-content {
        text-align: center;
    }
    
    .emotion-cta-title { font-size: 42px; }
    .emotion-cta-subtitle { font-size: 22px; }
    .emotion-cta-description { font-size: 17px; }
}

@media (max-width: 768px) {
    .emotion-cta-wrapper {
        padding: 80px 0;
    }
    
    .emotion-cta-content {
        gap: 40px;
    }
    
    .emotion-cta-image-wrapper {
        max-width: 100%;
    }
    
    .emotion-cta-title { font-size: 36px; }
    .emotion-cta-subtitle { font-size: 20px; }
    .emotion-cta-description { font-size: 16px; }
    
    .emotion-cta-btn {
        width: 100%;
        justify-content: center;
        padding: 18px 40px;
    }
    
    .emotion-cta-urgency {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .emotion-cta-wrapper {
        padding: 60px 0;
    }
    
    .emotion-cta-container {
        padding: 0 16px;
    }
    
    .emotion-cta-title { font-size: 30px; }
    .emotion-cta-subtitle { font-size: 18px; }
    .emotion-cta-description { font-size: 15px; }
    
    .emotion-cta-btn {
        padding: 16px 30px;
        font-size: 16px;
    }
}
</style>

<script>
// Countdown Timer for CTA
function updateEmotionTimer() {
    const timerElement = document.getElementById('emotion-timer');
    if (!timerElement) return;
    
    // Set to 24 hours countdown
    let totalSeconds = 24 * 60 * 60;
    
    function update() {
        const hours = Math.floor(totalSeconds / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;
        
        const display = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        timerElement.textContent = display;
        
        if (totalSeconds > 0) {
            totalSeconds--;
        } else {
            totalSeconds = 24 * 60 * 60; // Reset to 24 hours
        }
    }
    
    update();
    setInterval(update, 1000);
}

// Initialize timer when DOM is loaded
document.addEventListener('DOMContentLoaded', updateEmotionTimer);
</script>