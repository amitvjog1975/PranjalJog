<?php
require_once 'config.php';

function renderHead($page_title = '', $additional_css = '') {
    global $site_config;
    $title = !empty($page_title) ? $page_title . ' - ' . $site_config['faculty_name'] : $site_config['site_title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Academic profile of <?php echo htmlspecialchars($site_config['faculty_name']); ?>, Professor at <?php echo htmlspecialchars($site_config['institution']); ?>">
    <meta name="keywords" content="faculty, professor, academics, research, <?php echo htmlspecialchars($site_config['department']); ?>, <?php echo htmlspecialchars($site_config['institution']); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($site_config['faculty_name']); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="Academic profile of <?php echo htmlspecialchars($site_config['faculty_name']); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $site_config['base_url'] . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Google Fonts - Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <?php if (!empty($additional_css)): ?>
    <style><?php echo $additional_css; ?></style>
    <?php endif; ?>
</head>
<body>
<?php
}

function renderNavigation() {
    global $navigation, $site_config;
?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <!-- Brand name visible on all screen sizes -->
            <a class="navbar-brand navbar-brand-custom" href="index.php"><?php echo htmlspecialchars($site_config['faculty_name']); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach ($navigation as $nav_item): ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo isCurrentPage($nav_item['page_id']) ? ' active' : ''; ?>" 
                           <?php echo isCurrentPage($nav_item['page_id']) ? 'aria-current="page"' : ''; ?>
                           href="<?php echo htmlspecialchars($nav_item['url']); ?>">
                            <?php echo htmlspecialchars($nav_item['title']); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
}

function renderFooter() {
    global $site_config;
?>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; <?php echo $site_config['current_year']; ?> <?php echo htmlspecialchars($site_config['faculty_name']); ?>. All rights reserved. | Designed for <?php echo htmlspecialchars($site_config['institution']); ?> Faculty Profile</p>
        </div>
    </footer>
<?php
}

function renderGoToTopButton() {
?>
    <!-- Go to Top Button -->
    <button onclick="topFunction()" id="goToTopBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
    </button>
<?php
}

function renderScripts($additional_js = '') {
?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
    
    <?php if (!empty($additional_js)): ?>
    <script><?php echo $additional_js; ?></script>
    <?php endif; ?>
</body>
</html>
<?php
}
?>
