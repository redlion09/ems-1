<div class="transportations index">
	<h2><?php __('Transportations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('report_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($transportations as $transportation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $transportation['Transportation']['id']; ?>&nbsp;</td>
		<td><?php echo $transportation['Transportation']['description']; ?>&nbsp;</td>
		<td><?php echo $transportation['Transportation']['amount']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transportation['Report']['id'], array('controller' => 'reports', 'action' => 'view', $transportation['Report']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $transportation['Transportation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $transportation['Transportation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $transportation['Transportation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transportation['Transportation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Transportation', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>