<?php
require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

$a = new crudDAO($db);
$list = $a->read();
?>

<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #9f9b9b;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #c1bebe;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
}
.user-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>

<div class="user-heading">
    <h1 style="color: gray;">List Of Users</h1>
    <h1 style="text-decoration: underline;text-decoration-color: #007bff;"> <!--text-decoration-thickness: 2px;-->
        <!-- <a href="create.php">Add User</a> -->
    </h1>
</div>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Username</th>
            <th>Email</th>
            <!-- <th>Action</th> -->
        </tr>
    </thead>

    <tbody>
        <?php foreach ($list as $value) { ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['lname'] ?></td>
            <td><?= $value['fname'] ?></td>
            <td><?= $value['username'] ?></td>
            <td><?= $value['email'] ?></td>
            <!-- <td>
                <a href="update.php?id=<?= $value['id'] ?>">Edit</a>
                |
                <a href="../process/deleteprocess.php?id=<?= $value['id'] ?>"
                   onclick="return confirm('Do you really want to remove this user?');">
                    Remove
                </a>
            </td> -->
        </tr>
        <?php } ?>
    </tbody>
</table>