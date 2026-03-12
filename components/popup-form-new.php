<!-- Premium Global Popup Form Component -->
<div id="globalPopupModal"
    style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); z-index:10000; align-items:center; justify-content:center; backdrop-filter:blur(5px);">
    <div
        style="position:relative; background:linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); border-radius:24px; padding:0; width:90%; max-width:520px; box-shadow:0 30px 60px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,122,0,0.1); overflow:hidden;">

        <!-- Premium Header -->
        <div
            style="background:linear-gradient(135deg, #ff7a00 0%, #ff9500 100%); padding:30px 40px 20px; text-align:center; position:relative;">
            <div onclick="closeGlobalPopup()"
                style="position:absolute; top:15px; right:15px; width:40px; height:40px; background:rgba(255,255,255,0.2); border:1px solid rgba(255,255,255,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer; color:#fff; font-size:18px; transition:all 0.3s ease;">
                ✕
            </div>
            <div
                style="color:#fff; font-size:14px; font-weight:600; text-transform:uppercase; letter-spacing:1px; margin-bottom:8px; opacity:0.9;">
                Premium Consultation</div>
            <h3 style="color:#fff; font-size:28px; font-weight:800; margin:0; line-height:1.2;">Start Your MBA Journey
            </h3>
            <p style="color:rgba(255,255,255,0.9); font-size:14px; margin:8px 0 0;">Get expert guidance from top MBA
                counsellors</p>
        </div>

        <form style="padding:40px; width:100%;" action="submit.php" method="POST">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:25px;">
                <!-- Left Side Fields -->
                <div>
                    <input type="text" name="fullname" placeholder="Full Name" required
                        style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e9ecef; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box;">
                    <div style="margin-top:25px;">
                        <input type="email" name="email" placeholder="Email" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e9ecef; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box;">
                    </div>
                    <div style="margin-top:25px;">
                        <input type="tel" name="mobile" placeholder="Mobile" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e9ecef; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box;">
                    </div>
                </div>

                <!-- Right Side Fields -->
                <div>
                    <input type="text" name="city" placeholder="City"
                        style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e9ecef; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; transition:all 0.3s ease; box-sizing:border-box;">
                    <div style="margin-top:25px;">
                        <select name="program" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e9ecef; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; cursor:pointer; transition:all 0.3s ease; box-sizing:border-box;">
                            <option value="">Select Program</option>
                            <option value="mba">MBA</option>
                            <option value="pgdm">PGDM</option>
                        </select>
                    </div>
                    <div style="margin-top:25px;">
                        <select name="specialization" required
                            style="width:100%; padding:16px 18px; background:#fff; border:2px solid #e9ecef; border-radius:12px; color:#333; font-size:15px; font-weight:500; outline:none; cursor:pointer; transition:all 0.3s ease; box-sizing:border-box;">
                            <option value="">Select Specialization</option>
                            <option value="marketing">MBA in Marketing</option>
                            <option value="finance">MBA in Finance</option>
                            <option value="hr">MBA in Human Resources</option>
                            <option value="operations">MBA in Operations</option>
                            <option value="business-analytics">MBA in Business Analytics</option>
                            <option value="international-business">MBA in International Business</option>
                            <option value="supply-chain">MBA in Supply Chain Management</option>
                            <option value="entrepreneurship">MBA in Entrepreneurship</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Premium Submit Button -->
            <button type="submit"
                style="width:100%; padding:18px; background:linear-gradient(135deg, #ff7a00 0%, #ff9500 100%); border:none; border-radius:14px; color:#fff; font-size:16px; font-weight:700; cursor:pointer; margin-top:10px; transition:all 0.3s ease; text-transform:uppercase; letter-spacing:1px; box-shadow:0 8px 20px rgba(255,122,0,0.3); position:relative; overflow:hidden;">
                <span style="position:relative; z-index:1;">Request Call Back</span>
            </button>

            <!-- Trust Badge -->
            <div style="text-align:center; margin-top:20px; padding-top:20px; border-top:1px solid #e9ecef;">
                <div
                    style="display:flex; align-items:center; justify-content:center; gap:8px; color:#6c757d; font-size:12px;">
                    <i class="fas fa-lock" style="color:#28a745;"></i>
                    <span>Your information is 100% secure & confidential</span>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    /* Premium Popup Styles */
    #globalPopupModal input:focus,
    #globalPopupModal select:focus {
        border-color: #ff7a00 !important;
        box-shadow: 0 0 0 4px rgba(255, 122, 0, 0.1) !important;
        transform: translateY(-1px) !important;
    }

    #globalPopupModal input::placeholder,
    #globalPopupModal select::placeholder {
        color: #6c757d !important;
    }

    #globalPopupModal button:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 12px 25px rgba(255, 122, 0, 0.4) !important;
    }

    #globalPopupModal button:active {
        transform: translateY(0) !important;
    }

    #globalPopupModal .close-btn:hover {
        background: rgba(255, 255, 255, 0.3) !important;
        transform: rotate(90deg) !important;
    }

    /* Mobile Responsive */
    @media (max-width: 600px) {
        #globalPopupModal>div {
            width: 95% !important;
            max-width: none !important;
            margin: 20px !important;
        }

        #globalPopupModal form {
            padding: 30px 25px !important;
        }

        #globalPopupModal form>div {
            grid-template-columns: 1fr !important;
            gap: 15px !important;
        }

        #globalPopupModal form>div>div>div {
            margin-top: 15px !important;
        }

        #globalPopupModal .popup-header h3 {
            font-size: 24px !important;
        }
    }
