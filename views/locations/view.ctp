<div class="locations view">
<h2><?php  __('Location');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Class'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['class']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Region'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['region']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location', true), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Location', true), array('action' => 'delete', $location['Location']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Liquidations', true), array('controller' => 'liquidations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Liquidation', true), array('controller' => 'liquidations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Liquidations');?></h3>
	<?php if (!empty($location['Liquidation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Lodging'); ?></th>
		<th><?php __('Total'); ?></th>
		<th><?php __('IsAccepted'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Liquidation'] as $liquidation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $liquidation['id'];?></td>
			<td><?php echo $liquidation['lodging'];?></td>
			<td><?php echo $liquidation['total'];?></td>
			<td><?php echo $liquidation['isAccepted'];?></td>
			<td><?php echo $liquidation['user_id'];?></td>
			<td><?php echo $liquidation['location_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'liquidations', 'action' => 'view', $liquidation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'liquidations', 'action' => 'edit', $liquidation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'liquidations', 'action' => 'delete', $liquidation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $liquidation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Liquidation', true), array('controller' => 'liquidations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
