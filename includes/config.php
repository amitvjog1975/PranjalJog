<?php
// Site Configuration
$site_config = [
    'site_title' => 'Dr. [Faculty Name] - Professor, PCCOE',
    'faculty_name' => 'Dr. [Faculty Name]',
    'department' => '[Your Department]',
    'institution' => 'PCCOE',
    'email' => 'faculty@pccoe.edu',
    'phone' => '+91-XXXXXXXXXX',
    'office' => 'Room No. XXX, Department Building',
    'base_url' => '',
    'current_year' => date('Y')
];

// Navigation Menu
$navigation = [
    [
        'title' => 'Home',
        'url' => 'index.php',
        'page_id' => 'home'
    ],
    [
        'title' => 'Academics',
        'url' => 'academics.php',
        'page_id' => 'academics'
    ],
    [
        'title' => 'Research Profile',
        'url' => 'research-profile.php',
        'page_id' => 'research'
    ],
    [
        'title' => 'Key Responsibilities',
        'url' => 'responsibilities.php',
        'page_id' => 'responsibilities'
    ],
    [
        'title' => 'Resources for Students',
        'url' => 'resources.php',
        'page_id' => 'resources'
    ],
    [
        'title' => 'Contact',
        'url' => 'contact.php',
        'page_id' => 'contact'
    ]
];

// Helper function to get current page
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

// Helper function to check if current page matches
function isCurrentPage($page_id) {
    $current = getCurrentPage();
    if ($current === 'index' && $page_id === 'home') return true;
    return $current === $page_id;
}
?>
