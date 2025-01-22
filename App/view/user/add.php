<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4><i class="bi bi-person-plus-fill"></i> Yeni Kullanıcı Ekle</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Ad:</label>
                            <input type="text" name="name" class="form-control" placeholder="Adınızı girin" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="E-posta adresinizi girin" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Yaş:</label>
                            <input type="number" name="age" class="form-control" placeholder="Yaşınızı girin" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="add_user" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Ekle
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center text-muted">
                    <small>Formu doldurarak yeni bir kullanıcı ekleyebilirsiniz.</small>
                </div>
            </div>
        </div>
    </div>
</div>
