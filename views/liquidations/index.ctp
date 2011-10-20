<div class="liquidations index">
	<h2><?php __('Liquidations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('lodging');?></th>
			<th><?php echo $this->Paginator->sort('total');?></th>
			<th><?php echo $this->Paginator->sort('isAccepted');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($liquidations as $liquidation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $liquidation['Liquidation']['id']; ?>&nbsp;</td>
		<td><?php echo $liquidation['Liquidation']['lodging']; ?>&nbsp;</td>
		<td><?php echo $liquidation['Liquidation']['total']; ?>&nbsp;</td>
		<td><?php echo $liquidation['Liquidation']['isAccepted']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($liquidation['User']['username'], array('controller' => 'users', 'action' => 'view', $liquidation['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($liquidation['Location']['location'], array('controller' => 'locations', 'action' => 'view', $liquidation['Location']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $liquidation['Liquidation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $liquidation['Liquidation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $liquidation['Liquidation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $liquidation['Liquidation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Liquidation', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>