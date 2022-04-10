<?php
if($_GET['menu'] == NULL || $_GET['menu'] == '' || $_GET['menu']=="profile"){
    include("views/admin/profile/profile.php");
}
    else if($_GET['menu'] == "about"){
    include("views/admin/about/about.php");
}
    else if($_GET['menu'] == "project"){
    include("views/admin/project/project.php");
}
else if($_GET['menu'] == "ubah-project"){
    include("views/admin/project/ubah-project.php");
}
else if($_GET['menu'] == "tambah-project"){
    include("views/admin/project/tambah-project.php");
}
    else if($_GET['menu'] == "contact"){
    include("views/admin/contact/contact.php");
}
    else if ($_GET['menu'] == 'logout') {
    session_destroy();
    echo "
            <script>
            alert('Sampai jumpa lagi :)')
            window.location.href= 'http://localhost/wulan2/'
            </script>      
        ";
}

  
?>
      
