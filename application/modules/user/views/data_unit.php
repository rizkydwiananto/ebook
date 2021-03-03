<div class="box box-info">

    <div class="box-header">
        <div class="form-group pull-left">
            <a href="<?php base_url();?>tambah_unit">
                <button type="button" class="btn btn-info btn-flat"><b>Tambah Unit</b></button>
            </a>
        </div>
    </div>

    <div class="box-body table-responsive padding">

        <table id="example1" class="table table-bordered table-hover dataTable no-footer">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Unit</th>
                <th>Edit</th>
                <th>Hapus</th>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($data_unit as $list): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $list['nama_unit']; ?></td>
                    <td>
                        <a href="<?php base_url();?>edit_unit/<?php echo $list['id_unit']; ?>">
                            <button type="button" class="btn btn-primary btn-flat">Edit</button></a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus unit >> <?php echo $list['nama_unit']; ?> << ini ?')" href="<?=base_url(); ?>user/hapus_unit/<?php echo $list['id_unit']?>">
                            <button type="button" class="btn btn-danger btn-flat">Hapus</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>