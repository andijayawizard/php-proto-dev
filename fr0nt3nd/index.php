<?php
require_once '../controllers/function.php';
require_once '../controllers/UserController.php';
$items=new UserController();
$items=$items->getAll(1);

?>
<table>
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


