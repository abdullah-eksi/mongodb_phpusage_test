# MongoDb nin php ile kurulumunu test ettim bir crud uygulaması


---

## Proje Yapısı

Proje klasör yapısı aşağıdaki gibidir:

```
App/
  inc/
    footer.php
    head.php
    header.php
  lib/
    conf.php
    database.php
    func.php
    lib.php
  process/
    home.php
    user.php
  view/
    user/
      add.php
      delete.php
      edit.php
      list.php
      home.php
index.php
vendor/
  composer/
  mongodb/
  symfony/
  autoload.php
.htaccess
composer.json
composer.lock
```

### Klasör ve Dosya Açıklamaları

- **App/inc/**: Projenin sabit bölümü (header, footer).
- **App/lib/**: Yardımcı fonksiyonlar, veritabanı ayarları ve genel fonksiyonlar.
- **App/process/**: Kullanıcılar ve anasayfa işlemleri için backend dosyaları.
- **App/view/**: Kullanıcı CRUD işlemlerinin frontend dosyaları.
- **vendor/**: Composer tarafından yüklenen MongoDB kütüphanesi.
- **index.php**: Projenin ana çalışma dosyası.

---

## Gereksinimler

Bu projeyi çalıştırmak için aşağıdaki önkoşulları karşılamalısınız:

1. PHP 7.4 veya üzeri.
2. MongoDB PHP Driver.
3. Composer (çalışma zamanında MongoDB kütüphanesini yüklemek için).
4. Bir MongoDB sunucusu.

---

## Kurulum

### 1. Proje Klasörünü Klonlayın

```
git clone <repo-link>
```

### 2. Composer Bağımlılıklarını Yükleyin

```
composer install
```


---

## CRUD İşlemleri

### 1. Create (Oluşturma)
Yeni bir kullanıcı eklemek için `add.php` dosyası kullanılır. Örnek form:

```php
<form method="POST" action="process/user.php">
    <input type="text" name="name" placeholder="Ad">
    <input type="email" name="email" placeholder="E-posta">
    <button type="submit">Kaydet</button>
</form>
```

### 2. Read (Listeleme)
Kullanıcıları listelemek için `list.php` dosyası kullanılır.

### 3. Update (Güncelleme)
Bir kullanıcının bilgilerini güncellemek için `edit.php` dosyası kullanılır.

### 4. Delete (Silme)
Kullanıcı silme işlemi için `delete.php` kullanılır.

---

## İlgili Bağlantılar

- **Composer**: https://getcomposer.org
- **MongoDB PHP Driver**: https://www.mongodb.com/docs/drivers/php

Eğer herhangi bir sorun yaşar veya sorularınız olursa lütfen iletişime geçin.

