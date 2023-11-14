<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'views/contact.view.php';
