<!-- 
    Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
-->
<?php 
$text=$_GET['text'] ?? '';;
$pass=$_GET['pass'] ?? '';

$cens=str_replace($pass,'***',$text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="GET">
        <input type="text" placeholder="Scrivi una frase" name="text">
        <input type="text" name="pass">
        <button type="submit">INVIA</button>
    </form>
    <p>Stringa: <?php echo $text?></p>
    <div>La lunghezza è: <?php echo strlen($text)?></div> 
    <div><?php echo $cens?></div>
    <div><?php echo strlen($cens)?></div>
    
</body>
</html>