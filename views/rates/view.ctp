<div class="rates view">
<h2><?php  __('Rate');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rate['Rate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Expense'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rate['Rate']['expense']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location Class'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rate['Rate']['location_class']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position Class'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rate['Rate']['position_class']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rate['Rate']['rate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rate', true), array('action' => 'edit', $rate['Rate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Rate', true), array('action' => 'delete', $rate['Rate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rate['Rate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
