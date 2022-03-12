
<form action="<?= base_url('Kalkulator/addKalkulator')?>" method="POST">
    <div class="row">
        <div class="form-group">
            <label for="">Lama Pengerjaan (Hari)</label>
            <input type="text" class="form-control" autocomplete="off" name="lama" id="lama">
        </div>
        <div class="form-group ml-3">
            <label for="">Kuantitas (Orang)</label>
            <input type="text" class="form-control" autocomplete="off" name="qty" id="kuantitas">
        </div>
        <div class="form-group ml-3">
            <h5>Total Keseluruhan : </h5>
            <input type="text" readonly id="hasil" class="form-control" name="hasil">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Hasil Perhitungan</label>
                <input type="number" class="form-control" autocomplete="off" id="mph" name="mph" readonly placeholder="MPH Rp.120.000,00">
            </div>
            <div class="form-group">
                <label for="">Hosting</label>
                <input type="number" id="hosting" class="form-control" autocomplete="off" name="hosting">
            </div>
            <div class="form-group">
                <label for="">Bahan</label>
                <input type="number" id="bahan" class="form-control" autocomplete="off" name="bahan">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Margin Grade</label>
                <input type="number" id="grade" class="form-control" autocomplete="off" name="grade">
            </div>
            <div class="form-group">
                <label for="">Biaya Tak Terduga</label>
                <input type="number" id="biayatt" class="form-control" autocomplete="off" name="biayatt">
            </div>
            <div class="form-group">
                <label for="">Asset Intelektual</label>
                <input type="number" id="asset" class="form-control" autocomplete="off" name="asset">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
    </form>