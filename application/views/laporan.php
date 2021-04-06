<div class="col-md-12 col-sm-12 col-xs-12 main post-inherit">
    <div class="x_panel post-inherit">
        <div class="col-md-12 main">
            <h3>
                Laporan SPP
                <span class=" pull-right">
                    <a href="<?php echo base_url('laporan') ?>" class="btn btn-info btn-sm"><span class="fa fa-arrow-left"></span>&nbsp; Kembali</a> 
                    <a href="<?php echo sit_url('admin/siswa/edit/' . $siswa['kode_siswa']) ?>" class="btn btn-success btn-sm"><span class="fa fa-edit"></span>&nbsp; Edit</a>
                </span>
            </h3><br>
        </div>
		<style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
   .small { font-variant:   small-caps; }
</style>
        <div class="col-md-8">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>ID_Pembayaran</td>
                        <td>:</td>
                        <td><?php echo $pembayaran['id_pembayaran'] ?></td>
                    </tr>
                    <tr>
                        <td>ID_Petugas</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['id_petugas'] ?></span></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['nisn'] ?></span></td>
                    </tr>
                        <td>Tanggal Bayar</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['tgl_bayar'] ?></span></td>
                    </tr>
                         <td>Bulan Bayar</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['bulan_dibayar'] ?></span></td>
                    </tr>
                     <td>Tahun Bayar</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['tahun_dibayar'] ?></span></td>
                    </tr>
                        <td>ID SPP</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['id_spp'] ?></span></td>
                    </tr>
                     <td>Jumlah Bayar</td>
                        <td>:</td>
                        <td><span class="cap"><?php echo $pembayaran['jumlah_bayar'] ?></span></td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
