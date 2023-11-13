<nav>
    <ul>
        <li><a href="/">Index</a></li>
        <li><a href="/notes">Notes</a></li>
        <li><a href="/note-new">Crée une note</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/admin">Admin</a></li>
        <li><a href="/users">User</a></li>
        <?php
        if (isset($_SESSION['user_name'])) {
            echo '<li>Bonjour, ' . $_SESSION['user_name'] . '</li>';
            echo '<li><a href="/déconnection">Se déconnecter</a></li>';
        } else {
            echo '<li><a href="/register">Register</a></li>';
            echo '<li><a href="/login">Login</a></li>';
        }
        ?>
    </ul>
</nav>