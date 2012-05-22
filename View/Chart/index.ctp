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
<?php foreach ($main_project['User'] as $val):?>
  <tr class="<?php echo $this->Candy->cycle('even','odd')?>">
    <td align="center"><?php echo $this->Candy->format_username($val)?></td>
	<td align="center"><?php
		$num = isset($reports_by_id[$val['id']]['total']) ? $reports_by_id[$val['id']]['total'] - $reports_by_id[$val['id']]['closed'] : 0;
		echo $num;
	?></td>
    <td align="left"><?php
		for ($i = 0; $i < $num; $i++) {
			echo $this->Html->image('/cc_nyancat/img/poptartFINALTINY.gif');
		}
	?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>