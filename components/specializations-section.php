<?php
/**
 * MBA Specializations Component
 */

$specializations = [
    [
        'title' => 'MBA in HR',
        'desc'  => 'People strategy, hiring, talent management, and organizational growth.',
        'img'   => 'https://i.pinimg.com/1200x/16/28/5c/16285c9da5541d26d7a1eb15340dc7f0.jpg'
    ],
    [
        'title' => 'MBA in Marketing',
        'desc'  => 'Brand building, growth, digital marketing, and customer strategy.',
        'img'   => 'https://i.pinimg.com/736x/55/e0/e3/55e0e3c58f115b0ed2af83da9c860b22.jpg'
    ],
    [
        'title' => 'MBA in Finance',
        'desc'  => 'Corporate finance, banking, investment roles, and financial planning.',
        'img'   => 'https://i.pinimg.com/1200x/72/d6/ba/72d6ba0e9cc93876c00e14fab47f8b92.jpg'
    ],
    [
        'title' => 'MBA in Business Analytics',
        'desc'  => 'Data-driven management, insights, dashboards, and business decisions.',
        'img'   => 'https://i.pinimg.com/736x/21/cd/db/21cddb74575b61eb8ae6da10b375ad30.jpg'
    ],
    [
        'title' => 'MBA in International Business',
        'desc'  => 'Global markets, trade, partnerships, and international growth strategy.',
        'img'   => 'https://i.pinimg.com/736x/17/1f/ac/171facd16843e2e3ec179b58694d3805.jpg'
    ]
];
?>

<style>
    .spec-section {
        padding: 80px 20px;
        background-color: #fff;
        text-align: center;
        font-family: 'Inter', sans-serif;
    }

    .spec-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Top Badge */
    .spec-badge {
        background-color: #ffd85d;
        color: #000;
        font-size: 12px;
        font-weight: 700;
        padding: 6px 14px;
        border-radius: 12px;
        display: inline-block;
        margin-bottom: 20px;
    }

    /* Heading */
    .spec-title {
        font-size: 38px;
        font-weight: 800;
        line-height: 1.1;
        margin: 0 auto 15px;
        max-width: 800px;
        color: #111;
        letter-spacing: -1px;
    }

    /* Subtitle */
    .spec-subtitle {
        color: #999;
        font-size: 15px;
        margin-bottom: 50px;
    }

    /* Flex Grid */
    .spec-grid {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* Individual Card */
    .spec-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        width: 215px; /* Fixed width to match the slim profile in image */
        overflow: hidden;
        text-align: left;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
    }

    .spec-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        border-color: #ddd;
    }

    .spec-img {
        width: 100%;
        height: 140px;
        object-fit: cover;
    }

    .spec-content {
        padding: 20px;
        flex-grow: 1;
    }

    .spec-name {
        font-size: 16px;
        font-weight: 800;
        color: #111;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .spec-desc {
        font-size: 13px;
        color: #888;
        line-height: 1.5;
        margin: 0;
    }

    /* Mobile handling */
    @media (max-width: 768px) {
        .spec-card { width: 100%; max-width: 300px; }
        .spec-title { font-size: 28px; }
    }
</style>

<section class="spec-section">
    <div class="spec-container">
        
        <div class="spec-badge">Popular specializations</div>
        
        <h2 class="spec-title">
            A visual overview of MBA specializations students ask about most
        </h2>
        
        <p class="spec-subtitle">
            Showing options before the form helps users connect their interests to the counselling journey.
        </p>

        <div class="spec-grid">
            <?php foreach ($specializations as $spec): ?>
                <div class="spec-card">
                    <img src="<?php echo $spec['img']; ?>" alt="<?php echo $spec['title']; ?>" class="spec-img">
                    <div class="spec-content">
                        <h4 class="spec-name"><?php echo $spec['title']; ?></h4>
                        <p class="spec-desc"><?php echo $spec['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>