<table class="table" data-toggle="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>ApiKey</th>     
    </tr>
  </thead>
  <tbody>
    <?php
    $no=0+1;
    foreach ($items as $item) {?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$item['username']?></td>
        <td><?=$item['api_key']?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
