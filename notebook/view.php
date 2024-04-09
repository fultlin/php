<?php
    $db = require('db.php');
    $connect = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);
    if (mysqli_connect_errno()) echo mysqli_connect_error();
    $sql = 'SELECT * FROM `nodes`';
    $res = mysqli_query($connect, $sql);
?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">FirstName</th>
      <th scope="col">Name</th>
      <th scope="col">LastName</th>
      <th scope="col">Gender</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Addres</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>