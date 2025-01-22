<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include 'head.php'; ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
          <a class="navbar-brand fw-bold" href="/app/home">
              <i class="bi bi-database"></i> MongoDB CRUD
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menüyü Aç/Kapat">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link text-white fw-semibold" href="/app/home">
                          <i class="bi bi-house-door"></i> Ana Sayfa
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white fw-semibold" href="/app/user/list">
                          <i class="bi bi-people"></i> Kullanıcılar
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white fw-semibold" href="/app/user/add">
                          <i class="bi bi-person-plus"></i> Yeni Kullanıcı Ekle
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
