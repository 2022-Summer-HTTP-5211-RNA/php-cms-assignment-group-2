<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="projects.php">
        <i class="fa-solid fa-list-check"></i> Manage Projects
    </a>
  </li>
  <li>
    <a href="skills.php">
        <i class="fa-solid fa-screwdriver-wrench"></i> Manage Skills
    </a>
  </li>
  <li>
    <a href="social_media.php">
        <i class="fa-solid fa-hashtag"></i> Manage Social Media
    </a>
  </li>
  <li>
    <a href="users.php">
        <i class="fa-solid fa-users"></i>
        Manage Users
    </a>
  </li>
  <li>
    <a href="content_blocks.php">
        <i class="fa-solid fa-folder-open"></i> Manage Content blocks
    </a>
  </li>
  <li>
    <a href="logout.php">
        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
    </a>
  </li>
</ul>

<?php

include( 'includes/footer.php' );

?>
