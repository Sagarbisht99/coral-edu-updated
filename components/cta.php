<style>
    /* CTA Section Styles */
    .cta-banner {
        background-color: #0a235b; /* Deep Navy Blue */
        padding: 60px 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Inter', -apple-system, sans-serif;
    }

    .cta-container {
        max-width: 1140px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 30px;
    }

    .cta-content {
        text-align: left;
    }

    .cta-title {
        color: #ffffff;
        font-size: 32px;
        font-weight: 800;
        margin: 0 0 10px 0;
        letter-spacing: -0.5px;
    }

    .cta-subtitle {
        color: #d1d5db; /* Light grayish-blue for readability */
        font-size: 16px;
        margin: 0;
        max-width: 700px;
        line-height: 1.5;
    }

    /* Button Styling */
    .cta-button {
        background-color: #ffffff;
        color: #0a235b;
        text-decoration: none;
        padding: 14px 28px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 15px;
        white-space: nowrap;
        transition: background-color 0.2s ease, transform 0.2s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .cta-button:hover {
        background-color: #f3f4f6;
        transform: translateY(-2px);
    }

    /* Responsive adjustments */
    @media (max-width: 850px) {
        .cta-container {
            flex-direction: column;
            text-align: center;
        }
        .cta-content {
            text-align: center;
        }
        .cta-title {
            font-size: 26px;
        }
    }

    @media (max-width: 768px) {
        .cta-banner {
            padding: 50px 20px;
        }
        
        .cta-title {
            font-size: 24px;
            line-height: 1.2;
        }
        
        .cta-subtitle {
            font-size: 15px;
        }
        
        .cta-button {
            padding: 12px 24px;
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .cta-banner {
            padding: 40px 15px;
        }
        
        .cta-title {
            font-size: 22px;
        }
        
        .cta-subtitle {
            font-size: 14px;
        }
        
        .cta-button {
            padding: 12px 20px;
            font-size: 14px;
            width: 100%;
            max-width: 280px;
        }
    }

    @media (max-width: 480px) {
        .cta-banner {
            padding: 35px 15px;
        }
        
        .cta-title {
            font-size: 20px;
        }
        
        .cta-subtitle {
            font-size: 13px;
        }
        
        .cta-button {
            padding: 10px 18px;
            font-size: 13px;
        }
    }
</style>

<section class="cta-banner">
    <div class="cta-container">
        <div class="cta-content">
            <h2 class="cta-title">Apply Now for MBA Admission</h2>
            <p class="cta-subtitle">
                Talk to our team for college shortlisting, eligibility support, application guidance, and faster admission planning.
            </p>
        </div>
        
        <a href="#" class="cta-button">
            Start Application
        </a>
    </div>
</section>