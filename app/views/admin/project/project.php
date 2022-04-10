<?php
if (@$_GET['hapus']) {
  $id = $_GET['hapus'];
  $q = mysqli_query($conn, "delete from  project where Id_p=$id");
  
}
?>

<div class="row">
  <div class="col-md-12">
    <h1>
      Project
      <a href="?menu=tambah-project" class="btn btn-primary">Tambah</a>
    </h1>
    <table class="table table-striped" id="">
      <thead>
        <tr>
          <th width="5%">#</th>
          <th width="15%">FOTO</th>
          <th>NAMA</th>
          <th>KETERANGAN</th></th>
          <th width="20%">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $q = mysqli_query($conn, "select * from project");
        while($data = mysqli_fetch_array($q)) {?>
        <tr>
          <td><?=$data['Id_p']?></td>
          <td><img src="../public/assets/img/<?=$data['Gambar']?>" width="130px"></td>
          <td><?=$data['Nama_p']?></td>
          <td><?=$data['Ket']?></td>
          <td>
          <a href="?menu=ubah-project&id=<?=$data['Id_p']?>" class="btn btn-primary">Ubah</a>
            <a onclick="hapus(<?=$data['Id_p']?>)" class="btn btn-danger">hapus</a>
          </td>
        </tr>
        
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<script>
  function hapus(id) {
    let h = confirm('hapus project ini?');
    if(h) {
      location.href = "?menu=project&hapus="+id;
    }
  }
</script>