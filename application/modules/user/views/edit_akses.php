<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title"><?php echo $title; ?></h3>
    </div>

    <form class="form-horizontal" action="<?=base_url(); ?>user/editaksesproses/<?php echo $data_akses['id_akses']; ?>" method="post">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Akses</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data_akses['nama_akses']; ?>" name="nama_akses">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a onclick="return confirm('Anda yakin ingin membatalkan ?')" href="<?=base_url(); ?>user/data_akses">
                <button type="button" class="btn btn-danger">Batal</button>
            </a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>