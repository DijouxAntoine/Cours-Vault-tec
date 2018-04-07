<meta charset="utf-8">

<?php 
    
if(isset($_POST['submit']))
{
    
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
    
    if ($username&&$password&&$repeatpassword)
    {
        if(strlen($username) >=4)
        {
            
            if(strlen($password) >=6)
            {
                
               if($password==$repeatpassword)
               {
                
                   $password = md5($password);
                   
                   mysqli_connect('localhost','root','');
                   mysql_select_db('phpmembre');
                   
                   
                   $query = mysql_query("
                   
                   INSERT INTO users VALUES ('','$username','$password')
                   
                   ");
                   
                   die('Inscription terminée, vous pouvez vous <a href="login.php"> connecter</a');
                   
               }else echo "Les mot de passe ne sont pas identiques";
            }else echo "Le mot de passe est trop court";
        }else echo "Le nom d'utilisateur est trop court !";
    }else echo "Veuillez saisir tous les champs !";
}
?>

<title>Inscritpion</title>

<h1>Inscription</h1>

<form method="post" action="register.php">

    <p>Votre nom d'utilisateur</p>
    <input type="text" name="username">
    <p>votre mot de passe</p>
    <input type="password" name="password">
    <p>Répetez votre mot de passe</p>
    <input type="password" name="repeatpassword"><br/><br/>
    <input type="submit" name="submit" value="valider">

</form>

<a href="login.php">Je possède déjà un compte</a>
