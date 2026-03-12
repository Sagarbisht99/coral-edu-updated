<?php
/**
 * Final Advanced FAQ Component
 * Theme: Clean & Bold (Yellow/Navy)
 */

$categories = [
    ['id' => 'all', 'label' => 'All Questions', 'icon' => 'grid'],
    ['id' => 'process', 'label' => 'Admission Process', 'icon' => 'person'],
    ['id' => 'eligibility', 'label' => 'Eligibility', 'icon' => 'check'],
    ['id' => 'courses', 'label' => 'Courses & Colleges', 'icon' => 'book'],
    ['id' => 'fees', 'label' => 'Fees & Loans', 'icon' => 'wallet'],
    ['id' => 'support', 'label' => 'Student Support', 'icon' => 'headset'],
    ['id' => 'career', 'label' => 'Career & Placements', 'icon' => 'star'],
];

$faqs = [
    ['cat' => 'process', 'q' => 'What is the Coral admission guidance process?', 'a' => 'Our process includes profile evaluation, college shortlisting, application assistance, and documentation support.'],
    ['cat' => 'process', 'q' => 'How long does the admission process take?', 'a' => 'Typically 2-3 months from profile evaluation to final admission.'],
    ['cat' => 'process', 'q' => 'What documents are required for MBA admission?', 'a' => 'Academic transcripts, CAT/XAT/GMAT scores, work certificates, ID proof and recommendation letters.'],
    ['cat' => 'process', 'q' => 'Can you help with last-minute applications?', 'a' => 'Yes we offer expedited services for last-minute applications, though early preparation is always recommended for better results.'],
    ['cat' => 'process', 'q' => 'How do you track application progress?', 'a' => 'We provide regular updates through a dedicated portal, weekly calls, and instant notifications for any status changes.'],
    ['cat' => 'process', 'q' => 'What is the success rate of your admissions?', 'a' => 'We have a 95% success rate in getting students admitted to their preferred colleges with our expert guidance.'],
    ['cat' => 'process', 'q' => 'Do you assist with GD/PI preparation?', 'a' => 'Yes we conduct mock interviews and GD sessions to help students prepare for selection rounds.'],

    ['cat' => 'eligibility', 'q' => 'Who is eligible to apply through Coral?', 'a' => 'Any student with a recognized bachelor\'s degree can apply.'],
    ['cat' => 'eligibility', 'q' => 'What is the minimum work experience required?', 'a' => 'Top MBA colleges prefer 2-5 years experience but freshers can also apply.'],
    ['cat' => 'eligibility', 'q' => 'Are there age restrictions for MBA admissions?', 'a' => 'Generally no strict age limit, but most MBA programs prefer candidates between 22-35 years for optimal peer learning.'],
    ['cat' => 'eligibility', 'q' => 'Can international students apply through Coral?', 'a' => 'Yes we assist international students with additional requirements like visa documentation, English proficiency tests and equivalence certificates.'],
    ['cat' => 'eligibility', 'q' => 'What if my graduation percentage is low?', 'a' => 'We can help you find colleges that focus more on entrance exam scores, work experience, and overall profile rather than just academics.'],
    ['cat' => 'eligibility', 'q' => 'What are the minimum CAT/XAT scores required?', 'a' => 'Minimum scores vary by college but generally 70-80 percentile for top B-schools, though we can help with lower scores too.'],
    ['cat' => 'eligibility', 'q' => 'Can I apply with distance learning degree?', 'a' => 'Most regular MBA programs require regular degrees, but we can help you find suitable options for distance learning candidates.'],
    ['cat' => 'eligibility', 'q' => 'Do you help with gap year students?', 'a' => 'Yes we assist gap year students by highlighting their strengths and finding colleges that value diverse experiences.'],

    ['cat' => 'courses', 'q' => 'Which courses and colleges do you support?', 'a' => 'HR, Marketing, Finance, Analytics MBA in top institutions.'],
    ['cat' => 'courses', 'q' => 'Which are the top MBA colleges you work with?', 'a' => 'IIMs, XLRI, ISB, FMS, MDI and many top B-schools.'],
    ['cat' => 'courses', 'q' => 'Do you support executive MBA programs?', 'a' => 'Yes we guide working professionals for executive MBA, part-time MBA, and online MBA programs from reputed institutions.'],
    ['cat' => 'courses', 'q' => 'What specializations are in high demand?', 'a' => 'Currently, Business Analytics, Digital Marketing, Supply Chain Management, and FinTech MBA specializations have excellent placement opportunities.'],
    ['cat' => 'courses', 'q' => 'Can you help compare different MBA programs?', 'a' => 'Absolutely! We provide detailed comparisons based on curriculum, faculty, placements, fees, and ROI to help you make informed decisions.'],
    ['cat' => 'courses', 'q' => 'What is the difference between MBA and PGDM?', 'a' => 'MBA is a degree program offered by universities, while PGDM is a diploma program offered by autonomous institutes. Both have similar value in the industry.'],
    ['cat' => 'courses', 'q' => 'Do you support Ph.D. programs?', 'a' => 'Yes we can guide you for Ph.D. and research programs in management fields from top institutions.'],
    ['cat' => 'courses', 'q' => 'What about dual specialization MBA programs?', 'a' => 'We help students select and apply for dual specialization programs that enhance career prospects in multiple domains.'],

    ['cat' => 'fees', 'q' => 'Do you help with scholarships or loans?', 'a' => 'Yes we assist with scholarships and loan documentation.'],
    ['cat' => 'fees', 'q' => 'What is average MBA program cost?', 'a' => '₹10-40 lakh depending on college.'],
    ['cat' => 'fees', 'q' => 'Which banks offer education loans for MBA?', 'a' => 'SBI, HDFC, ICICI, Axis Bank, and many NBFCs offer education loans with competitive interest rates and flexible repayment options.'],
    ['cat' => 'fees', 'q' => 'Are there merit-based scholarships available?', 'a' => 'Yes, most colleges offer merit scholarships based on entrance exam scores, academic performance, and diversity factors.'],
    ['cat' => 'fees', 'q' => 'Can you help with education loan documentation?', 'a' => 'We provide complete assistance with loan applications, including collateral requirements, guarantor details, and repayment planning.'],
    ['cat' => 'fees', 'q' => 'What is the ROI of an MBA degree?', 'a' => 'Average ROI for MBA from top colleges is 3-4x, with graduates recovering their investment within 2-3 years through higher salaries.'],
    ['cat' => 'fees', 'q' => 'Are there any hidden costs in MBA programs?', 'a' => 'We help you understand all costs including tuition, accommodation, living expenses, and other fees to make informed decisions.'],
    ['cat' => 'fees', 'q' => 'Can you help with fee negotiation?', 'a' => 'While fees are generally fixed, we can help you find colleges with better fee structures and scholarship opportunities.'],

    ['cat' => 'support', 'q' => 'Do you provide GD/PI preparation?', 'a' => 'Yes we conduct mock interviews and GD sessions.'],
    ['cat' => 'support', 'q' => 'What kind of support do you provide after admission?', 'a' => 'We offer hostel assistance, loan processing help, pre-MBA preparation, and networking opportunities with alumni.'],
    ['cat' => 'support', 'q' => 'Is there support for hostel accommodation?', 'a' => 'We help with hostel applications, off-campus housing options, and connect you with current students for accommodation guidance.'],
    ['cat' => 'support', 'q' => 'Can you help with internship placements?', 'a' => 'We provide internship guidance, resume building, and connect you with our corporate network for summer internship opportunities.'],
    ['cat' => 'support', 'q' => 'What if I face issues during the course?', 'a' => 'We provide continuous mentorship throughout your MBA journey, including academic guidance and career counseling.'],
    ['cat' => 'support', 'q' => 'Do you offer career counseling after MBA?', 'a' => 'Yes we provide career guidance, job search assistance, and connect you with our alumni network for better opportunities.'],
    ['cat' => 'support', 'q' => 'Can you help with study materials and preparation?', 'a' => 'We provide access to study materials, mock tests, and preparation resources for entrance exams and interviews.'],
    ['cat' => 'support', 'q' => 'Do you organize workshops and seminars?', 'a' => 'Yes we organize regular workshops on career development, soft skills, and industry trends for our students.'],

    ['cat' => 'career', 'q' => 'What are the average MBA placement packages?', 'a' => 'Top colleges average ₹20-30 LPA with higher packages possible.'],
    ['cat' => 'career', 'q' => 'Which companies recruit from MBA colleges?', 'a' => 'Top recruiters include McKinsey, BCG, Bain, Amazon, Google, Microsoft, HUL, P&G, and leading investment banks and consulting firms.'],
    ['cat' => 'career', 'q' => 'Do you help with career planning after MBA?', 'a' => 'Yes we provide career counseling, industry insights, and help you choose the right specialization based on your career goals.'],
    ['cat' => 'career', 'q' => 'What is the typical MBA placement process?', 'a' => 'It includes summer internships, lateral placements for experienced candidates, and final placements with multiple companies visiting campus.'],
    ['cat' => 'career', 'q' => 'Can you help with international job placements?', 'a' => 'We guide you on global opportunities, visa requirements, and connect with our international alumni network for overseas placements.'],
    ['cat' => 'career', 'q' => 'What is the average salary after 5 years of MBA?', 'a' => 'MBA graduates typically see 2-3x salary growth within 5 years, with many reaching senior management positions.'],
    ['cat' => 'career', 'q' => 'Do you provide alumni network access?', 'a' => 'Yes we connect you with our extensive alumni network working in top companies across various industries globally.'],
    ['cat' => 'career', 'q' => 'Can you help with entrepreneurship after MBA?', 'a' => 'We provide guidance for MBA graduates interested in startups, including business plan development and funding opportunities.'],
    ['cat' => 'career', 'q' => 'What are the emerging career trends for MBA graduates?', 'a' => 'Current trends include Digital Transformation, E-commerce, FinTech, Healthcare Management, and Sustainable Business roles.'],
];

