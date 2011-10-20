<div class="reports form">
<?php echo $this->Form->create('Report');?>
	<fieldset>
		<legend><?php __('Add Report'); ?></legend>
	<?php
		echo $this->Form->input('day');
		echo $this->Form->input('date');
		echo $this->Form->input('breakfast');
		echo $this->Form->input('lunch');
		echo $this->Form->input('dinner');
		echo $this->Form->input('user_id');
		echo $this->Form->input('liquidation_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reports', true), array('action' => 'index'));?></li>
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