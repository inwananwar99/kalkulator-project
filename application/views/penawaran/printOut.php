<?php
function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,0,'.','.');
	return $hasil_rupiah;
}
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penawaran - KTN</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
    .kop{
        margin-left: 50px;
    }
    .pemesan{
        border:solid black;
        width:500px;
        margin-left: 50px;
        margin-top: 130px;
    }
</style>

</head>

<body>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <img style="margin-top:20px" src="<?= base_url('assets/img/logo.png'); ?>" alt="" width="400" height="100">
                </div>
                <div class="col-md-8">
                    <h3 class="text-right">CV. KREASI TEKNOLOGI NUSANTARA</h3>
                    <p class="text-right">Jl. Duren Raya Blok Perumnas No. 52 RT 045 RW 008 <br>Kel. Sukamelang, Kec. Subang <br>Jawa Barat – Indonesia<br>Telp/ Fax : 0898-1502-548<br>email : kreasiteknologi57@gmail.com<br>website: https://kreasinusantara.co.id/</p>
                </div>
            </div>
        <div class="row" style="page-break-after:always;">
            <div class="row">
                <hr style="width:70%; margin-left:253px; border-top: 3px solid black;">
                <div class="col-md-8">
                    <div class="pemesan">
                    <?php foreach([$data] as $dp): ?>
                        <p class="ml-3"><b>Kepada Yth.</b><br><?= $dp['nama']; ?> <br><?= $dp['alamat']; ?></p>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 style="float:right;">PENAWARAN</h5>
                    <table class="table" border=1; style="border:solid black">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Penawaran</th>
                            </tr>
                        </thead>
                        <tbody style="border-top:solid black">
                          <?php foreach([$data] as $d): ?>
                            <tr>
                                <td><?= tgl_indo($d['tgl']); ?></td>
                                <td><?= $d['kode']; ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <p style="margin-top:20px">Dengan Hormat,<br>
            Semoga Bapak / Ibu senantiasa dalam keadaan sehat wal'afiat<br>
            Perkenankan kami CV. Kreasi Teknologi Nusantara yang merupakan salah satu perusahaan penyedia jasa pembuatan<br>
            website, perangkat IOT, dan android apps di Indonesia.<br>Bersama ini kami sampaikan Penawaran Harga untuk item yang Bapak/Ibu perlukan :</p>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color:lightgrey;">
                        <th>No.</th>
                        <th>ITEM</th>
                        <th>Role</th>
                        <th>QTY</th>
                        <th>HARGA (RP.)</th>
                        <th>TOTAL (RP.)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach([$data] as $d1): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d1['item']; ?></td>
                            <td><?= $d1['role']; ?></td>
                            <td><?= $d1['qty']; ?></td>
                            <td><?= rupiah($d1['harga']); ?></td>
                            <td><?= rupiah($d1['harga']); ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="4" class="text-right">Sub Total :</th>
                            <th id="harga"><?= rupiah($d1['harga']); ?></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="4" class="text-right">PPN 10% :</th>
                            <th><?= $d1['pajak']; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="4" class="text-right">Total :</th>
                            <th><?= $d['total']; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="5" class="text-center"><?= $d1['terbilang']; ?></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <p style="margin-top:30px">*Note</p>    
        <div class="row"> 
            <p><?= $d1['note']; ?></p>
        </div>
    <p style="margin-left:15px"><i>Bank : BRI KC Subang<br>Rekening : 0123-01-001422-56-6<br>an. : CV. Kreasi Teknologi Nusantara</i></p>
    <p>Demikian Penawaran Harga dari kami, atas perhatiannya kami sampaikan terima kasih.</p>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <p style="margin-left: 50px;">Hormat kami,</p>
            <p style="margin-top: 50px;margin-left: 30px;"><u>Rivaldo Nugraha, S.T.</u></p>
            <p style="margin-left: 65px;">Direktur</p>
        </div>
    </div>
    </div>
        <div class="col-md-1"></div>
    </div>
    <?php foreach($data as $d):?>
        
    <?php endforeach; ?>

    <script>
        window.print();
    </script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>