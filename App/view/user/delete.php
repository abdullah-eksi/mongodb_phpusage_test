<?php

if (isset($_GET['intvar'])) {
    $userId = $_GET['intvar']; 

    try {

        $deleteResult = $collection->deleteOne(['id' => (int)$userId]);

        if ($deleteResult->getDeletedCount() > 0) {

            header("Location: /app/user/list?durum=ok");
            exit;
        } else {

          header("Location: /app/user/list?durum=no");
        }
    } catch (Exception $e) {
    header("Location: /app/user/list?durum=no");
    }
} else {
  header("Location: /app/user/list?durum=no");
} ?>
