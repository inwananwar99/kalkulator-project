<div class="container">
            <!-- Small boxes (Stat box) -->
            <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $this->db->get('kalkulators')->num_rows(); ?></h3>
                <p>Data Kalkulasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-calculator"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                <?php $data = $this->db->query("SELECT MAX(hasil) as res FROM kalkulators")->row_array();
                    echo implode($data);
                ?></h3>
                <p>Nominal Tertinggi</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
</div>