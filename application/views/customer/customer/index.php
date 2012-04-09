<div class="page-header">
    <h2>List User</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th width="10%">Corporate ID</th>
      <th width="10%">Contact Person</th>
      <th width="20%">Alamat</th>
      <th width="10%">Telp Kantor</th>
      <th width="10%">Telp Rumah</th>
      <th width="10%">Handphone</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->cus_idx, $item->cus_corporate_id)?></td>
      <td><?php echo $item->cus_cp ?></td>
      <td><?php echo $item->cus_alamat ?></td>
      <td><?php echo $item->cus_telepon_kantor ?></td>
      <td><?php echo $item->cus_telepon_rumah ?></td>
      <td><?php echo $item->cus_handphone ?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>