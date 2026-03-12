<!-- Student Reviews Slider Section -->
<section class="student-reviews-section">
    <div class="reviews-header">
        <span class="reviews-badge">Success Stories</span>
        <h2 class="reviews-title">What Our Students Say</h2>
        <p class="reviews-subtitle">Real experiences from students who got into their dream MBA colleges with our guidance</p>
    </div>

    <div class="reviews-track-viewport">
        <div class="reviews-slider" id="reviewTrack">
            <!-- Reviews will be dynamically generated here -->
        </div>
    </div>

    <div class="slider-controls">
        <button class="slider-nav prev" onclick="moveManual(-1)"><i class="fas fa-arrow-left"></i></button>
        <button class="slider-nav next" onclick="moveManual(1)"><i class="fas fa-arrow-right"></i></button>
    </div>
</section>

<style>
/* Integrated Dark Theme Palette */
.student-reviews-section {
    padding: 100px 20px;
    background: linear-gradient(135deg, #f8faff 0%, #ffffff 100%);
    font-family: 'Inter', sans-serif;
    overflow: hidden;
    position: relative;
}

.student-reviews-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ff7a00, transparent);
}

.reviews-header {
    text-align: center;
    margin-bottom: 60px;
}

.reviews-badge {
    background: #ff7a00;
    color: #fff;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: inline-block;
    margin-bottom: 20px;
}

.reviews-title {
    color: #0a235b;
    font-size: 38px;
    font-weight: 900;
    margin: 0 0 20px;
    line-height: 1.2;
}

.reviews-subtitle {
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto 0;
    font-size: 16px;
    line-height: 1.6;
}

.reviews-track-viewport {
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden; /* Clips the infinite track */
}

.reviews-slider {
    display: flex;
    gap: 30px;
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    padding: 20px 0;
}

.review-card {
    min-width: calc(33.333% - 20px); /* Show 3 cards */
    background: #ffffff;
    border: 1px solid #eef2ff;
    border-radius: 20px;
    padding: 35px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.review-card:hover {
    border-color: #ff7a00;
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(255, 122, 0, 0.15);
}

.review-stars {
    color: #ff7a00;
    margin-bottom: 20px;
    font-size: 18px;
}

.review-text {
    color: #333;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 30px;
    font-style: italic;
}

.review-author {
    display: flex;
    align-items: center;
    gap: 15px;
}

.author-avatar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid #ff7a00;
    object-fit: cover;
}

.author-info h4 {
    color: #0a235b;
    margin: 0;
    font-size: 16px;
    font-weight: 700;
}

.author-info p {
    color: #6c757d;
    margin: 0;
    font-size: 13px;
    font-weight: 500;
}

.slider-controls {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.slider-nav {
    background: #ff7a00;
    border: 1px solid #ff7a00;
    color: #fff;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
}

.slider-nav:hover {
    background: #e06600;
    color: #fff;
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(255, 122, 0, 0.4);
}

@media (max-width: 992px) {
    .review-card { min-width: calc(50% - 15px); }
}

@media (max-width: 600px) {
    .review-card { min-width: 100%; }
}
</style>

<script>
// Student reviews data
const studentReviews = [
    {
        name: "Rahul Sharma",
        college: "IIM Bangalore - MBA 2024",
        avatar: "https://i.pinimg.com/736x/46/88/12/468812df30ab33d9c66397e40be563af.jpg",
        review: "Coral Education helped me get into IIM Bangalore! Their personalized guidance and mock interviews were game-changers."
    },
    {
        name: "Priya Patel",
        college: "XLRI Jamshedpur - 2024",
        avatar: "https://i.pinimg.com/736x/83/48/80/83488035f3803f0bc8a7d0d94c438535.jpg",
        review: "Got into XLRI with a 85%ile CAT score. The team assisted with applications flawlessly. Highly recommended!"
    },
    {
        name: "Amit Kumar",
        college: "FMS Delhi - MBA 2024",
        avatar: "https://i.pinimg.com/736x/db/51/8b/db518b0d76170130a6db585150c50b77.jpg",
        review: "I was worried about my low CAT percentile, but Coral Education showed me the right path to FMS Delhi."
    },
    {
        name: "Neha Gupta",
        college: "ISB Hyderabad - 2024",
        avatar: "https://i.pinimg.com/736x/70/76/cc/7076ccd13505dfea04ef1c1b5a90a79a.jpg",
        review: "The GD/PI preparation sessions were exceptional. They helped me crack the ISB Hyderabad interview effortlessly."
    }
];

// Function to generate review cards
function generateReviewCards() {
    const track = document.getElementById('reviewTrack');
    
    studentReviews.forEach(student => {
        const card = document.createElement('div');
        card.className = 'review-card';
        card.innerHTML = `
            <div class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="review-text">"${student.review}"</p>
            <div class="review-author">
                <div class="author-avatar">
                    <img src="${student.avatar}" alt="${student.name}">
                </div>
                <div class="author-info">
                    <h4>${student.name}</h4>
                    <p>${student.college}</p>
                </div>
            </div>
        `;
        track.appendChild(card);
    });
    
    // Clone cards for infinite effect
    const cards = Array.from(track.children);
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });
}

