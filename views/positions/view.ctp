<div class="positions view">
<h2><?php  __('Position');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Class'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['class']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position', true), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Position', true), array('action' => 'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($position['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Middle Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Mobile'); ?></th>
		<th><?php __('Home'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th><?php __('Department Id'); ?></th>
		<th><?php __('Group Id'); ?></th>
		<th><?php __('File'); ?></th>
		<th><?php __('Dirname'); ?></th>
		<th><?php __('Basename'); ?></th>
		<th><?php __('Checksum'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['first_name'];?></td>
			<td><?php echo $user['middle_name'];?></td>
			<td><?php echo $user['last_name'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['address'];?></td>
			<td><?php echo $user['city'];?></td>
			<td><?php echo $user['mobile'];?></td>
			<td><?php echo $user['home'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['position_id'];?></td>
			<td><?php echo $user['department_id'];?></td>
			<td><?php echo $user['group_id'];?></td>
			<td><?php echo $user['file'];?></td>
			<td><?php echo $user['dirname'];?></td>
			<td><?php echo $user['basename'];?></td>
			<td><?php echo $user['checksum'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
