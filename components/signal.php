<?php
/**
 * Trust Signals Component
 * Import this using: include 'trust-signals.php';
 */

// Array of college logos with names and placeholder URLs
$college_logos = [
    ['name' => 'XLRI Jamshedpur', 'image' => 'https://insideiim.com/_next/image?url=https%3A%2F%2Fbackend.insideiim.com%2Fwp-content%2Fuploads%2F2012%2F11%2FSummer-Placements-XLRI-JamshedpurClass-of-2012-14.jpg&w=3840&q=72'],
    ['name' => 'SIBM Pune', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROTRlJWUpQV7w5TszLiVWgPxZB8PS1viWRng&s'],
    ['name' => 'NMIMS Mumbai', 'image' => 'https://i.pinimg.com/736x/8a/99/ca/8a99caaccbe79d2466da751ca3041023.jpg'],
    ['name' => 'IMT Ghaziabad', 'image' => 'https://yt3.googleusercontent.com/ytc/AIdro_mh6trGyVeuR7JfigFwQHe6xnEho1tt9U0OTYxPmlUVqg=s900-c-k-c0x00ffffff-no-rj'],
    ['name' => 'ICFAI Hyderabad', 'image' => 'https://www.latestlaws.com/media/2019/05/icfai-university-tripura-defence-colony-delhi-mba-institutes-31eqy8h.jpg'],
    ['name' => 'TAPMI Manipal', 'image' => 'https://kapp-bucket.s3.ap-south-1.amazonaws.com/allCollegeLogo/logo/1234567-TAPMI_7049249_Logo.jpg'],
    ['name' => 'Great Lakes Chennai', 'image' => 'https://www.greatlakes.edu.in/chennai/assets/greatlakes/images/logo-chennai-2.jpg'],
    ['name' => 'KJ Somaiya Mumbai', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpcwsXjou5kpc351lnXP6fd9MW6VlxDEVzSg&s'],
    ['name' => 'XIMB Bhubaneswar', 'image' => 'https://upload.wikimedia.org/wikipedia/en/b/bb/XIM_University_Logo.png'],
    ['name' => 'IMI Delhi', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKm-FqBFDfOjdzUInTrB3a4eVjzw7eVhuVig&s'],
    ['name' => 'MICA Ahmedabad', 'image' => 'https://iirfranking2.s3.ap-south-1.amazonaws.com/upload__1668751152376.jpeg'],
    ['name' => 'FMS Delhi', 'image' => 'https://play-lh.googleusercontent.com/rV_JX_20WmqPhw8lhTsUgcBVXT2BhHThqJ7FZK49tvFvmj83ySr1IiZ_QJ9TIGt9BQ'],
    ['name' => 'SPJIMR Mumbai', 'image' => 'https://pbs.twimg.com/profile_images/1587494249809219584/48LwaPMb_400x400.jpg'],
    ['name' => 'MDI Gurgaon', 'image' => 'https://kapp-bucket.s3.ap-south-1.amazonaws.com/allCollegeLogo/logo/1234567-MDI_7013563_Logo.png'],
    ['name' => 'IIFT Delhi', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUwIejO9F-0qg_VYRJs3e92bPx7ZWMJJeLcQ&s'],
    ['name' => 'JBIMS Mumbai', 'image' => 'https://upload.wikimedia.org/wikipedia/en/7/72/Jamnalal_Bajaj_Institute_of_Management_Studies_Logo.png'],

];
?>

<style>
    /* Scoped Styles for this section only */
    .trust-section {
        background-color: #f9f9f9;
        padding: 80px 20px;
        text-align: center;
        font-family: 'Inter', sans-serif;
        /* Ensure this font is loaded in your main layout */
    }

    .trust-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Yellow Pill Badge */
    .trust-badge {
        background-color: #fcd34d;
        color: #1a1a1a;
        font-size: 0.85rem;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 50px;
        display: inline-block;
        margin-bottom: 24px;
        text-transform: capitalize;
    }

    /* Main Title - Matching the heavy bold look */
    .trust-title {
        font-size: clamp(1.8rem, 5vw, 2.8rem);
        color: #111;
        font-weight: 800;
        line-height: 1.1;
        margin: 0 auto 20px;
        max-width: 850px;
        letter-spacing: -0.02em;
    }

    /* Sub-description */
    .trust-desc {
        font-size: 1.1rem;
        color: #666;
        line-height: 1.6;
        max-width: 720px;
        margin: 0 auto 48px;
    }

    /* College Logo Slider */
    .trust-slider {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid #eaeaea;
    }

    .trust-slider-track {
        display: flex;
        animation: slide 20s linear infinite;
    }

    .trust-slider-track:hover {
        animation-play-state: paused;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Individual Card Design */
    .trust-card {
        min-width: 160px;
        height: 90px;
        background: #ffffff;
        border-right: 1px solid #eaeaea;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .trust-card:last-child {
        border-right: none;
    }

    .trust-card:hover {
        background: #f8f9fa;
        transform: scale(1.05);
        z-index: 10;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* College Logo Image */
    .college-logo {
        max-width: 120px;
        max-height: 60px;
        object-fit: contain;
        font-weight: 600;
        font-size: 14px;
        color: #333;
        text-align: center;
    }

    @media (max-width: 600px) {
        .trust-card {
            min-width: 120px;
            height: 70px;
        }

        .college-logo {
            max-width: 90px;
            max-height: 45px;
            font-size: 12px;
        }
    }
</style>

<section class="trust-section">
    <div class="trust-container">

        <div class="trust-badge">
            Trusted college and recruiter ecosystem
        </div>

        <h2 class="trust-title">
            Stronger trust signals before<br>
            students submit their enquiry
        </h2>

        <p class="trust-desc">
            Partner college logos and placement company visuals help students and parents feel more confident about
            reaching out.
        </p>

        <div class="trust-slider">
            <div class="trust-slider-track">
                <?php foreach ($college_logos as $logo): ?>
                    <div class="trust-card">
                        <img src="<?php echo $logo['image']; ?>" alt="<?php echo $logo['name']; ?>" class="college-logo">
                    </div>
                <?php endforeach; ?>
                <?php foreach ($college_logos as $logo): ?>
                    <div class="trust-card">
                        <img src="<?php echo $logo['image']; ?>" alt="<?php echo $logo['name']; ?>" class="college-logo">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>