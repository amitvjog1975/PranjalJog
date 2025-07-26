<?php
require_once 'includes/template.php';
renderHead('Home');
renderNavigation();
?>

<!-- Hero Section -->
<div class="hero-section-custom py-5" id="hero">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-center">
        <div class="hero-image-wrapper-custom mb-4 mb-lg-0 me-lg-5">
            <img src="main.png" alt="<?php echo htmlspecialchars($site_config['faculty_name']); ?>" class="img-fluid">
        </div>
        <div class="hero-text-content-custom text-center text-lg-start">
            <h1 class="display-4 mb-3"><?php echo htmlspecialchars($site_config['faculty_name']); ?></h1>
            <p class="lead mb-2">Professor, <?php echo htmlspecialchars($site_config['department']); ?></p>
            <p class="lead mb-3"><?php echo htmlspecialchars($site_config['institution']); ?></p>
            <p class="punchline">"Inspiring minds through education and research excellence"</p>
        </div>
    </div>
</div>

<main class="container">
    <section id="about" class="py-5 border-bottom">
        <h2 class="text-center mb-4 section-heading-custom">About <?php echo htmlspecialchars($site_config['faculty_name']); ?></h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-center mb-4">
                    Welcome to my academic profile. I am dedicated to advancing knowledge in <?php echo htmlspecialchars($site_config['department']); ?> 
                    through innovative research, quality education, and meaningful contributions to the academic community.
                </p>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h4><i class="fas fa-graduation-cap text-primary me-2"></i>Academic Excellence</h4>
                        <p>Committed to delivering high-quality education and fostering student success through innovative teaching methodologies and research-driven learning.</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h4><i class="fas fa-flask text-primary me-2"></i>Research Innovation</h4>
                        <p>Conducting cutting-edge research that contributes to the advancement of knowledge and addresses real-world challenges in the field.</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h4><i class="fas fa-users text-primary me-2"></i>Student Mentorship</h4>
                        <p>Guiding and supporting students in their academic journey, helping them develop critical thinking skills and achieve their career goals.</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h4><i class="fas fa-handshake text-primary me-2"></i>Industry Collaboration</h4>
                        <p>Building bridges between academia and industry to create practical solutions and enhance student employability.</p>
                    </div>
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
