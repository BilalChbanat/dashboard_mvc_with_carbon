<?php
namespace Controllers;

require_once '../model/UserModel.php';
class UserController
{

    function index()
    {
        $users = latest();
        require_once '../views/liste_users.php';
    }

    function create()
    {
  
        require_once '../views/create.php';

    }

    function store()
    {
        create();

        header('location:../');
    }

    function edit($id)
    {
        $user = view($id);
        require_once '../views/edit.php';
    }


    function editAction()
    {
        extract($_POST);
        edit($id, $nom, $prenom, $age, $login, $password);
        header('location:../');
    }

    function delete($id)
    {

        destroy($id);

        header('location:../../');

    }



}