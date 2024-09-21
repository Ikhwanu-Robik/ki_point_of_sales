<?php
include("system/query/admin.php");
$admins = findAll($db_PDO);
?>

<h1>Master Admin</h1>
<a class="nav-button" href="<?= url("/master/admin/create") ?>">Tambah Data</a>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($admins as $admin){
        ?>
        <tr>
            <td><?= $admin["name"] ?></td>
            <td><?= $admin["email"] ?></td>
            <td>
                <a class="nav-button" href="<?= url("/master/admin/update?id=" . $admin["id"]) ?>">Edit</a>
                <form action="<?= url("/master/admin/delete") ?>" method="post">
                    <input type="hidden" name="id" value=" <?= $admin["id"] ?> ">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>