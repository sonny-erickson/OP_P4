<?php
// INSCRIPTION PAGE
// check pseudo and mail un db for inscription
function pseudoCheck($pseudo)
{
    $db = dbConnect();
    $req = $db ->prepare('SELECT * FROM member WHERE pseudo = ?');
    $req -> execute(array($pseudo));
    $result = $req -> rowcount();
    return $result;
}
function emailCheckInsciption($email)
{
    $db = dbConnect();
    $req = $db ->prepare('SELECT * FROM member WHERE email = ?');
    $req -> execute(array($email));
    $result = $req -> rowcount();
    return $result;
}
// add user
function addUser($pseudo, $pass_hache, $mail)
{   
    $db = dbConnect();
    $req = $db->prepare('INSERT INTO member(pseudo, pass, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
    $req->execute(array('pseudo' => $pseudo,
                        'pass' => $pass_hache,
                        'email' => $mail));
}
// check email in bd
function emailCheckConnection($mailConnect)
{
    $db = dbConnect();
    $req = $db -> prepare ('SELECT * FROM member WHERE email = :email');
    $req -> execute(array('email' => $mailConnect));
    $result = $req -> fetch();
    return $result;
}