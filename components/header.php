<?php include 'site_identity.php'; ?>

<!-- Header Section -->
<header class="top-header-strip">
    <div class="header-container">
        <div class="header-logo">
            <img src="<?php echo $site_identity['logo']; ?>" alt="<?php echo $site_identity['site_name']; ?>" class="logo-img">
        </div>
        
        <div class="header-right-section">
            <div class="header-contact">
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:<?php echo str_replace([' ', '-', '+'], '', $site_identity['phone']); ?>" class="contact-link"><?php echo $site_identity['phone']; ?></a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo $site_identity['email']; ?>" class="contact-link"><?php echo $site_identity['email']; ?></a>
                </div>
            </div>
            
            <div class="header-social">
                <a href="<?php echo $site_identity['facebook']; ?>" class="social-link" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo $site_identity['instagram']; ?>" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo $site_identity['linkedin']; ?>" class="social-link" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?php echo $site_identity['youtube']; ?>" class="social-link" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        
        <div class="header-mobile-phone">
            <a href="tel:<?php echo str_replace([' ', '-', '+'], '', $site_identity['phone']); ?>" class="mobile-phone-link">
                <i class="fas fa-phone"></i>
                Call Now
            </a>
        </div>
    </div>
</header>

<style>
/* Header Styles */
.top-header-strip {
    background: #ffffff;
    color: #333;
    padding: 15px 0;
    position: relative;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.header-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-logo {
    flex-shrink: 0;
}

.logo-img {
    height: 50px;
    width: auto;
    object-fit: contain;
}

.header-right-section {
    display: flex;
    align-items: center;
    gap: 30px;
}

.header-contact {
    display: flex;
    gap: 25px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.contact-item i {
    color: #ff7a00;
    font-size: 16px;
    width: 20px;
}

.contact-link {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.contact-link:hover {
    color: #ff7a00;
}

.header-social {
    display: flex;
    gap: 15px;
}

.social-link {
    color: #333;
    font-size: 18px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.social-link:hover {
    color: #ff7a00;
    transform: translateY(-2px);
}

.header-mobile-phone {
    display: none;
}

.mobile-phone-link {
    background: #ff7a00;
    color: #fff;
    padding: 8px 16px;
    border-radius: 25px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
}

.mobile-phone-link:hover {
    background: #ff9500;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 122, 0, 0.4);
}

.mobile-phone-link i {
    font-size: 16px;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .header-container {
        padding: 0 15px;
    }
    
    .header-right-section {
        gap: 20px;
    }
    
    .header-contact {
        gap: 20px;
    }
    
    .contact-link {
        font-size: 13px;
    }
    
    .social-link {
        width: 32px;
        height: 32px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .header-container {
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .header-right-section {
        display: none;
    }
    
    .header-mobile-phone {
        display: block;
    }
    
    .mobile-phone-link {
        padding: 6px 12px;
        font-size: 13px;
    }
    
    .mobile-phone-link i {
        font-size: 14px;
    }
    
    .logo-img {
        height: 40px;
    }
}

@media (max-width: 576px) {
    .top-header-strip {
        padding: 12px 0;
    }
    
    .header-container {
        padding: 0 15px;
    }
    
    .mobile-phone-link {
        padding: 5px 10px;
        font-size: 12px;
    }
    
    .mobile-phone-link i {
        font-size: 13px;
    }
    
    .logo-img {
        height: 35px;
    }
}

@media (max-width: 480px) {
    .header-container {
        padding: 0 12px;
    }
    
    .mobile-phone-link {
        padding: 4px 8px;
        font-size: 11px;
    }
    
    .mobile-phone-link i {
        font-size: 12px;
    }
    
    .logo-img {
        height: 30px;
    }
}

@media (max-width: 360px) {
    .mobile-phone-link {
        padding: 3px 6px;
        font-size: 10px;
    }
    
    .mobile-phone-link i {
        font-size: 11px;
    }
    
    .logo-img {
        height: 28px;
    }
}
</style>
