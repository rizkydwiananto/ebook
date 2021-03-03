<div class="box box-info">

    <div class="box-header">
        <div class="form-group pull-left">
            <a href="<?php base_url();?>ebook/tambah_ebook">
                <button type="button" class="btn btn-info btn-flat"><b>Tambah <i>e-Book</i></b></button>
            </a>
        </div>
    </div>

    <div class="box-body table-responsive padding">

        <table id="example1" class="table table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Judul e-Book</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Jenis</th>
                <th>View</th>
                <th>Edit</th>
                <th>Hapus</th>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($data_ebook as $list): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $list['kode_buku']; ?></td>
                    <td><?php echo $list['judul_ebook']; ?></td>
                    <td><?php echo $list['penerbit']; ?></td>
                    <td><?php echo $list['pengarang']; ?></td>
                    <td><?php echo $list['tahun_terbit']; ?></td>
                    <td><?php echo $list['jenis_ebook']; ?></td>
                    <td>
                        <a href="<?php base_url();?>ebook/tampil_pdf/<?php echo $list['kode_buku']; ?>">
                            <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button></a>
                    </td>
                    <td>
                        <a href="<?php base_url();?>ebook/edit_jenis_ebook/<?php echo $list['kode_buku']; ?>">
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus e-Book >> <?php echo $list['judul_ebook']; ?> << ini ?')" href="<?=base_url(); ?>ebook/hapus_ebook/<?php echo $list['kode_buku']?>">
                            <button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>