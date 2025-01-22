<?php


// Kullanıcı ekleme işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user'])) {
    $userData = [
        'id' => rand(0,99999999),
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'age' => (int) $_POST['age']
    ];

    $insertResult = $collection->insertOne($userData);

    if ($insertResult->getInsertedCount() > 0) {
        echo '<div class="alert alert-success">Kullanıcı başarıyla eklendi!</div>';
    } else {
        echo '<div class="alert alert-danger">Kullanıcı eklenemedi.</div>';
    }
}




if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_user'])) {
    $userId = $_POST['id'];  // Formdan gelen id
    $userData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'age' => (int) $_POST['age']
    ];

    try {
        // Kullanıcıyı id'ye göre bulup güncelleme
        $updateResult = $collection->updateOne(
            ['id' => (int)$userId],  // id'yi integer olarak arıyoruz
            ['$set' => $userData]     // Yeni verilerle güncelleniyor
        );

        if ($updateResult->getModifiedCount() > 0) {
            echo '<div class="alert alert-success">Kullanıcı başarıyla güncellendi!</div>';
            // Sayfa yenileme: Yönlendirme işlemi
            header("Refresh: 1; url=" . $_SERVER['REQUEST_URI']);
            exit;
        } else {
            echo '<div class="alert alert-warning">Güncelleme yapılmadı, veri aynı olabilir.</div>';
        }
    } catch (Exception $e) {
        echo '<div class="alert alert-danger">Güncelleme işlemi başarısız: ' . $e->getMessage() . '</div>';
    }

}
?>
