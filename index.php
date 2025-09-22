<?php

require_once 'functions.php';

if (urlIs('/')) {
    require_once 'controller/index.php';
} elseif (urlIs('/about')) {
    require_once 'controller/about.php';
} elseif (urlIs('/contact')) {
    require_once 'controller/contact.php';
}