</style>

<script>
    function openGlobalPopup() {
        document.getElementById('globalPopupModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';

        // Hide whatsapp float if exists
        const whatsappFloat = document.querySelector('.whatsapp-float');
        if (whatsappFloat) {
            whatsappFloat.style.display = 'none';
        }
    }

    function closeGlobalPopup() {
        document.getElementById('globalPopupModal').style.display = 'none';
        document.body.style.overflow = 'auto';

        // Show whatsapp float if exists
        const whatsappFloat = document.querySelector('.whatsapp-float');
        if (whatsappFloat) {
            whatsappFloat.style.display = 'block';
        }
    }

    // Close popup on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeGlobalPopup();
        }
    });

    // Close popup when clicking outside
    document.getElementById('globalPopupModal').addEventListener('click', function (e) {
        if (e.target === this) {
            closeGlobalPopup();
        }
    });

    // Form submission with enhanced feedback
    document.querySelector('#globalPopupModal form').addEventListener('submit', function (e) {
        e.preventDefault();

        // Show success message
        const form = this;
        const button = form.querySelector('button[type="submit"]');
        const originalText = button.innerHTML;

        button.innerHTML = '<i class="fas fa-check"></i> Request Submitted Successfully!';
        button.style.background = 'linear-gradient(135deg, #28a745 0%, #20c997 100%)';

        setTimeout(() => {
            alert('Thank you for your interest! Our premium MBA counsellor will contact you within 24 hours.');
            closeGlobalPopup();
            form.reset();
            button.innerHTML = originalText;
            button.style.background = '';
        }, 1500);
    });

    // Make all buttons open popup when clicked
    document.addEventListener('DOMContentLoaded', function () {
        // Get all buttons on the page
        const allButtons = document.querySelectorAll('button, .cta-orange, .cta-white, .form-submit-btn, [onclick*="openGlobalPopup"]');

        allButtons.forEach(button => {
            // Skip buttons that already have onclick handlers or are form submit buttons
            if (!button.onclick && !button.hasAttribute('data-skip-popup') && button.type !== 'submit') {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    openGlobalPopup();
                });
            }
        });

        // Also handle buttons with specific classes
        const specificButtons = document.querySelectorAll('.apply-btn, .enroll-btn, .register-btn, .cta-button');
        specificButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                openGlobalPopup();
            });
        });

        // Auto open popup after 6 seconds
        setTimeout(function () {
            openGlobalPopup();
        }, 8000); // 6 seconds
    });
</script>