<!doctype html>
<html>
<head>
    <?php include_once 'views/includes/head.php' ?>



    <title> <?= ucfirst($page) ?> - Mon site  </title>
</head>
<body>
<?php include_once 'views/includes/header.php' ?>

<?php

$bdd = new PDO("localhost;dbname=test;charset=utf8","root","root");
if(isset($_POST['pseudo'])AND isset($_POST['message'])AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);
    $insertmsg = $bdd->prepare('INSERT INTO chat(pseudo, message) values(?,?)');
    $insertmsg->execute(array($pseudo, $message));

}
?>


<form method="post" action="">
    <input type="text" name="pseudo" placeholder="PSEUDO" value=""<?php if(isset($pseudo)) { echo $pseudo;} ?> />
    <textarea type="text" name="message" placeholder="MESSAGE"></textarea>
    <input type="submit" value="Envoyer"/>
</form>

<?php
$allmsg = $bdd-<query('SELECT * FROM chat ORDER BY id DESC');
    while($msg = $allmsg->fetch())
    {
        ?>
        <b> <?php  echo $msg['pseudo'] ?>:</b> <?php  echo $msg['message'] ?><br />
        <?php
    }
    ?>


<?php include_once 'views/includes/footer.php' ?>

</body>
</html>