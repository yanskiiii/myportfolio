<?php
$projects = [
    [
        'title' => 'Project 1',
        'description' => 'A responsive web application built with modern technologies.',
        'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'PHP'],
        'link' => '#'
    ],
    [
        'title' => 'Project 2',
        'description' => 'An e-commerce platform with secure payment integration.',
        'technologies' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap'],
        'link' => '#'
    ],
    [
        'title' => 'Project 3',
        'description' => 'A content management system with user authentication.',
        'technologies' => ['PHP', 'MySQL', 'jQuery', 'CSS3'],
        'link' => '#'
    ]
];

foreach ($projects as $project): ?>
    <div class="project-card">
        <div class="project-info">
            <h3><?php echo $project['title']; ?></h3>
            <p><?php echo $project['description']; ?></p>
            <div class="project-technologies">
                <?php foreach ($project['technologies'] as $tech): ?>
                    <span class="tech-tag"><?php echo $tech; ?></span>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo $project['link']; ?>" class="project-link">View Project</a>
        </div>
    </div>
<?php endforeach; ?> 