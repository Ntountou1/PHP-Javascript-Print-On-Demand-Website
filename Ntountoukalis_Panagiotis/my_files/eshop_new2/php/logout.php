<?php
    session_start();
    session_destroy();
    echo 'You have been logged out. <a href="../html/index.php">Go back</a>';
?>