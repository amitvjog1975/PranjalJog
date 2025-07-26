<?php
require_once 'includes/template.php';
renderHead('Academics');
renderNavigation();
?>
<main class="container">
    <section id="academics" class="py-5">
        <h2 class="text-center mb-4 section-heading-custom">Educational Background</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="list-section">
                    <h3 class="mb-3">Degrees & Qualifications</h3>
                    <ul>
                        <li><strong>Ph.D. in [Subject/Field]:</strong> [University Name], [Year] - Thesis: "[Thesis Title]"</li>
                        <li><strong>M.Tech/M.E. in [Subject/Field]:</strong> [University Name], [Year] - Specialization: [Specialization Area]</li>
                        <li><strong>B.Tech/B.E. in [Subject/Field]:</strong> [University Name], [Year] - First Class with Distinction</li>
                        <li>[Add other relevant academic qualifications]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Certifications & Professional Development</h3>
                    <ul>
                        <li><strong>[Certification Name]:</strong> [Issuing Organization], [Year] - [Brief description if relevant]</li>
                        <li><strong>[Professional Course/Workshop]:</strong> [Institution], [Year] - [Duration/Credits]</li>
                        <li><strong>[Industry Certification]:</strong> [Organization], [Year] - [Specialization]</li>
                        <li>[Add more certifications as applicable]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Professional Memberships</h3>
                    <ul>
                        <li><strong>Member, [Professional Society/Organization]:</strong> [Year onwards] - [Brief description of involvement]</li>
                        <li><strong>Life Member, [Professional Body]:</strong> [Year onwards] - [Any specific roles or contributions]</li>
                        <li><strong>[Other Memberships]:</strong> [Details]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Teaching Experience</h3>
                    <ul>
                        <li><strong>Professor, <?php echo htmlspecialchars($site_config['department']); ?>:</strong> <?php echo htmlspecialchars($site_config['institution']); ?>, [Year] onwards</li>
                        <li><strong>[Previous Position]:</strong> [Institution], [Duration] - [Key responsibilities]</li>
                        <li><strong>[Earlier Position]:</strong> [Institution], [Duration] - [Key contributions]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Subjects Taught</h3>
                    <ul>
                        <li><strong>Undergraduate Courses:</strong> [List of UG subjects taught]</li>
                        <li><strong>Postgraduate Courses:</strong> [List of PG subjects taught]</li>
                        <li><strong>Research Supervision:</strong> [PhD/M.Tech thesis supervision details]</li>
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
