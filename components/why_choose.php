<style>
    .features-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
        font-family: 'Inter', sans-serif;
    }

    .features-container {
        max-width: 1140px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    /* Common Card Styling */
    .feature-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #eee;
        display: flex;
        flex-direction: column;
    }

    .feature-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        display: block;
    }

    .feature-content {
        padding: 32px;
    }

    /* Main Left Card Specifics */
    .main-card .feature-img {
        height: 300px;
    }

    .feature-badge {
        background-color: #ffd85d;
        color: #000;
        font-size: 11px;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 16px;
    }

    .feature-title {
        font-size: 22px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 16px;
        color: #111;
    }

    .feature-text {
        color: #777;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    /* Bullet List */
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .list-item {
        margin-bottom: 20px;
        padding-left: 24px;
        position: relative;
    }

    .list-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 6px;
        width: 8px;
        height: 8px;
        background-color: #ff7a00;
        border-radius: 50%;
    }

    .list-item-title {
        display: block;
        font-weight: 700;
        font-size: 14px;
        color: #333;
        margin-bottom: 4px;
    }

    .list-item-desc {
        font-size: 13px;
        color: #888;
    }

    /* Right Side Stack */
    .feature-stack {
        display: grid;
        grid-template-rows: 1fr 1fr;
        gap: 24px;
    }

    .small-card .feature-img {
        height: 180px;
    }

    .small-card .feature-content {
        padding: 24px;
    }

    .small-card .feature-title {
        font-size: 18px;
        margin-bottom: 12px;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .features-container { grid-template-columns: 1fr; }
    }
</style>

<section class="features-section">
    <div class="features-container">
        
        <!-- Left Main Card -->
        <div class="feature-card main-card">
            <img src="https://i.pinimg.com/736x/27/11/0f/27110fc00990e3f056884ec72123b701.jpg" alt="Guidance" class="feature-img">
            <div class="feature-content">
                <div class="feature-badge">Why students choose Coral Education</div>
                <h3 class="feature-title">Personalized guidance built around profile, budget, specialization, and placement goals</h3>
                <p class="feature-text">Students and parents often need simple clarity. Our counsellors help compare colleges, shortlist realistic options, and reduce confusion across the full admission journey.</p>
                
                <ul class="feature-list">
                    <?php 
                    $list_items = [
                        ['t' => 'Profile-based college shortlisting', 'd' => 'Match percentile, budget, city preference, and future career goals.'],
                        ['t' => 'Better decisions with average scores', 'd' => 'Explore suitable colleges even if CAT or entrance performance is not ideal.'],
                        ['t' => 'Transparent support', 'd' => 'Understand fees, ROI, scholarships, and next-step planning more clearly.']
                    ];
                    foreach($list_items as $item): ?>
                        <li class="list-item">
                            <span class="list-item-title"><?php echo $item['t']; ?></span>
                            <span class="list-item-desc"><?php echo $item['d']; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Right Side Stack -->
        <div class="feature-stack">
            <div class="feature-card small-card">
                <img src="https://i.pinimg.com/1200x/dd/88/98/dd889885af9b1863143576df78825eca.jpg" alt="Storytelling" class="feature-img">
                <div class="feature-content">
                    <h3 class="feature-title">Better visual storytelling</h3>
                    <p class="feature-text">The redesigned homepage uses larger image blocks and cleaner section spacing to make every trust point easier to understand.</p>
                </div>
            </div>

            <div class="feature-card small-card">
                <img src="https://i.pinimg.com/1200x/72/31/3a/72313a6d61e63bfaeefe757ef759f766.jpg" alt="Conversion" class="feature-img">
                <div class="feature-content">
                    <h3 class="feature-title">Simple, focused conversion flow</h3>
                    <p class="feature-text">No popup distractions. The main page keeps attention on counselling, trust signals, and action-driven sections.</p>
                </div>
            </div>
        </div>

    </div>
</section>