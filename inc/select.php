<?php
$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$info = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($info, MYSQLI_ASSOC);


?>