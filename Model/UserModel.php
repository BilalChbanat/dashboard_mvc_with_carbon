<?php
use Carbon\Carbon;
function database_connection()
{
    return new PDO('mysql:dbname=simplemvc;host=localhost', 'root', '');
}

function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM user ORDER BY id ASC')->fetchAll(PDO::FETCH_OBJ);
}

function create()
{
    extract($_POST);
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO user VALUES(null,?,?,?,?,?)");
    return $sqlState->execute([$nom, $prenom, $age, $login, $password]);
}

function edit($id, $nom, $prenom, $age, $login, $password)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE user
                                    SET nom = ? ,
                                        prenom = ? , 
                                        age = ? , 
                                        email = ? , 
                                        password = ?
                                    WHERE id = ?");
    return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);
}

function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM user WHERE id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM user WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);

}

function created_at($user){
    $diff = $user->created;
    $carbon = new Carbon($diff);
    return $carbon->diffForHumans();
}