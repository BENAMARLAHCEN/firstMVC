<?php
session_start();
require 'autoLoad.php';
if (!isset($_SESSION['id'])) {
    if (isset($_GET["action"]) && $_GET["action"] === 'signup') {
        UsersControler::signupForm();
    } else {
        UsersControler::loginform();
    }
    if (isset($_POST['submit']) && $_POST['submit'] == 'login') {
        UsersControler::login();
    }
    if (isset($_POST['submit']) && $_POST['submit'] == 'signup') {
        UsersControler::signup();
    }
} else 
    if ($_SESSION['role'] == 'client') {
    UsersControler::logout();
} else {

    if (isset($_GET["action"])) {
        $action = $_GET["action"];
        switch ($action) {
            case "home":
                UsersControler::listUser();
                break;

            case "addUser":
                UsersControler::insert();
                break;
            case "edit":
                UsersControler::editUser();
                break;
            case "read":
                UsersControler::readUser();
                break;
            case "logout":
                UsersControler::logout();
                break;
            default:
                UsersControler::listUser();
                break;
        }
    } else
    if (isset($_POST['submit'])) {
        switch ($_POST['submit']) {
            case "addUser":
                UsersControler::addUser();
            case "UpdateUser":
                UsersControler::UpdateUser();
            case "deletUser":
                UsersControler::deletUser();
        }
    } else {
        UsersControler::listUser();
    }
}
