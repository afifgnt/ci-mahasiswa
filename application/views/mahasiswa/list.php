<?php $this->load->view('mahasiswa/header'); ?>

<a href="<?php echo base_url('mahasiswa/tambah'); ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($mahasiswa as $mhs) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $mhs->nim; ?></td>
            <td><?php echo $mhs->nama; ?></td>
            <td><?php echo $mhs->alamat; ?></td>
            <td>
                <a href="<?php echo base_url('mahasiswa/edit/'.$mhs->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?php echo base_url('mahasiswa/delete/'.$mhs->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php $this->load->view('mahasiswa/footer'); ?>