<div class="miscellaneousFees view">
<h2><?php  __('Miscellaneous Fee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miscellaneousFee['MiscellaneousFee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miscellaneousFee['MiscellaneousFee']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miscellaneousFee['MiscellaneousFee']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Report'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($miscellaneousFee['Report']['id'], array('controller' => 'reports', 'action' => 'view', $miscellaneousFee['Report']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Miscellaneous Fee', true), array('action' => 'edit', $miscellaneousFee['MiscellaneousFee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Miscellaneous Fee', true), array('action' => 'delete', $miscellaneousFee['MiscellaneousFee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $miscellaneousFee['MiscellaneousFee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Fees', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Miscellaneous Fee', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
