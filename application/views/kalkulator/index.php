    <a href="<?= base_url('Kalkulator/kalkulators')?>" class="btn btn-success mb-3">Hitung</a>

    <table class="table table-bordered" id="example1">
        <thead>
            <tr>
                <th>No. </th>
                <th>Lama Pengerjaan (Hari)</th>
                <th>Kuantitas (Orang)</th>
                <th>Total Biaya (Rupiah)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $no = 1;
        foreach ($data as $d) : ?>
            <tr>       
                <td><?= $no++;?></td>
                <td><?= $d->lama.' Hari';?></td>
                <td><?= $d->qty; ?></td>
                <td><?= $d->hasil; ?></td>
                <td>
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#detailModal<?= $d->id?>">Detail</a>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $d->id?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<!-- Modal Detail-->
<?php foreach ($data as $d1):?>
<div class="modal fade" id="detailModal<?= $d1->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Perhitungan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group ml-3">
                <label for="">Lama Pengerjaan :<?= ' '.$d1->lama.' Hari'; ?></label>
            </div>
            <div class="form-group" style="margin-left: 400px">
                <label for="">Kuantitas :<?= ' '.$d1->qty.' Orang'; ?></label>
            </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="">Perhitungan :</label>
                      <p><?= 'Rp. '.$d1->mph; ?></p>
                  </div>
                  <div class="form-group">
                      <label for="">Hosting :</label>
                      <p><?= 'Rp. '.$d1->hosting; ?></p>
                  </div>
                  <div class="form-group">
                      <label for="">Bahan :</label>
                      <p><?= 'Rp. '.$d1->bahan; ?></p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="">Grade :</label>
                      <p><?= $d1->grade; ?></p>
                  </div>
                  <div class="form-group">
                      <label for="">Biaya Tak Terduga :</label>
                      <p><?= 'Rp. '.$d1->biayatt; ?></p>
                    </div>
                  <div class="form-group">
                      <label for="">Asset Intelektual :</label>
                      <p><?= 'Rp. '.$d1->asset; ?></p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <h5>Total Biaya Keseluruhan :</h5>
                      <b><p><?= $d1->hasil; ?></p></b>
                  </div>
                  
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>

<!-- Modal Detail-->
<?php foreach ($data as $d2) :?>
<div class="modal fade" id="deleteModal<?= $d2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('Kalkulator/deleteKalkulator/'.$d2->id); ?>" method="POST">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach;?>