<div class="rates index">
	<h2><?php __('Rates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('expense');?></th>
			<th><?php echo $this->Paginator->sort('location_class');?></th>
			<th><?php echo $this->Paginator->sort('position_class');?></th>
			<th><?php echo $this->Paginator->sort('rate');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($rates as $rate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $rate['Rate']['id']; ?>&nbsp;</td>
		<td><?php echo $rate['Rate']['expense']; ?>&nbsp;</td>
		<td><?php echo $rate['Rate']['location_class']; ?>&nbsp;</td>
		<td><?php echo $rate['Rate']['position_class']; ?>&nbsp;</td>
		<td><?php echo $rate['Rate']['rate']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $rate['Rate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $rate['Rate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $rate['Rate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rate['Rate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rate', true), array('action' => 'add')); ?></li>
	</ul>
</div>