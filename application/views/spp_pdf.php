<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>ID Spp</th>
        <th>Tahun</th>
        <th>Nominal</th>
      </tr>

      <?php
      $no= 1;
      foreach ($spp as $mhs): ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->id_spp ?></td>
        <td><?php echo $mhs->tahun ?></td>
        <td><?php echo $mhs->nominal ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
