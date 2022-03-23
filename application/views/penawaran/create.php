<div class="form-group ml-3">
            <label for="">Borongan/Satuan</label>
            <select class="form-control" id="formselector">
                <option value="initial">-- Pilih Form --</option>
                <option value="form1">Borongan</option>
                <option value="form2">Satuan</option>
            </select>
</div>
<div id="initial"></div>
<!-- Form Borongan -->
<form action="<?= base_url('Penawaran/addBorongan');?>" class="forms" id="form1" method="POST" enctype="multipart/form-data" runat="server">
                <div class="row" style="margin-left:5px">
                    <div class="form-group">
                        <label for="">Tanggal Pesanan</label>
                        <input type="date" class="form-control" name="tgl" placeholder="Tanggal Order">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Kode Penawaran</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode Penawaran">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Nama Pemesan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Alamat Pemesan</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Pemesan">
                    </div>
                </div>
                    <button class="btn btn-info mb-3" id="plus" type="button">+ Tambah</button>
                    <button class="btn btn-warning ml-3 mb-3" type="button" id="reset">Reset</button>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Item</label>
                        <input type="text" id="item" class="form-control" name="item[]" placeholder="Item">
                    </div>
                    <div class="col-md-3">
                        <label for="">Role/Spesifikasi</label>
                        <input type="text" class="form-control" name="role[]" id="role1" placeholder="Role">
                    </div>
                    <div class="col-md-3">
                        <label for="">QTY</label>
                        <input type="text" class="form-control" id="qty1" name="qty" placeholder="QTY">
                    </div>
                    <div class="col-md-3">
                        <label for="">Harga</label>
                        <input type="text" class="form-control sum" name="harga" id="harga" placeholder="Harga">
                    </div>
                </div>
                <div id="form"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Diskon</label>
                            <input type="text" placeholder="Diskon" id="diskon" class="form-control" name="diskon">
                        </div>
                        <div class="form-group">
                            <label for="">Pajak PPN 11%</label>
                            <input type="text" id="pajak" placeholder="PPN" class="form-control" name="pajak" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Total Keseluruhan</label>
                            <input type="text" placeholder="Total Keseluruhan" id="total" class="form-control mata-uang" name="total" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Terbilang</label>
                            <input type="text" placeholder="Terbilang" id="terbilang" class="form-control" name="terbilang">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tanda Tangan</label>
                            <input accept="image/*" type="file" id="imgInpp" placeholder="Silahkan Upload Tanda Tangan" class="form-control" name="ttd"><br>
                            <img id="blah" src="#" alt="your image" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label for="">Note</label>
                        <textarea name="noteBorongan" class="form-control mb-3"></textarea>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary mt-3" type="submit">Simpan</button>
                    </div>
                    <div class="col-md-8"></div>
                </div>
</form>
<hr>
<!-- Form 2 -->
<form class="forms" id="form2" action="<?= base_url('Penawaran/addSatuan');?>" method="POST" enctype="multipart/form-data" runat="server">
                <div class="row" style="margin-left:5px">
                    <div class="form-group">
                        <label for="">Tanggal Pesanan</label>
                        <input type="date" class="form-control" name="tgl" placeholder="Tanggal Order">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Kode Penawaran</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode Penawaran">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Nama Pemesan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Alamat Pemesan</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Pemesan">
                    </div>
                </div>
                <div class="ar">
                    <button class="btn btn-info" type="button" id="btn-tambah-form">Tambah Data Form</button>
                    <button class="btn btn-warning" type="button" id="btn-reset-form">Reset Form</button><br><br>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Item</label>
                        <input type="text" class="form-control" name="item[]" placeholder="Item">
                    </div>
                    <div class="col-md-3">
                        <label for="">Role/Spesifikasi</label>
                        <input type="text" class="form-control" name="role[]" placeholder="Role">
                    </div>
                    <div class="col-md-3">
                        <label for="">QTY</label>
                        <input type="text" class="form-control" name="qty[]"
                        id="qty2" placeholder="QTY">
                    </div>
                    <div class="col-md-3">
                        <label for="">Harga</label>
                        <input type="text" class="form-control sum" name="harga[]" id="hargaa" placeholder="Harga">
                    </div>
                    <div id="insert-form"></div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Diskon</label>
                            <input type="text" placeholder="Diskon" id="diskonn" class="form-control" name="diskon">
                        </div>
                        <div class="form-group">
                            <label for="">Pajak PPN 11%</label>
                            <input type="text" id="pajakk" placeholder="PPN" class="form-control" name="pajak" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Total Keseluruhan</label>
                            <input type="text" placeholder="Total Keseluruhan" id="totall" class="form-control mata-uang" name="total" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Terbilang</label>
                            <input type="text" placeholder="Terbilang" id="terbilang" class="form-control" name="terbilang">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tanda Tangan</label>
                            <input accept="image/*" type="file" id="imgInp" placeholder="Silahkan Upload Tanda Tangan" class="form-control" name="ttd"><br>
                            <img id="blahh" src="#" alt="your image" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label for="">Note</label>
                        <textarea name="noteSatuan" class="form-control mb-3"></textarea>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                    <div class="col-md-8"></div>
                </div>
</form>
    <!-- Kita buat textbox untuk menampung jumlah data form -->
    <input type="hidden" id="jumlah-form" value="1">