<?php
/**
 * Placement Highlights Component
 */

$stats = [
    [
        'value' => '12 LPA',
        'label' => 'Average package support',
        'desc'  => 'Focused college guidance for stronger placement-oriented outcomes.'
    ],
    [
        'value' => '24 LPA',
        'label' => 'Highest package',
        'desc'  => 'Top recruiter potential across consulting, analytics, BFSI, and sales.'
    ],
    [
        'value' => '500+',
        'label' => 'Placement companies',
        'desc'  => 'Recruiters across startups, enterprises, and large business brands.'
    ],
    [
        'value' => '91%',
        'label' => 'Success stories',
        'desc'  => 'Students guided into better-fit colleges and clearer career paths.'
    ]
];
?>

<style>
    .placement-section {
        padding: 80px 20px;
        text-align: center;
        background-color: #fff;
        font-family: 'Inter', -apple-system, sans-serif;
    }

    .placement-container {
        max-width: 1140px;
        margin: 0 auto;
    }

    /* Top Badge */
    .placement-badge {
        background-color: #ffd85d;
        color: #000;
        font-size: 13px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 25px;
    }

    /* Main Heading */
    .placement-title {
        font-size: 40px;
        font-weight: 800;
        color: #111;
        line-height: 1.1;
        margin-bottom: 15px;
        letter-spacing: -1px;
    }

    /* Sub-text */
    .placement-subtitle {
        color: #888;
        font-size: 16px;
        margin-bottom: 50px;
    }

    /* Grid Layout */
    .placement-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    /* Card Styling */
    .stat-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 40px 25px;
        transition: all 0.3s ease;
        text-align: center;
    }

    .stat-card:hover {
        border-color: #ffd85d;
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    /* Stat Value (The Big Orange Number) */
    .stat-value {
        font-size: 38px;
        font-weight: 800;
        color: #ff7a00; /* Matching the orange in the image */
        margin-bottom: 10px;
        display: block;
    }

    /* Stat Label (Bold) */
    .stat-label {
        font-size: 15px;
        font-weight: 700;
        color: #000;
        margin-bottom: 12px;
        display: block;
    }

    /* Stat Description */
    .stat-desc {
        font-size: 14px;
        color: #999;
        line-height: 1.5;
        margin: 0;
    }

    /* Responsive for Tablets & Phones */
    @media (max-width: 992px) {
        .placement-grid { 
            grid-template-columns: repeat(2, 1fr); 
            gap: 25px;
        }
        
        .placement-section {
            padding: 60px 20px;
        }
        
        .placement-title {
            font-size: 32px;
        }
        
        .stat-card {
            padding: 35px 20px;
        }
    }

    @media (max-width: 768px) {
        .placement-section {
            padding: 50px 20px;
        }
        
        .placement-title {
            font-size: 28px;
            line-height: 1.2;
        }
        
        .placement-subtitle {
            font-size: 15px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            padding: 30px 20px;
        }
        
        .stat-value {
            font-size: 32px;
        }
        
        .stat-label {
            font-size: 14px;
        }
        
        .stat-desc {
            font-size: 13px;
        }
    }

    @media (max-width: 576px) {
        .placement-grid { 
            grid-template-columns: 1fr; 
            gap: 20px;
        }
        
        .placement-section {
            padding: 40px 15px;
        }
        
        .placement-title { 
            font-size: 24px; 
        }
        
        .placement-subtitle {
            font-size: 14px;
            margin-bottom: 35px;
        }
        
        .stat-card {
            padding: 25px 15px;
        }
        
        .stat-value {
            font-size: 28px;
        }
        
        .stat-label {
            font-size: 13px;
            margin-bottom: 8px;
        }
        
        .stat-desc {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .placement-section {
            padding: 35px 15px;
        }
        
        .placement-title { 
            font-size: 22px; 
        }
        
        .placement-subtitle {
            font-size: 13px;
        }
        
        .stat-card {
            padding: 20px 15px;
        }
        
        .stat-value {
            font-size: 26px;
        }
        
        .stat-label {
            font-size: 12px;
        }
        
        .stat-desc {
            font-size: 11px;
        }
    }
</style>

<section class="placement-section">
    <div class="placement-container">
        
        <div class="placement-badge">Placement Highlights</div>

        <h2 class="placement-title">
            Placement support up to 12 LPA<br>
            with stronger career storytelling
        </h2>

        <p class="placement-subtitle">
            Connect admission counselling with real outcomes through clean metrics and better visual presentation.
        </p>

        <div class="placement-grid">
            <?php foreach ($stats as $item): ?>
                <div class="stat-card">
                    <span class="stat-value"><?php echo $item['value']; ?></span>
                    <span class="stat-label"><?php echo $item['label']; ?></span>
                    <p class="stat-desc"><?php echo $item['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>