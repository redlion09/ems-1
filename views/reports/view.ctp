<div class="reports view">
<h2><?php  __('Report');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $report['Report']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Day'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $report['Report']['day']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $report['Report']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Breakfast'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $report['Report']['breakfast']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lunch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $report['Report']['lunch']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dinner'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $report['Report']['dinner']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($report['User']['username'], array('controller' => 'users', 'action' => 'view', $report['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Liquidation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($report['Liquidation']['id'], array('controller' => 'liquidations', 'action' => 'view', $report['Liquidation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Report', true), array('action' => 'edit', $report['Report']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Report', true), array('action' => 'delete', $report['Report']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $report['Report']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Miscellaneous Fees');?></h3>
	<?php if (!empty($report['MiscellaneousFee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Report Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($report['MiscellaneousFee'] as $miscellaneousFee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $miscellaneousFee['id'];?></td>
			<td><?php echo $miscellaneousFee['description'];?></td>
			<td><?php echo $miscellaneousFee['amount'];?></td>
			<td><?php echo $miscellaneousFee['report_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'miscellaneous_fees', 'action' => 'view', $miscellaneousFee['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'miscellaneous_fees', 'action' => 'edit', $miscellaneousFee['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'miscellaneous_fees', 'action' => 'delete', $miscellaneousFee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $miscellaneousFee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Miscellaneous Fee', true), array('controller' => 'miscellaneous_fees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Transportations');?></h3>
	<?php if (!empty($report['Transportation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Report Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($report['Transportation'] as $transportation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $transportation['id'];?></td>
			<td><?php echo $transportation['description'];?></td>
			<td><?php echo $transportation['amount'];?></td>
			<td><?php echo $transportation['report_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'transportations', 'action' => 'view', $transportation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'transportations', 'action' => 'edit', $transportation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'transportations', 'action' => 'delete', $transportation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transportation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transportation', true), array('controller' => 'transportations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
