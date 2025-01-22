<?php

$userCount = $collection->countDocuments();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="mb-4">Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card text-bg-primary mb-3 shadow-lg">
                <div class="card-body text-center">
                    <h5 class="card-title">Toplam Kullanıcı Sayısı</h5>
                    <p class="display-4"><?= $userCount; ?></p>
                </div>
            </div>
        </div>





    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Son Eklenen Kullanıcılar</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Ad</th>
                                <th>Email</th>
                                <th>Yaş</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $users = $collection->find([], ['limit' => 5, 'sort' => ['_id' => -1]]);
                            foreach ($users as $user) {
                                echo "<tr>
                                    <td>" . htmlspecialchars($user['name']) . "</td>
                                    <td>" . htmlspecialchars($user['email']) . "</td>
                                    <td>" . htmlspecialchars($user['age']) . "</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
