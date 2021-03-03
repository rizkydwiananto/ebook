<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title"><?php echo $title; ?></h3>
    </div>

    <form class="form-horizontal" action="<?=base_url(); ?>ebook/tambahjenisproses" method="post">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Jenis e-Book</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Jenis e-Book" name="nama_jenis_ebook">
                </div>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <a onclick="return confirm('Anda yakin ingin membatalkan ?')" href="<?=base_url(); ?>ebook/jenis_ebook">
                <button type="button" class="btn btn-danger">Batal</button>
            </a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>