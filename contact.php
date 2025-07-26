<?php
require_once 'includes/template.php';

// Handle contact form submission
$contact_data = include 'includes/contact_handler.php';
$message = $contact_data['message'];
$message_type = $contact_data['message_type'];
$form_data = $contact_data['form_data'];

renderHead('Contact');
renderNavigation();
?>

<!-- Sub-page Header -->
<div class="subpage-header-custom">
    <div class="container">
        <h1>Contact</h1>
        <p>Get in touch for academic collaboration and inquiries</p>
    </div>
</div>

<main class="container">
    <section class="py-5">
        <h2 class="text-center mb-4 section-heading-custom">Contact Information</h2>
        
        <?php if (!empty($message)): ?>
        <div class="alert-custom alert-<?php echo $message_type; ?>-custom">
            <?php echo htmlspecialchars($message); ?>
        </div>
        <?php endif; ?>
        
        <div class="contact-layout-custom">
            <!-- Contact Information Column -->
            <div class="contact-column-custom">
                <h3 class="text-center mb-4">Contact Details</h3>
                <div class="contact-info-custom">
                    <div class="icon-text">
                        <i class="fas fa-user"></i>
                        <span><strong><?php echo htmlspecialchars($site_config['faculty_name']); ?></strong></span>
                    </div>
                    <div class="icon-text">
                        <i class="fas fa-briefcase"></i>
                        <span>Professor, <?php echo htmlspecialchars($site_config['department']); ?></span>
                    </div>
                    <div class="icon-text">
                        <i class="fas fa-university"></i>
                        <span><?php echo htmlspecialchars($site_config['institution']); ?></span>
                    </div>
                    <div class="icon-text">
                        <i class="fas fa-envelope"></i>
                        <span><a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a></span>
                    </div>
                    <div class="icon-text">
                        <i class="fas fa-phone"></i>
                        <span><?php echo htmlspecialchars($site_config['phone']); ?></span>
                    </div>
                    <div class="icon-text">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo htmlspecialchars($site_config['office']); ?></span>
                    </div>
                </div>
                
                <h4 class="text-center mt-4 mb-3">Office Hours</h4>
                <div class="contact-info-custom">
                    <p><strong>Monday - Friday:</strong> 10:00 AM - 5:00 PM</p>
                    <p><strong>Saturday:</strong> 10:00 AM - 1:00 PM</p>
                    <p><strong>Sunday:</strong> Closed</p>
                    <p class="mt-3"><em>Please schedule an appointment for research discussions and academic consultations.</em></p>
                </div>
            </div>

            <!-- Contact Form Column -->
            <div class="contact-column-custom">
                <h3 class="text-center mb-4">Send a Message</h3>
                <form method="POST" action="" class="contact-form-custom" id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="name" name="name" 
                               value="<?php echo htmlspecialchars($form_data['name']); ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               value="<?php echo htmlspecialchars($form_data['email']); ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" 
                               value="<?php echo htmlspecialchars($form_data['subject']); ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required><?php echo htmlspecialchars($form_data['user_message']); ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit w-100">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Google Map Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <h3 class="text-center mb-4">Location</h3>
                <div class="map-container-custom">
                    <!-- Replace with actual Google Maps embed code for your institution -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.8285687651847!2d73.74455631489485!3d18.623518267380076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9a5000000c3%3A0x5d1f2e2e2e2e2e2e!2sPimpri%20Chinchwad%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin" 
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <h3 class="text-center mb-4">Quick Links</h3>
                <div class="row text-center">
                    <div class="col-md-3 mb-3">
                        <a href="academics.php" class="btn btn-outline-primary w-100">
                            <i class="fas fa-graduation-cap me-2"></i>Academics
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="research-profile.php" class="btn btn-outline-primary w-100">
                            <i class="fas fa-flask me-2"></i>Research
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="resources.php" class="btn btn-outline-primary w-100">
                            <i class="fas fa-book me-2"></i>Resources
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="responsibilities.php" class="btn btn-outline-primary w-100">
                            <i class="fas fa-tasks me-2"></i>Responsibilities
                        </a>
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
