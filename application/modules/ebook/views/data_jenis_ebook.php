<div class="box box-info">

    <div class="box-header">
        <div class="form-group pull-left">
            <a href="<?php base_url();?>ebook/tambah_jenis_ebook">
                <button type="button" class="btn btn-info btn-flat"><b>Tambah Jenis e-Book</b></button>
            </a>
        </div>
    </div>

    <div class="box-body table-responsive padding">

        <table id="example1" class="table table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Jenis E-Book</th>
                <th>Edit</th>
                <th>Hapus</th>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($jenis_ebook as $list): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $list['nama_jenis_ebook']; ?></td>
                    <td>
                        <a href="<?php base_url();?>ebook/edit_jenis_ebook/<?php echo $list['id_jenis_ebook']; ?>">
                            <button type="button" class="btn btn-primary btn-flat">Edit</button></a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus akses >> <?php echo $list['nama_jenis_ebook']; ?> << ini ?')" href="<?=base_url(); ?>ebook/hapus_jenis_ebook/<?php echo $list['id_jenis_ebook']?>">
                            <button type="button" class="btn btn-danger btn-flat">Hapus</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>