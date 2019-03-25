<?php
require_once 'core/init.php';

if (Session::exists('home')) {
    echo Session::flash('home');
}

$user = new User();
if ($user->isLoggedIn()) {
    ?>
<p>Hello <a href="profile.php?user=<?= escape($user->data()->username); ?>"><?= escape($user->data()->username); ?></a>!</p>
    <ul>
        <li><a href="update.php">Update</a></li>
        <li><a href="changepassword.php">Change password</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>

    <?php
    
        if ($user->hasPermission('admin')) {
            echo '<p>You are an admin! </p>';
        }
    
} else {
    echo '<p>You need to <a href="login.php">log in</a> or <a href="register.php">register</a>!</p>';
}


