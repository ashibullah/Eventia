<?php
require_once 'assets/php/functions.php';
session_start();
global $_SESSION;


if ($_SERVER['REQUEST_URI'] === '/cepz/') {
    header('Location: /cepz/?home');
    exit;
}

if (isset($_GET['signup'])) {
    showPage('header',['title'=> 'CEPZ - Sign up']);
    showPage('signup');
}
elseif (isset($_GET['login'])) {
    showPage('header',['title'=> 'CEPZ - log in']);
    showPage('login');
}
elseif (isset($_GET[''])) {
    showPage('header', ['title' => 'Home Page']);
    showPage('navbar');
    showPage('footer2');
}
elseif (isset($_GET['home'])) {
    showPage('header', ['title' => 'Home Page']);
    showPage('navbar');
    showPage('home');
    showPage('footer2');
}
elseif (isset($_GET['createpage'])) {
    showPage('header', ['title' => 'Create Page']);
    showPage('navbar');
    showPage('create_page');
    // showPage('footer2');
}
elseif (isset($_GET['createpage_by_admin'])) {
    showPage('header', ['title' => 'Create Page']);
    showPage('createpage_by_admin');

}
elseif (isset($_GET['pages'])) {
    showPage('header', ['title' => 'Pages']);
    showPage('navbar');
    showPage('pages');
    // showPage('footer2');
}
elseif (isset($_GET['search'])) {
    showPage('header', ['title' => 'Search']);
    showPage('navbar');
    showPage('search');
    // showPage('footer2');
}
elseif (isset($_GET['peoples'])) {
    showPage('header', ['title' => 'Peoples']);
    showPage('navbar');
    showPage('peoples');
    // showPage('footer2');
}
elseif (isset($_GET['adminlogin'])) {
    showPage('header', ['title' => 'Admin Login']);
    showPage('adminlogin');

}
elseif (isset($_GET['profile'])) {
    showPage('header', ['title' => 'Personal Profile']);
    showPage('navbar');
    showPage('profile');
    showPage('footer2');

}
elseif (isset($_GET['editprofile'])&& isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) {
    showPage('header', ['title' => 'editprofile']);
    showPage('navbar');
    showPage('edit_profile');
    showPage('footer2');
}

showPage('footer');
?>
