<div class="liquidations view">
<h2><?php  __('Liquidation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $liquidation['Liquidation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lodging'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $liquidation['Liquidation']['lodging']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $liquidation['Liquidation']['total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('IsAccepted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $liquidation['Liquidation']['isAccepted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($liquidation['User']['username'], array('controller' => 'users', 'action' => 'view', $liquidation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($liquidation['Location']['location'], array('controller' => 'locations', 'action' => 'view', $liquidation['Location']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Liquidation', true), array('action' => 'edit', $liquidation['Liquidation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Liquidation', true), array('action' => 'delete', $liquidation['Liquidation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $liquidation['Liquidation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Liquidations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Liquidation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Reports');?></h3>
	<?php if (!empty($liquidation['Report'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Day'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Breakfast'); ?></th>
		<th><?php __('Lunch'); ?></th>
		<th><?php __('Dinner'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Liquidation Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($liquidation['Report'] as $report):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $report['id'];?></td>
			<td><?php echo $report['day'];?></td>
			<td><?php echo $report['date'];?></td>
			<td><?php echo $report['breakfast'];?></td>
			<td><?php echo $report['lunch'];?></td>
			<td><?php echo $report['dinner'];?></td>
			<td><?php echo $report['user_id'];?></td>
			<td><?php echo $report['liquidation_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reports', 'action' => 'view', $report['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reports', 'action' => 'edit', $report['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reports', 'action' => 'delete', $report['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $report['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
