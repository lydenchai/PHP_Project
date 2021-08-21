
<div class="container-fluid table-responsive">
    <table class="table border border-dark" style="margin:15px; width: 83.5%; margin-left: 8.5%">
        <thead class="bg-secondary text-white text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Profile</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">Setting</th>
            </tr>
        </thead>
        <tbody class="text-center" style="text-align: center; align-items: center;justify-content: center; ">
            <?php 
                require_once("inc/database.php");
                $users = selectAllUser();
                foreach($users as $user):
            ?>
            <tr>
                <td><?= $user["userID"] ?></td>
                <td><img src="uploadImg/<?= $user['profile']?>" alt="error" style="width: 65px; height: 65px; border-radius: 50%;"></td>
                <td><?= $user["userName"] ?></td>
                <td><?= $user["email"] ?></td>
                <td><?= $user["password"] ?></td>
                <td><?= $user["role"] ?></td>
                <td><a href="process/deleteUser.php?id=<?= $user['userID']?>" class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>

