<?php


$userModel = new User();
$user = $userModel->getUserById($_GET['intvar']);
?>

<div class="container mt-5">
    <h2>Kullanıcıyı Güncelle</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Adı</label>
            <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Yaş</label>
            <input type="number" class="form-control" name="age" value="<?php echo $user['age']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-Mail</label>
            <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
        </div>

        <button type="submit" name="update_user" class="btn btn-primary">Güncelle</button>
    </form>
</div>
