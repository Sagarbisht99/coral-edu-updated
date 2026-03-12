<style>
    .testimonials-section {
        padding: 80px 20px;
        background-color: #fff;
        text-align: center;
        font-family: 'Inter', sans-serif;
    }

    .testimonials-container {
        max-width: 1140px;
        margin: 0 auto;
    }

    /* Header Styling */
    .testimonial-badge {
        background-color: #ffd85d;
        color: #000;
        font-size: 12px;
        font-weight: 700;
        padding: 6px 14px;
        border-radius: 12px;
        display: inline-block;
        margin-bottom: 20px;
    }

    .testimonial-title {
        font-size: 36px;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 15px;
        color: #111;
        letter-spacing: -1px;
    }

    .testimonial-subtitle {
        color: #999;
        font-size: 15px;
        margin-bottom: 60px;
    }

    /* Grid Layout */
    .testimonial-grid {
        display: grid;
        grid-template-columns: 1fr 1.1fr;
        gap: 24px;
        text-align: left;
    }

    /* Main Left Success Story Card */
    .main-success-card {
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .main-success-img {
        width: 100%;
        height: 320px;
        object-fit: cover;
    }

    .main-success-content {
        background-color: #0a235b; /* Deep Navy Blue */
        padding: 40px;
        flex-grow: 1;
    }

    .main-success-quote {
        color: #ffd85d;
        font-size: 24px;
        font-weight: 800;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .main-success-text {
        color: #fff;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 25px;
        opacity: 0.9;
    }

    .main-success-footer {
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        opacity: 0.8;
    }

    /* Right Side List */
    .testimonial-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .mini-testimonial-card {
        display: flex;
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        overflow: hidden;
        height: 140px;
        transition: transform 0.3s ease;
    }

    .mini-testimonial-card:hover {
        transform: translateX(10px);
        border-color: #ddd;
    }

    .mini-thumb {
        width: 130px;
        height: 100%;
        object-fit: cover;
    }

    .mini-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mini-title {
        font-size: 16px;
        font-weight: 800;
        color: #111;
        margin-bottom: 8px;
    }

    .mini-text {
        font-size: 13px;
        color: #888;
        line-height: 1.5;
        margin: 0;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .testimonial-grid { grid-template-columns: 1fr; }
        .mini-testimonial-card { height: auto; }
    }
</style>

<section class="testimonials-section">
    <div class="testimonials-container">
        
        <div class="testimonial-badge">Student testimonials</div>
        
        <h2 class="testimonial-title">
            Reviews and success stories that<br>
            add trust before form submission
        </h2>
        
        <p class="testimonial-subtitle">
            Use testimonials with images to make the page feel more human, real, and conversion friendly.
        </p>

        <div class="testimonial-grid">
            
            <!-- Main Success Story -->
            <div class="main-success-card">
                <img src="https://i.pinimg.com/736x/e5/ae/5c/e5ae5c88a979b3ed6d2ef2b80024a3e4.jpg" alt="Student Success" class="main-success-img">
                <div class="main-success-content">
                    <div class="main-success-quote">"I found the right college without wasting a year."</div>
                    <p class="main-success-text">
                        Coral Education helped me compare colleges by fees, placements, and specialization. The guidance felt honest and practical from the first discussion.
                    </p>
                    <div class="main-success-footer">
                        Ritika Sharma • MBA in Marketing • Placed at 9.5 LPA
                    </div>
                </div>
            </div>

            <!-- Side List -->
            <div class="testimonial-list">
                <?php
                $reviews = [
                    [
                        't' => 'Clear college shortlist',
                        'p' => 'Even with an average entrance score, I got strong college options and a simple roadmap for admission.',
                        'img' => 'https://i.pinimg.com/736x/27/90/03/27900371354079f41e16751f2a320fdb.jpg'
                    ],
                    [
                        't' => 'Placement Cell',
                        'p' => 'it would be great experience if you provide placement cell details in your website.',
                        'img' => 'https://i.pinimg.com/1200x/3a/0c/d8/3a0cd8a35bb1c1d8390cd35987cd4a9e.jpg'
                    ],
                        [
                            't' => 'Scholarship support',
                            'p' => 'The scholarship guidance and counselling support helped me choose a better-fit college faster.',
                            'img' => 'https://i.pinimg.com/736x/0e/88/cf/0e88cffed812021e28a4d7fc11bf32e7.jpg'
                        ],
                        [
                        't' => 'Transparent counselling',
                        'p' => 'The team explained fees, ROI, and specializations clearly, which made my family feel more confident.',
                        'img' => 'https://i.pinimg.com/1200x/78/31/2f/78312f3987a7091d4ef0a4539ce38ec8.jpg'
                    ],

                ];

                foreach($reviews as $rev): ?>
                    <div class="mini-testimonial-card">
                        <img src="<?php echo $rev['img']; ?>" class="mini-thumb" alt="Reviewer">
                        <div class="mini-content">
                            <h4 class="mini-title"><?php echo $rev['t']; ?></h4>
                            <p class="mini-text"><?php echo $rev['p']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>