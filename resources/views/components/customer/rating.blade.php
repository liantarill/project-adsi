@vite('resources/css/components/customer/rating.css')


<section class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-start mb-4">
                <div class="d-flex align-items-center gap-3">
                    <img src="Images/python.png" class="rounded" alt="Product Image" width="60" height="60">
                    <div>
                        <h5 class="mb-1 fw-semibold">Padang</h5>
                        <small class="text-muted">Oleh Budi Santoso</small><br>
                        <span class="text-purple fw-semibold">Rp 2.500.000</span>
                    </div>
                </div>
                <div class="text-end">
                    <small class="text-muted d-block">Pesanan #ORD2505123</small>
                    <small class="text-muted">Diterima pada 10 Mei 2025</small>
                </div>
            </div>

            <!-- Beri Rating -->
            <h6 class="fw-semibold mb-2">Beri Rating</h6>
            <div class="mb-3 text-center">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="bi bi-star-fill fs-3 text-secondary"></i>
                @endfor
                <div><small class="text-muted">Pilih bintang untuk memberi rating</small></div>
            </div>

            <!-- Tulis Ulasan -->
            <div class="mb-4">
                <h6 class="fw-semibold mb-2">Tulis Ulasan</h6>
                <textarea class="form-control" rows="4" maxlength="500"
                    placeholder="Bagikan pengalaman Anda dengan produk ini..."></textarea>
                <div class="text-end text-muted mt-1"><small>0/500 karakter</small></div>
            </div>

            <!-- Tambah Foto -->
            <div class=" mb-4">
                <h6 class="fw-semibold mb-2">Tambahkan Foto <small class="text-muted">(Opsional)</small></h6>
                <div class="border rounded text-center align-items-center justify-content-center pt-3 mb-2"
                    style="width: 100px; height: 100px;">
                    <i class="bi bi-plus-circle-dotted fs-2 text-muted"></i>
                    <p class="ms-2 tambah-foto">Tambah Foto</p>
                </div>
                <small class="text-muted d-block">Maksimal 3 foto. Format: JPG, PNG (Maks. 5MB)</small>
            </div>

            <!-- Checkbox -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="anonim">
                <label class="form-check-label" for="anonim">Tampilkan sebagai anonim</label>
            </div>
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input" type="checkbox" id="verifikasi" checked>
                <label class="form-check-label" for="verifikasi">Verifikasi sebagai pembeli</label>
            </div>

            <!-- Tips -->
            <div class="bg-light rounded p-3 mb-4">
                <h6 class="fw-semibold">Tips Menulis Ulasan yang Berkualitas:</h6>
                <ul class="mb-0 text-muted small">
                    <li>Ceritakan kualitas produk dan kesesuaian dengan deskripsi</li>
                    <li>Bagikan pengalaman pemasangan dan tampilan di ruangan Anda</li>
                    <li>Berikan saran yang membantu untuk pembeli lain</li>
                </ul>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-end gap-2">
                <button class="btn btn-light border">Batal</button>
                <button class="btn btn-purple">Kirim Ulasan</button>
            </div>
        </div>
    </div>
</section>
