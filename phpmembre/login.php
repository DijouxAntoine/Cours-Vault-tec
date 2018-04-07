<meta charset="utf-8">

<?php 

session_start();

if(isset($_POST['submit']))
{
    
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $password = htmlspecialchars(trim($_POST['password']));
    
    if(empty($pseudo))
    {
        echo "Veuillez saisir votre pseudo<br/>";
    }else if(empty($password))
        
    {
        
        echo "Veuillez saisir votre mot de passe";
    }else{
        
    
    
    mysql_connect('localhost','root','');
    mysql_select_db('phpmembre');
    
    $password = md5($password);
    
    $login= mysql_query("SELECT * FROM users WHERE username='$pseudo' AND password='$password'")
        
    $rows = mysql_num_rows($login);
    
        if($rows == 1)
        
        {
        
            $_SESSION['pseudo'] = $pseudo;
            
            header ('Location : membre.php');
        
        }else echo "Nom d'utilisateur ou mot de passe incorrect";
    }
    
}

?>

<title>Connection</title>

<h1>Connection</h1>


<form method="post" action="">
    
<p>Votre pseudo</p>
<input type="text" name="pseudo"/><br/><br/>

<p>Votre pseudo</p>
<input type="password" name="password"/><br/><br/>

<input type="submit" name="submit" value="Se connecter"/><br/><br/>
    
    
</form>


<a href="register.php">Pas encore membre</a>