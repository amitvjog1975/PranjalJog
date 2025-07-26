<?php
require_once 'includes/template.php';
renderHead('Research Profile');
renderNavigation();
?>
<main class="container">
    <section id="research" class="py-5">
        <h2 class="text-center mb-4 section-heading-custom">Research Portfolio</h2>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="list-section">
                    <h3 class="mb-3">Research Papers Published</h3>
                    <ul>
                        <li>
                            <div class="research-paper-item">
                                <span class="title">"[Paper Title 1]"</span>
                                <span class="details">[Author Names], [Journal Name], Vol. [X], Issue [Y], pp. [page range], [Year]. [DOI/Impact Factor if applicable]</span>
                            </div>
                        </li>
                        <li>
                            <div class="research-paper-item">
                                <span class="title">"[Paper Title 2]"</span>
                                <span class="details">[Author Names], [Conference Name], [Location], [Year]. [Publisher/Proceedings details]</span>
                            </div>
                        </li>
                        <li>
                            <div class="research-paper-item">
                                <span class="title">"[Paper Title 3]"</span>
                                <span class="details">[Author Names], [Journal/Conference Name], [Year]. [Additional details]</span>
                            </div>
                        </li>
                        <li>[Add more publications as applicable]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Research Areas</h3>
                    <ul>
                        <li><strong>[Research Area 1]:</strong> [Brief description of research focus and contributions]</li>
                        <li><strong>[Research Area 2]:</strong> [Brief description of ongoing work and interests]</li>
                        <li><strong>[Research Area 3]:</strong> [Brief description of future research directions]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Seminars, Webinars & Conferences Attended/Presented</h3>
                    <ul>
                        <li><strong>Presented at [Conference Name]:</strong> [Location], [Year] - Paper: "[Paper Title]"</li>
                        <li><strong>Attended [Workshop/Seminar Name]:</strong> [Institution/Organization], [Year] - [Topic/Focus]</li>
                        <li><strong>Keynote Speaker at [Event Name]:</strong> [Location], [Year] - Topic: "[Presentation Title]"</li>
                        <li><strong>Webinar on [Topic]:</strong> [Platform/Organization], [Year] - [Role: Presenter/Participant]</li>
                        <li>[Add more conference/seminar details]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Research Projects</h3>
                    <ul>
                        <li><strong>[Project Title 1]:</strong> [Funding Agency], [Duration] - [Project Value] - Role: [Principal Investigator/Co-Investigator]</li>
                        <li><strong>[Project Title 2]:</strong> [Funding Agency/Industry Partner], [Duration] - [Brief description of project outcomes]</li>
                        <li><strong>[Project Title 3]:</strong> [Details of ongoing or completed projects]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Patents & Intellectual Property</h3>
                    <ul>
                        <li><strong>Patent:</strong> "[Patent Title]" - [Patent Number], [Year] - [Status: Filed/Granted]</li>
                        <li><strong>Copyright:</strong> "[Work Title]" - [Registration Number], [Year]</li>
                        <li>[Add other IP details if applicable]</li>
                    </ul>

                    <h3 class="mt-5 mb-3">Editorial & Review Activities</h3>
                    <ul>
                        <li><strong>Reviewer for [Journal Name]:</strong> [Year onwards] - [Field of expertise]</li>
                        <li><strong>Editorial Board Member:</strong> [Journal/Conference Name], [Duration]</li>
                        <li><strong>Conference Program Committee:</strong> [Conference Name], [Year] - [Role]</li>
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
