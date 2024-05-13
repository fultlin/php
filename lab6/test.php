<?php
    session_start();
?>

<form method="post">
    <label for="name">Name</label>
    <input type="text" name='name'>

    <label for="name">Фамилия</label>
    <input type="text" name='name'>

    <label for="name">Пароль</label>
    <input type="text" name='name'>

    <label for="name">email</label>
    <input type="text" name='name' value=<?php echo $_SESSION['email']?>>
</form>