<?php

class UsersControler
{
    public static function loginform(){
        include_once "App/View/login.php";
    }
    public static function logout(){
        session_destroy();
        header('location:index.php');
    }

    public static function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $where = "email = '$email'";
        $user = Users::getUserData($where);
        if (count($user) == 0) {
            header('location:index.php');
        } else {
            if ($password !== $user[0]['password']) {
                header('location:index.php');
            } else {
                $_SESSION['id'] = $user[0]['id'];
                $_SESSION['role'] = $user[0]['role'];
                header('location:index.php');
            }
        }
    }

    public static function signupForm(){
        include_once "App/View/signup.php";
    }
    public static function signup(){
        unset($_POST['submit']);
        if (Users::addUsers($_POST) === false) {
        } else {
            self::loginform();
        }
    }


    public static function listUser()
    {
        $listUsers = Users::getUsers();
        include_once "App/View/index.php";
    }
    public static function insert()
    {
        include_once "App/View/insert.php";
    }
    public static function addUser()
    {
        unset($_POST['submit']);
        if (Users::addUsers($_POST) === false) {
        } else {
            self::listUser();
        }
    }
    public static function editUser()
    {
        $where = "id = $_GET[id]";
        $user = Users::getUserData($where);
        include_once "App/View/edit.php";
    }
    public static function readUser()
    {
        $where = "id = $_GET[id]";
        $user = Users::getUserData($where);
        $user = $user[0];
        include_once "App/View/read.php";
    }
    public static function UpdateUser()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            unset($_POST['submit']);
            unset($_POST['id']);
            if (Users::UpdateUsers($_POST, $id) === false) {
            } else {
                self::listUser();
            }
        } else {
            self::listUser();
        }
    }

    public static function deletUser()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            if (Users::DeleteUsers($id) === false) {
            } else {
                self::listUser();
            }
        } else self::listUser();
    }
}
