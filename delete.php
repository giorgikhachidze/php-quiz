<?php
    session_start();
    unset($_SESSION['points']);
    header('Location: /');