// Initialize slider
const track = document.getElementById('reviewTrack');
let cards = [];
let cardWidth = 0;
let index = 0;
let autoRun = null;

function initSlider() {
    cards = Array.from(track.children);
    cardWidth = cards[0].getBoundingClientRect().width + 30; // width + gap
    updateSlider();
}

function updateSlider() {
    track.style.transition = "transform 0.5s ease-out";
    track.style.transform = `translateX(-${index * cardWidth}px)`;
    
    // Infinite Reset Logic
    if (index >= cards.length / 2) { // Check against original cards count
        setTimeout(() => {
            track.style.transition = "none";
            index = 0;
            track.style.transform = `translateX(0)`;
        }, 500);
    }
    
    if (index < 0) {
        setTimeout(() => {
            track.style.transition = "none";
            index = (cards.length / 2) - 1;
            track.style.transform = `translateX(-${index * cardWidth}px)`;
        }, 500);
    }
}

function moveManual(dir) {
    index += dir;
    updateSlider();
}

function startAutoPlay() {
    autoRun = setInterval(() => {
        index++;
        updateSlider();
    }, 4000);
}

function stopAutoPlay() {
    if (autoRun) {
        clearInterval(autoRun);
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    generateReviewCards();
    initSlider();
    startAutoPlay();
    
    // Pause on hover
    track.addEventListener('mouseenter', stopAutoPlay);
    track.addEventListener('mouseleave', startAutoPlay);
    
    // Handle window resize
    window.addEventListener('resize', () => {
        cardWidth = track.children[0].getBoundingClientRect().width + 30;
        updateSlider();
    });
});
</script>

<style>
/* Mobile Responsive */
@media (max-width: 992px) {
    .student-reviews-section {
        padding: 80px 20px;
    }
    
    .reviews-title {
        font-size: 32px;
    }
    
    .review-card {
        min-width: 300px;
    }
}

@media (max-width: 768px) {
    .student-reviews-section {
        padding: 60px 20px;
    }
    
    .reviews-header {
        margin-bottom: 40px;
    }
    
    .reviews-title {
        font-size: 28px;
        line-height: 1.2;
    }
    
    .reviews-subtitle {
        font-size: 14px;
    }
    
    .review-card {
        min-width: 280px;
        padding: 20px 15px;
    }
    
    .review-text {
        font-size: 13px;
    }
    
    .author-avatar {
        width: 45px;
        height: 45px;
    }
    
    .author-info h4 {
        font-size: 14px;
    }
    
    .author-info p {
        font-size: 12px;
    }
    
    .slider-nav {
        width: 45px;
        height: 45px;
        font-size: 16px;
    }
}

@media (max-width: 576px) {
    .student-reviews-section {
        padding: 50px 15px;
    }
    
    .reviews-header {
        margin-bottom: 30px;
    }
    
    .reviews-title {
        font-size: 24px;
    }
    
    .reviews-subtitle {
        font-size: 13px;
    }
    
    .review-card {
        min-width: 260px;
        padding: 18px 12px;
    }
    
    .review-text {
        font-size: 12px;
    }
    
    .author-avatar {
        width: 40px;
        height: 40px;
    }
    
    .author-info h4 {
        font-size: 13px;
    }
    
    .author-info p {
        font-size: 11px;
    }
    
    .slider-nav {
        width: 40px;
        height: 40px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .student-reviews-section {
        padding: 40px 15px;
    }
    
    .reviews-title {
        font-size: 22px;
    }
    
    .reviews-subtitle {
        font-size: 12px;
    }
    
    .review-card {
        min-width: 240px;
        padding: 15px 10px;
    }
    
    .review-text {
        font-size: 11px;
    }
    
    .author-avatar {
        width: 35px;
        height: 35px;
    }
    
    .author-info h4 {
        font-size: 12px;
    }
    
    .author-info p {
        font-size: 10px;
    }
    
    .slider-nav {
        width: 35px;
        height: 35px;
        font-size: 12px;
    }
}
</style>