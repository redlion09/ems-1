<div class="transportations view">
<h2><?php  __('Transportation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transportation['Transportation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transportation['Transportation']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transportation['Transportation']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Report'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($transportation['Report']['id'], array('controller' => 'reports', 'action' => 'view', $transportation['Report']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transportation', true), array('action' => 'edit', $transportation['Transportation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Transportation', true), array('action' => 'delete', $transportation['Transportation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transportation['Transportation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transportations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transportation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
