<?php
/**
 * Campus Gallery Component
 */

$gallery_items = [
    ['title' => 'Campus life', 'img' => 'https://i.pinimg.com/1200x/66/61/fd/6661fd476c01b55aba1716ae384838ff.jpg', 'class' => 'tall'],
    ['title' => 'Classroom learning', 'img' => 'https://i.pinimg.com/1200x/0c/22/ff/0c22ff14e6093a9274c2fa3f1b34ef02.jpg', 'class' => ''],
    ['title' => 'Industrial visits', 'img' => 'https://i.pinimg.com/736x/99/ca/ab/99caabe73be6e80d1e53d45125cdcd58.jpg', 'class' => 'small'],
    ['title' => 'Events & seminars', 'img' => 'https://i.pinimg.com/1200x/7b/5c/6f/7b5c6f7d5ea691da2dc408283fd06f9f.jpg', 'class' => 'small'],
    ['title' => 'Corporate collaborations', 'img' => 'https://i.pinimg.com/1200x/1d/88/92/1d8892cd225a028fcb2ca05ee71881a1.jpg', 'class' => 'small'],
];

?>

<style>
    .gallery-section {
        padding: 80px 20px;
        background-color: #fff;
        text-align: center;
        font-family: 'Inter', sans-serif;
    }

    .gallery-container {
        max-width: 1140px;
        margin: 0 auto;
    }

    /* Top Badge & Header */
    .gallery-badge {
        background-color: #ffd85d;
        color: #000;
        font-size: 12px;
        font-weight: 700;
        padding: 6px 14px;
        border-radius: 12px;
        display: inline-block;
        margin-bottom: 20px;
    }

    .gallery-title {
        font-size: 36px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 15px;
        color: #111;
    }

    .gallery-subtitle {
        color: #999;
        font-size: 15px;
        margin-bottom: 50px;
    }

    /* Grid Layout */
    .gallery-grid {
        display: grid;
        grid-template-columns: 1.2fr 1fr 1fr; /* Left col is slightly wider */
        grid-template-rows: repeat(2, 280px);
        gap: 20px;
    }

    .gallery-item {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        background-color: #f0f0f0;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    /* The "Tall" Image on the left */
    .gallery-item.tall {
        grid-row: span 2;
    }

    /* Text Labels on Images */
    .gallery-label {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(255, 255, 255, 0.95);
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        color: #111;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    /* Responsive */
    @media (max-width: 900px) {
        .gallery-grid {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
        }
        .gallery-item.tall { grid-row: span 1; height: 400px; }
        .gallery-item { height: 250px; }
    }

    @media (max-width: 600px) {
        .gallery-grid { grid-template-columns: 1fr; }
        .gallery-title { font-size: 26px; }
    }
</style>

<section class="gallery-section">
    <div class="gallery-container">
        
        <div class="gallery-badge">College galleries and activities</div>
        
        <h2 class="gallery-title">
            More visuals for campus life,<br>
            events, seminars, and industry exposure
        </h2>
        
        <p class="gallery-subtitle">
            This homepage uses more images to make the experience feel aspirational, trustworthy, and easy to scan.
        </p>

        <div class="gallery-grid">
            <?php foreach ($gallery_items as $item): ?>
                <div class="gallery-item <?php echo $item['class']; ?>">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="gallery-label"><?php echo $item['title']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>