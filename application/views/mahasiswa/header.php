<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Aplikasi Data Mahasiswa</h1>
        
        <?php if($this->session->flashdata('sukses')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('sukses'); ?>
        </div>
        <?php } ?>
        
        <?php if($this->session->flashdata('danger')) { ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('danger'); ?>
        </div>
        <?php } ?>