?>

<style>
/* 1. Overall Layout */
.faq-advanced-section {
    padding: 60px 20px;
    background: #ffffff;
    font-family: 'Inter', sans-serif;
    color: #0a235b;
}

.faq-header {
    text-align: center;
    margin-bottom: 40px;
}

.faq-badge {
    background: #ffda58;
    padding: 6px 15px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.faq-main-title {
    font-size: 32px;
    font-weight: 800;
    margin-top: 15px;
}

/* 2. Grid System */
.faq-layout {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 280px 1fr; /* Sidebar Fixed width, Main flexible */
    gap: 40px;
}

/* 3. Sidebar Styling */
.faq-sidebar {
    background: #f8faff;
    padding: 25px;
    border-radius: 20px;
    height: fit-content;
    border: 1px solid #eef2ff;
}

.sidebar-label {
    font-size: 12px;
    font-weight: 700;
    color: #6c757d;
    display: block;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.cat-btn {
    width: 100%;
    text-align: left;
    padding: 12px 15px;
    margin-bottom: 8px;
    border: none;
    border-radius: 12px;
    background: #fff;
    font-weight: 600;
    color: #0a235b;
    cursor: pointer;
    transition: 0.3s;
    border: 1px solid transparent;
}

.cat-btn:hover {
    background: #fff9e6;
    border-color: #ffda58;
}

.cat-btn.active {
    background: #0a235b;
    color: #fff;
    box-shadow: 0 4px 12px rgba(10, 35, 91, 0.2);
}

/* 4. Search Bar */
.faq-search-wrapper {
    display: flex;
    gap: 10px;
    margin-bottom: 25px;
}

.faq-input {
    flex: 1;
    padding: 15px 20px;
    border-radius: 12px;
    border: 2px solid #f0f0f0;
    font-size: 15px;
    transition: 0.3s;
}

.faq-input:focus {
    border-color: #ffda58;
    outline: none;
}

.find-btn {
    background: #ff7a00;
    color: white;
    border: none;
    padding: 0 30px;
    border-radius: 12px;
    font-weight: 700;
    cursor: pointer;
}

/* 5. FAQ Items */
.faq-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
    max-height: 600px; /* Limited height */
    overflow-y: auto; /* Scroll when content exceeds height */
    padding-right: 15px; /* Space for scrollbar */
}

.faq-list::-webkit-scrollbar {
    width: 6px;
}

.faq-list::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.faq-list::-webkit-scrollbar-thumb {
    background: #ffda58;
    border-radius: 10px;
}

.faq-list::-webkit-scrollbar-thumb:hover {
    background: #ff7a00;
}

.faq-item {
    border: 1px solid #f0f0f0;
    border-radius: 15px;
    padding: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.faq-item:hover {
    border-color: #ffda58;
}

.faq-question {
    font-size: 17px;
    font-weight: 700;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cat-tag {
    font-size: 10px;
    background: #eef2ff;
    color: #0a235b;
    padding: 4px 10px;
    border-radius: 5px;
    text-transform: uppercase;
}

.faq-answer {
    margin-top: 15px;
    color: #555;
    line-height: 1.6;
    display: none; /* Hidden by default */
}

.faq-item.active {
    border-color: #ffda58;
    background: #fffdf7;
}

.faq-item.active .faq-answer {
    display: block;
}

/* 6. Responsive */
@media (max-width: 900px) {
    .faq-layout {
        grid-template-columns: 1fr;
    }
    .faq-sidebar {
        display: flex;
        overflow-x: auto;
        gap: 10px;
        padding: 15px;
    }
    .cat-btn {
        white-space: nowrap;
        width: auto;
    }
}
</style>

<section class="faq-advanced-section">
    <div class="faq-header">
        <span class="faq-badge">Help Center</span>
        <h2 class="faq-main-title">Common MBA questions answered</h2>
    </div>

    <div class="faq-layout">
        <aside class="faq-sidebar">
            <span class="sidebar-label">Categories</span>
            <?php foreach($categories as $cat): ?>
                <button class="cat-btn <?php echo $cat['id']=='all'?'active':''; ?>" data-filter="<?php echo $cat['id']; ?>">
                    <?php echo $cat['label']; ?>
                </button>
            <?php endforeach; ?>
        </aside>

        <div class="faq-main">
            <div class="faq-search-wrapper">
                <input type="text" id="faqSearch" class="faq-input" placeholder="Search topics (e.g. Fees)...">
                <button class="find-btn">Find</button>
            </div>

            <div class="faq-list" id="faqContainer">
                <?php foreach($faqs as $faq): ?>
                    <div class="faq-item" data-category="<?php echo $faq['cat']; ?>">
                        <div class="faq-question">
                            <?php echo $faq['q']; ?>
                            <span class="cat-tag"><?php echo $faq['cat']; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $faq['a']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div id="noResults" style="display:none; text-align:center; padding:20px;">No results found.</div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const categoryButtons = document.querySelectorAll('.cat-btn');
    const faqItems = document.querySelectorAll('.faq-item');
    const searchInput = document.getElementById('faqSearch');

    // 1. Filter Category
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            faqItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 2. Accordion Toggle
    faqItems.forEach(item => {
        item.addEventListener('click', function() {
            const isActive = this.classList.contains('active');
            
            // Close others
            faqItems.forEach(i => i.classList.remove('active'));
            
            // Toggle current
            if(!isActive) this.classList.add('active');
        });
    });

    // 3. Search logic
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        faqItems.forEach(item => {
            const text = item.innerText.toLowerCase();
            item.style.display = text.includes(query) ? 'block' : 'none';
        });
    });
});
</script>