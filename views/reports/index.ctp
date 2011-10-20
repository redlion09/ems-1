<div class="reports index">
	<h2><?php __('Reports');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('day');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('breakfast');?></th>
			<th><?php echo $this->Paginator->sort('lunch');?></th>
			<th><?php echo $this->Paginator->sort('dinner');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('liquidation_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reports as $report):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $report['Report']['id']; ?>&nbsp;</td>
		<td><?php echo $report['Report']['day']; ?>&nbsp;</td>
		<td><?php echo $report['Report']['date']; ?>&nbsp;</td>
		<td><?php echo $report['Report']['breakfast']; ?>&nbsp;</td>
		<td><?php echo $report['Report']['lunch']; ?>&nbsp;</td>
		<td><?php echo $report['Report']['dinner']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($report['User']['username'], array('controller' => 'users', 'action' => 'view', $report['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($report['Liquidation']['id'], array('controller' => 'liquidations', 'action' => 'view', $report['Liquidation']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $report['Report']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $report['Report']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $report['Report']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $report['Report']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Report', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Liquidations', true), array('controller' => 'liquidations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Liquidation', true), array('controller' => 'liquidations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Fees', true), array('controller' => 'miscellaneous_fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miscellaneous Fee', true), array('controller' => 'miscellaneous_fees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transportations', true), array('controller' => 'transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transportation', true), array('controller' => 'transportations', 'action' => 'add')); ?> </li>
	</ul>
</div>