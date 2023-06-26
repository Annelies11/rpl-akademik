<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Tingkatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open('tingkatan/edit', 'role="form" class="form-horizontal"');
                echo form_hidden('kd_mapel', $tingkatan['kd_tingkatan']);
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Tingkatan</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $tingkatan['kd_tingkatan']; ?>" readonly="true" name="kd_tingkatan" class="form-control" placeholder="Masukkan Kode Tingkat Kelas">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Tingkatan Kelas</label>

                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $tingkatan['nama_tingkatan']; ?>" name="nama_tingkatan" class="form-control" placeholder="Masukkan Nama Tingkatan Kelas">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('tingkatan', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
                        ?>
                      </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>