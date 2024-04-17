<?php
    session_start();
    if(isset($_GET['ses'])) unset($_SESSION['history']);
    // $_SESSION['history'] = [];

    if(!isset($_SESSION['iter'])) $_SESSION['iter'] = 1;

    if(isset($_POST['eval']) && $_POST['iter'] == $_SESSION['iter']) {
        eval('$res='.$_POST['eval'].';');
        $_SESSION['history'][] = $_POST['eval'].'='.$res; 
        $_SESSION['iter']++;
    }

?>

<form action="calc.php" method='post'>
    <input type="hidden" name='iter' value="<?=$_SESSION['iter'];?>">
    <input type="text" name='eval' id=''>
    <a href="calc.php?ses=destroy">Destroy</a>
    <button type='submit'>Calculate</button>
</form>

<?php 
    if (isset($_SESSION['history'])) {
        foreach($_SESSION['history'] as $elem) {
            echo $elem.'</br>';
        }
    }
    
?>