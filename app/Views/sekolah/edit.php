<?php 
// Memanggil file view header dan sidebar
echo view('header');
echo view('sidebar');
?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Edit Data Sekolah</h1>
    </div>
    
    <!-- Form untuk mengedit data sekolah -->
    <?php echo form_open('updatesekolah') ?>
    
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label class="form-label">Kecamatan</label>
                <?php 
                // Hidden input untuk ID
                echo form_hidden('id', $id);
                // Dropdown untuk memilih kecamatan
                echo form_dropdown('kode_kecamatan', $kecamatanOptions, $query->kode_kecamatan, 'class="form-control"');
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">NPSN</label>
                <?php 
                // Input untuk NPSN
                $npsn = [
                    'name' => 'npsn',
                    'type' => 'number',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Masukkan NPSN Sekolah',
                    'required' => 'required',
                    'value' => $query->npsn
                ];
                echo form_input($npsn);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Sekolah</label>
                <?php 
                // Input untuk Nama Sekolah
                $nama_sekolah = [
                    'name' => 'nama_sekolah',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Masukkan Nama Sekolah',
                    'required' => 'required',
                    'value' => $query->nama_sekolah
                ];
                echo form_input($nama_sekolah);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat Sekolah</label>
                <?php 
                // Input untuk Alamat Sekolah
                $alamat_sekolah = [
                    'name' => 'alamat_sekolah',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Masukkan Alamat Sekolah',
                    'required' => 'required',
                    'value' => $query->alamat_sekolah
                ];
                echo form_input($alamat_sekolah);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <?php 
                // Dropdown untuk memilih status
                echo form_dropdown('status', $statusOptions, $query->status, 'class="form-control"');
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenjang Pendidikan</label>
                <?php 
                // Dropdown untuk memilih jenjang pendidikan
                echo form_dropdown('jenjang_pendidikan', $jenjangOptions, $query->jenjang_pendidikan, 'class="form-control"');
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Koordinat Sekolah</label>
                <?php 
                // Input untuk Koordinat Sekolah
                $koordinat = [
                    'name' => 'koordinat',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Contoh : -7.5134,109.0702',
                    'required' => 'required',
                    'value' => $query->koordinat
                ];
                echo form_input($koordinat);
                ?>
            </div>
            <div>
                <?php 
                // Tombol submit untuk menyimpan perubahan
                $simpan = [
                    'type' => 'submit',
                    'content' => 'Simpan',
                    'class' => 'btn btn-primary'
                ];
                echo form_button($simpan);
                // Link untuk membatalkan perubahan
                echo anchor('sekolah', 'Batal', ['class' => 'btn btn-danger']);
                ?>
            </div>
        </div>
    </div>
    
    <?php echo form_close(); ?>
</main>
<?php 
// Memanggil file view footer
echo view('footer'); 
?>
