<!DOCTYPE html>
<html>
<head>
  <title>Cetak Laporan</title>
</head>
<body>
<canter><p> LAPORAN PELUNASAN SPP</p></canter>
    <table width="100%" border="1px">
      <tr>
        <th>No</th>
        <th>ID_Pembayaran</th>
        <th>ID_Petugas</th>
        <th>NISN</th>
        <th>Tanggal Bayar</th>
        <th>Bulan Bayar</th>
        <th>Tahun Bayar</th>
        <th>ID SPP</th>
        <th>Jumlah Bayar</th>
      </tr>


<p> Terimaksih Sudah Membayar SPP Sesuai Nominal </p>
      <?php
      $no= 1;
      foreach ($pembayaran as $mhs): ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->id_pembayaran ?></td>
        <td><?php echo $mhs->id_petugas?></td>
        <td><?php echo $mhs->nisn ?></td>
        <td><?php echo $mhs->tgl_bayar ?></td>
        <td><?php echo $mhs->bulan_dibayar ?></td>
        <td><?php echo $mhs->tahun_dibayar ?></td>
        <td><?php echo $mhs->id_spp?></td>
        <td><?php echo $mhs->jumlah_bayar ?></td>
      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
