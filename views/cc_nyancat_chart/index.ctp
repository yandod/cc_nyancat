<?php
$reports_by_id = Set::combine($reports,'{n}.assigned_to_id','{n}');
?>
<table class="list">
<thead>
  <tr>
    <th width="20%"><?php echo __('Name',true)?></th>
	<th width="10%"><?php echo __('Issues',true)?></th>
    <th width="70%"><?php echo __('# of Nyans',true)?></th>
  </tr>
</thead>
<tbody>
<?php foreach ($mainProject['User'] as $val):?>
  <tr class="<?php echo $candy->cycle('even','odd')?>">
    <td align="center"><?php echo $candy->format_username($val)?></td>
	<td align="center"><?php
		$num = isset($reports_by_id[$val['id']]['total']) ? $reports_by_id[$val['id']]['total'] : 0;
		echo $num;
	?></td>
    <td align="left"><?php
		for ($i = 0; $i < $num; $i++) {
			echo $html->image('/cc_nyancat/img/poptartFINALTINY.gif');
		}
	?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>