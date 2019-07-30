<?php
function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT title, picture, description FROM billets ORDER BY ID ');

    return $req;
}



function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

