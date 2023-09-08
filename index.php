<?php

require_once 'classes\user.php';

$user1= new \classes\user(1,'Admin','1234');

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Php training</title>
</head>
<body>
    <h1>Profile</h1>

    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Password</td>
        </tr>
        </thead>
        <tbody>
            <td><?php echo $user1->getId()?></td>
            <td><?php echo $user1->getUsername()?></td>
            <td><?php echo $user1->getPassword()?></td>
        </tbody>
    </table>
</body>
</html>


