<?php
require_once 'includes/template.php';
renderHead('Key Responsibilities');
renderNavigation();
?>

<main class="container">
    <section id="responsibilities" class="py-5">
        <h2 class="text-center mb-4 section-heading-custom">Roles & Contributions</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="list-section">
                    <h3 class="mb-3">Administrative Responsibilities</h3>
                    <ul>
                        <li><strong>Professor, <?php echo htmlspecialchars($site_config['department']); ?>:</strong> Teaching undergraduate and postgraduate courses, curriculum development, student mentoring.</li>
                        <li><strong>[Specific Role 1, e.g., Head of Department/Program Coordinator]:</strong> [Brief description of responsibilities].</li>
                        <li><strong>[Specific Role 2, e.g., Member, Academic Council]:</strong> [Brief description of responsibilities].</li>
                        <li><strong>Faculty Advisor, [Student Club/Body Name]:</strong> Guiding and supervising student activities and projects.</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Research & Laboratory Management</h3>
                    <ul>
                        <li><strong>Research Lab In-charge, [Lab Name]:</strong> Overseeing operations and research activities in the [Lab Name] lab.</li>
                        <li><strong>PhD Supervisor:</strong> Currently supervising [X] PhD scholars in [research areas].</li>
                        <li><strong>Project Coordinator:</strong> Managing funded research projects worth [amount/details].</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Student Mentorship & Guidance</h3>
                    <ul>
                        <li><strong>Mentor for [Program Name]:</strong> Providing guidance to students for [specific program/competition].</li>
                        <li><strong>Career Counselor:</strong> Advising students on career paths and higher education opportunities.</li>
                        <li><strong>Industry Placement Coordinator:</strong> Facilitating student placements and industry interactions.</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Committee Memberships</h3>
                    <ul>
                        <li><strong>Member, Board of Studies:</strong> Contributing to curriculum design and academic policy decisions.</li>
                        <li><strong>Member, Recruitment Committee:</strong> Participating in faculty selection and evaluation processes.</li>
                        <li><strong>Member, [Specific Committee]:</strong> [Brief description of role and contributions].</li>
                    </ul>

                    <h3 class="mt-5 mb-3">External Activities</h3>
                    <ul>
                        <li><strong>External Examiner:</strong> [University Names] - Evaluating academic programs and student assessments.</li>
                        <li><strong>Consultant:</strong> [Industry/Organization] - Providing technical expertise and guidance.</li>
                        <li><strong>Professional Society Roles:</strong> [Positions held in professional organizations].</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Achievements & Recognition</h3>
                    <ul>
                        <li><strong>[Award/Recognition Name]:</strong> [Awarding Body], [Year] - [Brief description].</li>
                        <li><strong>Best Teacher Award:</strong> [Institution], [Year] - Recognized for excellence in teaching.</li>
                        <li><strong>[Other Recognition]:</strong> [Details and significance].</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
renderFooter();
renderGoToTopButton();
renderScripts();
?>
