<div class="box box-info">

    <div class="box-header">
        <div class="form-group pull-left">
            <a href="<?php base_url();?>tambah_akses">
                <button type="button" class="btn btn-info btn-flat"><b>Tambah Akses</b></button>
            </a>
        </div>
    </div>

    <div class="box-body table-responsive padding">

        <table id="example1" class="table table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Akses</th>
                <th>Edit</th>
                <th>Hapus</th>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($data_akses as $list): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $list['nama_akses']; ?></td>
                    <td>
                        <a href="<?php base_url();?>user/edit_akses/<?php echo $list['id_akses']; ?>">
                            <button type="button" class="btn btn-primary btn-flat">Edit</button></a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus akses >> <?php echo $list['nama_akses']; ?> << ini ?')" href="<?=base_url(); ?>user/hapus_akses/<?php echo $list['id_akses']?>">
                            <button type="button" class="btn btn-danger btn-flat">Hapus</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>