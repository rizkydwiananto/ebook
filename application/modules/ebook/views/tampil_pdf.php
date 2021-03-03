<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title">Dokumen <?php echo $data_ebook['kode_buku']; ?> | Judul : <?php echo $data_ebook['judul_ebook']; ?></h3>
    </div>

    <div class="box-body">
        <embed width="1070" height="500" src="http://localhost/ebook/assets/files/pdf/<?php echo $data_ebook['pdf']; ?>" type="application/pdf" />
    </div>

</div>

