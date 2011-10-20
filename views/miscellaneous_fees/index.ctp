<div class="miscellaneousFees index">
	<h2><?php __('Miscellaneous Fees');?></h2>
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
	foreach ($miscellaneousFees as $miscellaneousFee):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $miscellaneousFee['MiscellaneousFee']['id']; ?>&nbsp;</td>
		<td><?php echo $miscellaneousFee['MiscellaneousFee']['description']; ?>&nbsp;</td>
		<td><?php echo $miscellaneousFee['MiscellaneousFee']['amount']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($miscellaneousFee['Report']['id'], array('controller' => 'reports', 'action' => 'view', $miscellaneousFee['Report']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $miscellaneousFee['MiscellaneousFee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $miscellaneousFee['MiscellaneousFee']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $miscellaneousFee['MiscellaneousFee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $miscellaneousFee['MiscellaneousFee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Miscellaneous Fee', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>