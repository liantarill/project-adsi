<div class="container mt-5">
    <h4 class="mb-1 fw-bold">Tambah Karya Baru</h4>
    <p class="text-muted mb-4">Lengkapi informasi karya seni yang akan dijual di platform</p>

    <form action="simpan_karya.php" method="POST" enctype="multipart/form-data">
        <div class="row g-4">
            <div class="col-md-6">
                <!-- Judul -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Karya <span class="text-danger">*</span></label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul karya seni"
                        required>
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
                    <select class="form-select" name="kategori" required>
                        <option selected disabled>Pilih kategori</option>
                        <option value="Lukisan">Lukisan</option>
                        <option value="Fotografi">Fotografi</option>
                        <option value="Digital Art">Digital Art</option>
                    </select>
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Harga <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="harga" class="form-control" min="0" value="0"
                            required>
                    </div>
                </div>

                <!-- Stok -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Stok <span class="text-danger">*</span></label>
                    <input type="number" name="stok" class="form-control" min="0" value="0" required>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Status <span class="text-danger">*</span></label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" value="Tersedia" id="tersedia"
                            checked>
                        <label class="form-check-label" for="tersedia">Tersedia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" value="Habis" id="habis">
                        <label class="form-check-label" for="habis">Habis</label>
                    </div>
                </div>
            </div>

            <!-- Kolom kanan -->
            <div class="col-md-6">
                <!-- Upload Foto -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Foto Karya <span class="text-danger">*</span></label>
                    <div class="border border-2 border-dashed rounded p-4 text-center bg-white"
                        style="cursor: pointer;">
                        <i class="bi bi-cloud-upload fs-1 text-secondary"></i>
                        <p class="mb-1">Klik untuk unggah atau seret dan lepas</p>
                        <small class="text-muted">PNG, JPG atau WEBP (Maks. 5MB)</small><br>
                        <input type="file" name="foto" class="form-control mt-2" accept=".png,.jpg,.jpeg,.webp"
                            required>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi Karya <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="deskripsi" rows="4" placeholder="Ceritakan tentang karya seni ini..."
                        required></textarea>
                </div>

                <!-- Nama Seniman -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Seniman</label>
                    <input type="text" class="form-control" name="seniman" value="Budi Santoso" readonly>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="d-flex justify-content-end mt-3">
            <a href="dashboard.php" class="btn btn-outline-secondary me-2">
                <i class="bi bi-x-circle me-1"></i> Batal
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-cloud-check me-1"></i> Simpan Karya
            </button>
        </div>
    </form>
</div>
