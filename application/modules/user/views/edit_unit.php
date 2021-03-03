<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title"><?php echo $title; ?></h3>
    </div>

    <form class="form-horizontal" action="<?=base_url(); ?>user/editunitproses/<?php echo $data_unit['id_unit']; ?>" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Unit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data_unit['nama_unit']; ?>" name="nama_unit">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a onclick="return confirm('Anda yakin ingin membatalkan ?')" href="<?=base_url(); ?>user/data_unit">
                <button type="button" class="btn btn-danger">Batal</button>
            </a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>