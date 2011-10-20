<div class="liquidations form">
<?php echo $this->Form->create('Liquidation');?>
	<fieldset>
		<legend><?php __('Edit Liquidation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lodging');
		echo $this->Form->input('total');
		echo $this->Form->input('isAccepted');
		echo $this->Form->input('user_id');
		echo $this->Form->input('location_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Liquidation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Liquidation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Liquidations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>