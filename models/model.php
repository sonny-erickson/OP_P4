 <?php 
     
function getPosts()
{
    $bdd = bddConnect();
    $req = $bdd->query('SELECT * FROM billets ORDER BY date_created');
    $result = $req -> fetchAll();
    return $result;
}
function bddConnect()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8', 'root', '');
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
