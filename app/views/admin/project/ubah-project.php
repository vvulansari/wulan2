<?php
if (isset($_POST['simpan'])) {
  $id = $_GET['id'];
  $nama = $_POST['nama'];
  $keterangan = $_POST['keterangan'];
  $foto = $_FILES['foto'];
  $namaFoto = $_FILES['foto']['name'];
  $folder = '../public/assets/img/';
  $folder = $folder . basename($namaFoto);

  if(empty($namaFoto)) {
    $q = mysqli_query($conn, 
    "update project set Nama_p='$nama', Ket='$keterangan'
    where Id_p=$id"
    );
    $message = "<div class='alert alert-success'>Project berhasil diubah!</div>";
  } else {
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
      rename("../public/assets/img/$namaFoto", "../public/assets/img/$namaFoto");
      $q = mysqli_query($conn, 
      "update project set Nama_p='$nama', Ket='$keterangan', Foto='$namaFoto'
      where Id_p=$id"
      );
      $message = "<div class='alert alert-success'>Project berhasil diubah!</div>";
    }
  }
}


$id = $_GET['id'];
$getData = mysqli_query($conn, "select * from project where Id_p=$id");
$data = mysqli_fetch_assoc($getData);
?>

<div class="row">
  <div class="col-md-6">
    <h1>
      Ubah Project <?=$data['Nama_p']?>
      <a href="?menu=project" class="btn btn-danger">kembali</a>
    </h1>
    <?=@$message?>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control" value="<?=$data['Nama_p']?>" required>
      </div>
      <div class="form-group">
        <label>UPLOAD FOTO</label>
        <img src="../public/assets/img/<?=$data['Gambar']?>" width="300px">
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label>KETERANGAN</label>
        <textarea name="keterangan" cols="30" rows="3" class="form-control" required><?=$data['Ket']?></textarea>
      </div>
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>