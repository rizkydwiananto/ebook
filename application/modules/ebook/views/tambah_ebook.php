<div class="box box-info">

    <form class="form-horizontal" action="<?=base_url(); ?>ebook/tambah_ebook_proses" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Kode Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode_buku" value="<?php echo $kode; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Judul e-Book</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul_ebook" placeholder="Judul e-Book">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengarang" placeholder="Pengarang">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis e-Book</label>
                <div class="col-sm-10">
                    <select name="jenis_ebook" class="form-control" required>
                        <option value="">- Pilih Jenis e-Book -</option>
                        <?php foreach ($jenis_ebook as $jenis): ?>
                            <option value="<?php echo $jenis['nama_jenis_ebook']; ?>"> <?php echo $jenis['nama_jenis_ebook']; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Upload PDF</label>
                <div class="col-sm-3">
                    <input type="file" class="form-control" name="pdf">
                </div>
                <p class="help-block">Upload File PDF Disini.</p>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <a onclick="return confirm('Anda yakin ingin membatalkan ?')" href="<?=base_url(); ?>user/data_unit">
                <button type="button" class="btn btn-danger">Batal</button>
            </a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>