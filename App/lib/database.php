<?php


use MongoDB\Client;

$mongoClient = new Client("mongodb://localhost:27017");

$db = $mongoClient->selectDatabase('MyDatabase');
$collection = $db->selectCollection('users');


class User {
    private $collection;

    public function __construct() {
        global $collection;  // MongoDB koleksiyonunu dahil et
        $this->collection = $collection;
    }

    public function getUserById($id) {
            try {
                // ID'nin integer değer olarak kullanılması
                $user = $this->collection->findOne(['id' => (int)$id]);  // URL'den gelen id'yi integer olarak dönüştür

                if (!$user) {
                    throw new Exception("Kullanıcı bulunamadı.");
                }
                return $user;
            } catch (Exception $e) {
                die("Hata: " . $e->getMessage());
            }
        }
}
?>
