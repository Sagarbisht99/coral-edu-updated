<section class="cr-about-wrapper" id="about-ibi">
    <div class="cr-glow-effect"></div>
    <div class="cr-container">
        
        <!-- Header -->
        <div class="cr-header-block">
            <span class="cr-mini-tag">Premium MBA Guidance</span>
            <h2 class="cr-main-heading">Shaping Future Business Leaders Through <span>Expert MBA Counseling</span></h2>
            <p class="cr-sub-heading">
                India's leading MBA admission consultancy, helping aspiring managers secure seats in top B-Schools including IIMs, XLRI, NMIMS, and other premier institutions.
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="cr-metrics-grid">
            <div class="cr-metric-card">
                <div class="cr-icon-box"><i class="fas fa-university"></i></div>
                <div class="cr-metric-txt">
                    <span class="cr-num">150+</span>
                    <span class="cr-lab">Top MBA Colleges</span>
                </div>
            </div>
            <div class="cr-metric-card">
                <div class="cr-icon-box"><i class="fas fa-user-graduate"></i></div>
                <div class="cr-metric-txt">
                    <span class="cr-num">5000+</span>
                    <span class="cr-lab">Aspirants Guided</span>
                </div>
            </div>
            <div class="cr-metric-card">
                <div class="cr-icon-box"><i class="fas fa-award"></i></div>
                <div class="cr-metric-txt">
                    <span class="cr-num">15+</span>
                    <span class="cr-lab">Years Expertise</span>
                </div>
            </div>
            <div class="cr-metric-card cr-featured-metric">
                <div class="cr-icon-box"><i class="fas fa-chart-line"></i></div>
                <div class="cr-metric-txt">
                    <span class="cr-num">98%</span>
                    <span class="cr-lab">Success Rate</span>
                </div>
            </div>
        </div>

        <div class="cr-layout-grid">
            
            <!-- Content Left -->
            <div class="cr-main-content">
                <div class="cr-info-block">
                    <div class="cr-block-title"><i class="fas fa-rocket"></i> MISSION</div>
                    <h3 class="cr-mid-title">Complete MBA Admission Support Ecosystem</h3>
                    <p class="cr-para-text">
                        We provide comprehensive MBA admission guidance for aspiring business leaders targeting India's premier B-Schools. From entrance exam preparation <strong>(CAT, XAT, MAT, CMAT)</strong> to GD/PI training and final admission, our expert team ensures your MBA dream becomes reality.
                    </p>
                    
                    <div class="cr-tag-cloud">
                        <div class="cr-tag"><i class="fas fa-check"></i> Entrance Prep</div>
                        <div class="cr-tag"><i class="fas fa-check"></i> B-School Selection</div>
                        <div class="cr-tag"><i class="fas fa-check"></i> Application Support</div>
                        <div class="cr-tag"><i class="fas fa-check"></i> GD/PI Training</div>
                    </div>
                </div>

                <div class="cr-dual-cards">
                    <div class="cr-small-card">
                        <i class="fas fa-handshake"></i>
                        <h4>B-School Network</h4>
                        <p>Direct connections with premier MBA institutions across India.</p>
                    </div>
                    <div class="cr-small-card">
                        <i class="fas fa-user-shield"></i>
                        <h4>Personalized Help</h4>
                        <p>One-on-one sessions tailored to your career goals.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Right -->
            <div class="cr-side-panel">
                <div class="cr-network-panel">
                    <h3 class="cr-panel-title"><i class="fas fa-globe"></i> Our MBA Network</h3>
                    <ul class="cr-network-list">
                        <li><strong>IIMs & Top Tier:</strong> IIM-A, B, C, XLRI, FMS, IIFT</li>
                        <li><strong>Private B-Schools:</strong> NMIMS, SPJIMR, MDI, IMI, FORE</li>
                        <li><strong>Specialized:</strong> Executive MBA, PGDM Programs</li>
                    </ul>
                </div>

                <div class="cr-expert-widget">
                    <div class="cr-expert-top">
                        <div class="cr-expert-img">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="cr-expert-meta">
                            <h4>Admission Advisors</h4>
                            <span>B-School Alumni Team</span>
                        </div>
                    </div>
                    <p class="cr-widget-p">Our dedicated team works closely with aspirants to ensure strategic college selection.</p>
                    <div class="cr-widget-stats">
                        <div class="cr-w-stat"><strong>75+</strong><span>Counselors</span></div>
                        <div class="cr-w-stat"><strong>2.5K+</strong><span>Admissions</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Scope everything under cr-about-wrapper to avoid global leaks */
    .cr-about-wrapper {
        background-color: #001a35;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
    }

    .cr-glow-effect {
        position: absolute;
        top: -10%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(245, 158, 11, 0.15) 0%, transparent 70%);
        filter: blur(80px);
        pointer-events: none;
    }

    .cr-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; position: relative; z-index: 5; }

    /* Header Styles */
    .cr-header-block { text-align: center; margin-bottom: 60px; }
    .cr-mini-tag { 
        background: #f59e0b; color: #000; padding: 6px 18px; 
        border-radius: 50px; font-weight: 700; font-size: 13px; text-transform: uppercase;
    }
    .cr-main-heading { font-size: 42px; font-weight: 800; margin: 20px 0; line-height: 1.2; }
    .cr-main-heading span { color: #f59e0b; }
    .cr-sub-heading { color: #cbd5e1; max-width: 750px; margin: 0 auto; font-size: 17px; line-height: 1.6; }

    /* Metrics Grid */
    .cr-metrics-grid { 
        display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); 
        gap: 20px; margin-bottom: 80px; 
    }
    .cr-metric-card {
        background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255,255,255,0.1);
        padding: 30px; border-radius: 20px; display: flex; align-items: center; gap: 20px;
        backdrop-filter: blur(10px); transition: 0.3s ease-in-out;
    }
    .cr-metric-card:hover { transform: translateY(-5px); background: rgba(255,255,255,0.08); }
    .cr-icon-box { font-size: 30px; color: #f59e0b; }
    .cr-num { display: block; font-size: 28px; font-weight: 800; }
    .cr-lab { font-size: 14px; color: #cbd5e1; }
    .cr-featured-metric { background: linear-gradient(135deg, rgba(245,158,11,0.2) 0%, transparent 100%); }

    /* Layout Grid */
    .cr-layout-grid { display: grid; grid-template-columns: 1.5fr 1fr; gap: 40px; }

    /* Left Content */
    .cr-block-title { color: #f59e0b; font-weight: 700; font-size: 14px; margin-bottom: 15px; }
    .cr-mid-title { font-size: 30px; margin-bottom: 20px; font-weight: 700; color: #fff; }
    .cr-para-text { color: #cbd5e1; line-height: 1.8; font-size: 16px; margin-bottom: 30px; }
    
    .cr-tag-cloud { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 40px; }
    .cr-tag { 
        background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);
        padding: 8px 16px; border-radius: 50px; font-size: 14px;
    }
    .cr-tag i { color: #f59e0b; margin-right: 8px; }

    .cr-dual-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .cr-small-card { 
        background: rgba(255, 255, 255, 0.05); padding: 25px; border-radius: 15px; 
        border-bottom: 3px solid #f59e0b;
    }
    .cr-small-card i { font-size: 24px; color: #f59e0b; margin-bottom: 15px; display: block; }
    .cr-small-card h4 { margin-bottom: 10px; font-size: 18px; color: #fff; }
    .cr-small-card p { font-size: 13px; color: #cbd5e1; margin: 0; }

    /* Right Side Panel */
    .cr-network-panel { 
        background: #00254a; padding: 30px; border-radius: 20px; margin-bottom: 30px; 
    }
    .cr-panel-title { font-size: 20px; margin-bottom: 20px; color: #f59e0b; font-weight: 700; }
    .cr-network-list { list-style: none; padding: 0; margin: 0; }
    .cr-network-list li { 
        padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.1); 
        font-size: 14px; color: #cbd5e1;
    }
    .cr-network-list li strong { color: #fff; display: block; margin-bottom: 2px; }

    .cr-expert-widget { 
        background: rgba(255, 255, 255, 0.05); padding: 30px; border-radius: 20px; 
        border: 1px solid rgba(255,255,255,0.1);
    }
    .cr-expert-top { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; }
    .cr-expert-img { 
        width: 55px; height: 55px; border-radius: 50%; background: #00254a; 
        display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 24px;
    }
    .cr-expert-meta h4 { margin: 0; font-size: 18px; color: #fff; }
    .cr-expert-meta span { font-size: 13px; color: #f59e0b; }
    .cr-widget-p { font-size: 14px; color: #cbd5e1; line-height: 1.6; }
    
    .cr-widget-stats { display: flex; gap: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; }
    .cr-w-stat strong { display: block; font-size: 20px; color: #f59e0b; }
    .cr-w-stat span { font-size: 12px; color: #cbd5e1; text-transform: uppercase; }

    @media (max-width: 992px) {
        .cr-layout-grid { grid-template-columns: 1fr; }
        .cr-dual-cards { grid-template-columns: 1fr; }
        .cr-main-heading { font-size: 32px; }
    }
</style>