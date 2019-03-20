<?php
require_once 'core/init.php';

if (Session::exists('home')) {
    echo Session::flash('home');
}

$user = new User();
if ($user->isLoggedIn()) {
    ?>
<p>Hello <a href="#"><?= escape($user->data()->username); ?></a>!</p>
    <ul>
        <li><a href="logout.php">Log out</a></li>
    </ul>

    <?php
} else {
    echo '<p>You need to <a href="login.php">log in</a> or <a href="register.php">register</a>!</p>';
}


