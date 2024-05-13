<?php 
    // session_start();
    
    // unset($_SESSION['counter']);
    // if (!isset($_SESSION['counter']))
    //     $_SESSION['counter'] = 1;
    // else
    //     $_SESSION['counter']++;

    // echo $_SESSION['counter'];

    // setcookie('test', 'Test1', time()+3600);
    
    // echo $_COOKIE['test'];
    // setcookie('test', 'Test1', time());
?>

<?php
    if (isset($_COOKIE['birthday'])) {
        $birthday = strtotime($_COOKIE['birthday']);
        $today = strtotime(time());
        
        if ($birthday == $today){
            echo 'С днём рождения';
        }else {
            $days_until_birthday = ceil(($birthday - $today) / (60 * 60 * 24 * 365));
            echo 'До вашего дня рождения осталось ' . -$days_until_birthday . ' дней.';
        }
    }else {
        setcookie('birthday', $_POST['birthday']);
    }
?>

<form method="post">
    <label for="birthday">Birthday</label>
    <input type="date" name="birthday" id="">
    <button type="submit">Submit</button>
</form>
