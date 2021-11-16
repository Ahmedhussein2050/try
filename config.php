<?php
    session_start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang'];
    }
include 'languages/'.$_SESSION['lang'].'.php';

