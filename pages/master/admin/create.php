<a class="nav-button" href="<?= url("/master/admin") ?>">Kembali</a>
<?php ?>
<h1>Create Admin</h1>

<!-- action() is from app.php -->
<form action="<?= action("master/admin/create", $db_PDO) ?>" method="post">
    <label for="name">Nama</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="SAVE">
</form>