<?php

session_start();

    mysql_connect('localhost','root','');
    mysql_select_db('phpmembre');

if(isset($_POST['submit']))
{
    $pseudo = mysql_real_escape_string(htmlspecialchars(trim($_POST['pseudo'])));
    
    if(empty($pseudo))
    {
        echo "veuilez compléter ce champs"
    }else{
        
    
        
    mysql_query("UPDATE users SET username = '$pseudo' WHERE username = '{$_SESSION ['pseudo']}' ") or die(mysql_error());
        
    header ("Location : logout.php");  
        
    }
    
}




?>

<form method="post">
    <p>Votre nouveau pseudo</p>
    <input type="text" name="pseudo">
    <br/><br/>
    <input type="submit" name="submit" value="changer">
</form>


<hr/>

<?php
if(isset($_POST['subpass']))
{
    
$o_password = $_POST ['o_password'];
$n_password = $_POST ['n_password'];
$r_password = $_POST ['r_password'];

 $o_password = md5($o_password);   
    
 $query = mysql_query("SELECT * FROM users WHERE username = '{$_SESSION['pseudo']}' AND password = '$o_password' ") or die(mysql_error());
 $rows = mysql_num_rows($query);
     
    
if(empty($o_password))
{
echo "veuillez saisir votre ancient mot de passe";
}else if($n_password != $r_password)
{
    echo "Vos nouveaux mots de passe sont différents";
}else if($rows == 0)
{
    echo"l'ancien mot de passe et incorrect!";
}else{
    
 $n_password = md5($n_password);   
    
 mysql_query("UPDATE users SET password='$n_password' WHERE username='{$_SESSION['pseudo']}'");
    
header("Location : membre.php");
    
}
    
    
    
    
    
    
    

    
}
?>

<form method="post">
    
<p>Ancien mot de passe</p>    
<input type="password" name="o_password">

<p>Nouveau mot de passe</p>    
<input type="password" name="n_password">

<p>Répéter nouveau mot de passe</p>    
<input type="password" name="r_password">

  <br/>
     
<input type="submit" name="subpass" value="changer de mot de passe">
            
</form>