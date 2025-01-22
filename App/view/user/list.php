<div class="container mt-5">
    <h2 class="text-center mb-4">Kullanıcı Listesi</h2>

    <!-- Durum mesajını gösterme -->
    <?php if (isset($_GET['durum'])): ?>
        <?php if ($_GET['durum'] == 'ok'): ?>
            <div class="alert alert-success">Kullanıcı başarıyla silindi!</div>
        <?php elseif ($_GET['durum'] == 'no'): ?>
            <div class="alert alert-danger">Bir hata oluştu, kullanıcı silinemedi.</div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Ad</th>
                        <th>Email</th>
                        <th>Yaş</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                
                    $users = $collection->find();
                    $counter = 1;
                    foreach ($users as $user):
                    ?>
                    <tr>
                        <td><?= $counter++; ?></td>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <td><?= htmlspecialchars($user['age']); ?></td>
                        <td>
                            <a href="/App/user/edit/<?= $user['id']; ?>" class="btn btn-sm btn-warning">Düzenle</a>
                            <a href="/App/user/delete/<?= $user['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bu kullanıcıyı silmek istediğinize emin misiniz?')">Sil</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
