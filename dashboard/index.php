<?php include_once('../_header.php'); ?>

<style>
    
body {
    background-image: url("../img/back.jpg");
}
</style>

<div class="row">
    <div class="col-lg-12">
        <h1> PUSKESMAS HUTUMURI </h1>
        <p>Selamat datang <mark> <?= $_SESSION['user']; ?> </mark> di website Puskesmas Hutumuri (Rekam Medis) 
        </p>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Daftar Menu</a>
    </div>
</div>

<?php include_once('../_footer.php'); ?>