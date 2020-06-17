<?php

// Get config file
require_once('config.php');

// Output page title
function page_title() {
    global $pageTitle;

    echo $pageTitle;
}

//Output home URL
function home_url() {

    echo BASE_URL;
}