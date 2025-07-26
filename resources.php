<?php
require_once 'includes/template.php';
renderHead('Resources for Students');
renderNavigation();
?>
<main class="container">
    <section id="resources" class="py-5">
        <h2 class="text-center mb-4 section-heading-custom">Learning Resources</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 class="mb-3">Course Materials</h3>
                <div class="videos-notes">
                    <div class="media-grid-custom">
                        <!-- Sample resource items - Replace with actual content -->
                        <div class="media-item-custom">
                            <img src="https://via.placeholder.com/300x180?text=Lecture+Notes" alt="Lecture Notes">
                            <h3>Lecture Notes - [Subject Name]</h3>
                            <p>Comprehensive notes covering all major topics and concepts.</p>
                            <a href="#" class="btn">Download PDF</a>
                        </div>
                        
                        <div class="media-item-custom">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Educational Video" allowfullscreen></iframe>
                            <h3>Video Lecture - [Topic Name]</h3>
                            <p>Detailed explanation of core concepts with practical examples.</p>
                            <a href="#" class="btn">Watch Full Video</a>
                        </div>
                        
                        <div class="media-item-custom">
                            <img src="https://via.placeholder.com/300x180?text=Lab+Manual" alt="Lab Manual">
                            <h3>Laboratory Manual</h3>
                            <p>Step-by-step guide for practical experiments and projects.</p>
                            <a href="#" class="btn">Download Manual</a>
                        </div>
                        
                        <div class="media-item-custom">
                            <img src="https://via.placeholder.com/300x180?text=Reference+Books" alt="Reference Books">
                            <h3>Recommended Reading</h3>
                            <p>List of textbooks and reference materials for further study.</p>
                            <a href="#" class="btn">View List</a>
                        </div>
                        
                        <div class="media-item-custom">
                            <img src="https://via.placeholder.com/300x180?text=Assignment" alt="Assignments">
                            <h3>Assignments & Projects</h3>
                            <p>Practice problems and project guidelines for hands-on learning.</p>
                            <a href="#" class="btn">Download</a>
                        </div>
                        
                        <div class="media-item-custom">
                            <img src="https://via.placeholder.com/300x180?text=Question+Papers" alt="Question Papers">
                            <h3>Previous Year Papers</h3>
                            <p>Sample question papers and examination patterns.</p>
                            <a href="#" class="btn">Access Papers</a>
                        </div>
                    </div>
                </div>

                <h3 class="mt-5 mb-3">Online Resources</h3>
                <div class="list-section">
                    <ul>
                        <li><strong>Course Website:</strong> <a href="#" target="_blank">[Course Platform URL]</a> - Access to all course materials and announcements.</li>
                        <li><strong>Online Lectures:</strong> <a href="#" target="_blank">[YouTube Channel/Platform]</a> - Video lectures and tutorials.</li>
                        <li><strong>Discussion Forum:</strong> <a href="#" target="_blank">[Forum URL]</a> - Student discussions and Q&A sessions.</li>
                        <li><strong>Resource Library:</strong> <a href="#" target="_blank">[Digital Library]</a> - Access to e-books and research papers.</li>
                    </ul>
                </div>

                <h3 class="mt-5 mb-3">Software & Tools</h3>
                <div class="list-section">
                    <ul>
                        <li><strong>[Software Name 1]:</strong> [Brief description and download/access information]</li>
                        <li><strong>[Software Name 2]:</strong> [Brief description and usage guidelines]</li>
                        <li><strong>[Tool/Platform Name]:</strong> [Brief description and access details]</li>
                        <li><strong>Programming Environments:</strong> [List of recommended IDEs and development tools]</li>
                    </ul>
                </div>

                <h3 class="mt-5 mb-3">Study Guidelines</h3>
                <div class="list-section">
                    <ul>
                        <li><strong>Exam Preparation:</strong> Tips and strategies for effective exam preparation and time management.</li>
                        <li><strong>Project Guidelines:</strong> Best practices for project planning, execution, and documentation.</li>
                        <li><strong>Research Methodology:</strong> Guidelines for conducting research and writing technical papers.</li>
                        <li><strong>Industry Readiness:</strong> Skills and knowledge areas important for career development.</li>
                    </ul>
                </div>

                <h3 class="mt-5 mb-3">Contact for Academic Support</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-custom">
                            <div class="icon-text">
                                <i class="fas fa-clock"></i>
                                <span><strong>Office Hours:</strong> [Days and Time]</span>
                            </div>
                            <div class="icon-text">
                                <i class="fas fa-map-marker-alt"></i>
                                <span><strong>Location:</strong> <?php echo htmlspecialchars($site_config['office']); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-custom">
                            <div class="icon-text">
                                <i class="fas fa-envelope"></i>
                                <span><strong>Email:</strong> <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a></span>
                            </div>
                            <div class="icon-text">
                                <i class="fas fa-phone"></i>
                                <span><strong>Phone:</strong> <?php echo htmlspecialchars($site_config['phone']); ?></span>
                            </div>
                        </div>
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
