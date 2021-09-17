<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">EDIT</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <a href='<?php echo base_url("$class/list") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit/".$inventaris['id_inventaris_pangan']) ?>

        <div class="row">

          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Produsen</label>
              <input type="text" name="nama_produsen" class="form-control" value="<?php echo $inventaris['nama_produsen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Kabupaten/Kota</label>
              <select id="pilih_kota" name="id_kota" class="form-control select2">
              <option selected value="<?php echo $inventaris['id_kota'] ?>"><?php echo ucwords($inventaris['nama_kota']) ?></option>
              <?php foreach($kotas as $kota): ?>
                <option value="<?php echo $kota['id_kota'] ?>"><?php echo ucwords($kota['nama_kota']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Kecamatan</label>
              <select id="pilih_kecamatan" name="id_kecamatan" class="form-control select2">
              <option selected value="<?php echo $inventaris['id_kecamatan'] ?>"><?php echo $inventaris['nama_kecamatan'] ?></option>
              <?php foreach($kecamatans as $kecamatan): ?>
                <option value="<?php echo $kecamatan['id_kecamatan'] ?>"><?php echo $kecamatan['nama_kecamatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Desa</label>
              <input type="text" name="desa" class="form-control" value="<?php echo $inventaris['desa'] ?>" required>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Pimpinan</label>
              <input type="text" name="nama_pimpinan" class="form-control" value="<?php echo $inventaris['nama_pimpinan'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Luas Lahan (ha)</label>
              <input type="text" name="luas_lahan" class="form-control" value="<?php echo $inventaris['luas_lahan'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>No. Tlp/Hp</label>
              <input type="text" name="no_hp" class="form-control" value="<?php echo $inventaris['no_hp'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Lamanya Usaha (th)</label>
              <input type="text" name="lamanya_usaha" class="form-control" value="<?php echo $inventaris['lamanya_usaha'] ?>" required>
            </div>
          </div>

      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Modal Kerja</label>
            <input type="text" name="modal_kerja" class="form-control" value="<?php echo $inventaris['modal_kerja'] ?>" required>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label>Kapasitas Produksi (ton/th)</label>
              <input type="text" name="kapasitas_produksi" class="form-control" value="<?php echo $inventaris['kapasitas_produksi'] ?>" required>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label>Kemampuan Produksi (ton/th)</label>
            <input type="text" name="kemampuan_produksi" class="form-control" value="<?php echo $inventaris['kemampuan_produksi'] ?>" required>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label>No. Kelompok Benih</label>
            <input type="text" name="no_kelompok_benih" class="form-control" value="<?php echo $inventaris['no_kelompok_benih'] ?>" required>
          </div>
        </div>

    </div>

    <hr>

    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label>BUMN</label>
          <select name="bumn" class="form-control select2" required>
          <option value="<?php echo $inventaris['bumn'] ?>" selected><?php echo $inventaris['bumn'] === '1' ? 'Ya' : 'Tidak' ?></option>
          <option value="0">Tidak</option>
          <option value="1">Ya</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label>Diperta PrProv</label>
          <select name="diperta_prov" class="form-control select2" required>
          <option value="<?php echo $inventaris['diperta_prov'] ?>" selected><?php echo $inventaris['diperta_prov'] === '1' ? 'Ya' : 'Tidak' ?></option>
          <option value="0">Tidak</option>
          <option value="1">Ya</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label>Diperta Kabupaten</label>
          <select name="diperta_kab" class="form-control select2" required>
          <option value="<?php echo $inventaris['diperta_kab'] ?>" selected><?php echo $inventaris['diperta_kab'] === '1' ? 'Ya' : 'Tidak' ?></option>
          <option value="0">Tidak</option>
          <option value="1">Ya</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label>Swasta</label>
          <select name="swasta" class="form-control select2" required>
          <option value="<?php echo $inventaris['swasta'] ?>" selected><?php echo $inventaris['swasta'] === '1' ? 'Ya' : 'Tidak' ?></option>
          <option value="0">Tidak</option>
          <option value="1">Ya</option>
          </select>
        </div>
      </div>

    </div>

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label>Produksi Benih Bersetifikat (ton/th)</label>
        <input type="text" name="produksi_benih" class="form-control" value="<?php echo $inventaris['produksi_benih'] ?>" required>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label>Ijin Produksi</label>
          <input type="text" name="ijin_produksi" class="form-control" value="<?php echo $inventaris['ijin_produksi'] ?>" required>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label>Pernah/Tidak Mendapat Bantuan Pemerintah (th)</label>
        <input type="text" name="mendapat_bantuan" class="form-control" value="<?php echo $inventaris['mendapat_bantuan'] ?>">
      </div>
    </div>

  </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
