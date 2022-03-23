<div class="container">
        <a href="#" class="btn btn-success mb-3" data-toggle="modal" data-target="#addModal">Tambah</a>
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach($data as $d): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['name']; ?></td>
                    <td><?= $d['email']; ?></td>
                    <td>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $d['id']; ?>">Edit</a>
                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $d['id']; ?>">Hapus</a>
                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#printModal<?= $d['id']; ?>">Cetak</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<!-- Modal Tambah Penawaran -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('User/addUser');?>" method="POST" enctype="multipart/form-data" runat="server">
            <div class="form-group"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
        </div>
    </div>
    </div>
    </div>

<?php foreach($data as $d1): ?>
        <!-- Modal Edit Penawaran -->
<div class="modal fade" id="editModal<?= $d1['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Edit Penawaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('Penawaran/updatePenawaran/'.$d1['id']);?>" method="POST" enctype="multipart/form-data" runat="server">
                <div class="row" style="margin-left:5px">
                    <div class="form-group">
                        <label for="">Tanggal Pesanan</label>
                        <input type="date" class="form-control" name="tgl" placeholder="Tanggal Order" value="<?= $d1['tgl']; ?>">
                    </div>
                    <div class="form-group ml-3">
                        <label for="">Kode Penawaran</label>
                        <input type="text" class="form-control" name="kode" placeholder="Kode Penawaran" value="<?= $d1['kode']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Nama Pemesan</label>
                            <input type="text" placeholder="Nama Pemesan" class="form-control" name="nama" value="<?= $d1['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Item</label>
                            <textarea name="itemEdit" class="form-control ckeditor"><?= htmlentities($d1['item']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Role/Spesifikasi</label>
                            <textarea name="roleEdit" class="form-control ckeditor"><?= htmlentities($d1['role']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Note</label>
                            <textarea name="note" class="form-control ckeditor"><?= htmlentities($d1['note']); ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">QTY</label>
                            <input type="text" placeholder="QTY" class="form-control" name="qty" value="<?= $d1['qty']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" placeholder="Harga" class="form-control" name="harga" id="hargaEdit" value="<?= $d1['harga']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Diskon</label>
                            <input type="text" placeholder="Diskon" id="diskonEdit" class="form-control" name="diskon">
                        </div>
                        <div class="form-group">
                            <label for="">Pajak PPN 11%</label>
                            <input type="text" id="pajakEdit" placeholder="PPN" class="form-control" name="pajak" readonly  value="<?= $d1['pajak']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Total Keseluruhan</label>
                            <input type="text" placeholder="Total Keseluruhan" id="totalEdit" class="form-control mata-uang" name="total" value="<?= $d1['total']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Terbilang</label>
                            <input type="text" placeholder="Terbilang" id="terbilang" class="form-control" name="terbilang"  value="<?= $d1['terbilang']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tanda Tangan</label>
                            <input accept="image/*" type="file" id="imgInp" placeholder="Silahkan Upload Tanda Tangan" class="form-control" name="ttd"><br>
                            <img id="blah" src="<?= base_url('assets/upload/'.$d1['ttd']);?>" alt="your image" />
                        </div>
                    </div>
                </div>

            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
        </div>
    </div>
    </div>
    </div>
    <?php endforeach; ?>
<?php foreach($data as $d1): ?>
        <!-- Modal Edit Penawaran -->
<div class="modal fade" id="deleteModal<?= $d1['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Penawaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('Penawaran/deletePenawaran/'.$d1['id']);?>" method="POST">
            <p>Apakah anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
    </form>
        </div>
    </div>
    </div>
    </div>
<?php endforeach; ?>
<?php foreach($data as $d1): ?>
        <!-- Modal Edit Penawaran -->
<div class="modal fade" id="printModal<?= $d1['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Cetak Penawaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('Penawaran/printPenawaran/'.$d1['id']);?>" method="POST" target="_blank">
            <p>Apakah anda yakin ingin mencetak data ini?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Cetak</button>
        </div>
    </form>
        </div>
    </div>
    </div>
    </div>
<?php endforeach; ?>
