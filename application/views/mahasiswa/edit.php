<?php $this->load->view('mahasiswa/header'); ?>

<h2>Edit Data Mahasiswa</h2>

<form method="post" action="<?php echo base_url('mahasiswa/edit/'.$mahasiswa->id); ?>">
    <div class="form-group">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" value="<?php echo $mahasiswa->nim; ?>" required>
    </div>
    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $mahasiswa->nama; ?>" required>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"><?php echo $mahasiswa->alamat; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo base_url('mahasiswa'); ?>" class="btn btn-secondary">Batal</a>
</form>

<?php $this->load->view('mahasiswa/footer'); ?>