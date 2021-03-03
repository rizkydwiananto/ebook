<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title"><?php echo $title; ?></h3>
    </div>

    <form class="form-horizontal" action="<?=base_url(); ?>user/tambah_user_proses" method="post" enctype="multipart/form-data">
        <div class="box-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="username berupa email" name="username">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama User" name="nama">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Akses</label>
                <div class="col-sm-10">
                    <select name="akses" class="form-control" required>
                        <option value="">- Pilih Akses -</option>
                        <?php foreach ($data_akses as $akses): ?>
                            <option value="<?php echo $akses['nama_akses']; ?>"> <?php echo $akses['nama_akses']; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Unit</label>
                <div class="col-sm-10">
                    <select name="unit" class="form-control" required>
                        <option value="">- Pilih Unit -</option>
                        <?php foreach ($data_unit as $unit): ?>
                            <option value="<?php echo $unit['nama_unit']; ?>"> <?php echo $unit['nama_unit']; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="password" name="password">
                </div>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <a onclick="return confirm('Anda yakin ingin membatalkan ?')" href="<?=base_url(); ?>user">
                <button type="button" class="btn btn-danger">Batal</button>
            </a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>