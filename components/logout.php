<?php
    session_start();
    require '../_database/database.php';
    session_destroy();
    header('location: ../index.php?logout=success');
?>