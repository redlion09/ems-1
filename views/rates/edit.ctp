<div class="rates form">
<?php echo $this->Form->create('Rate');?>
	<fieldset>
		<legend><?php __('Edit Rate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('expense');
		echo $this->Form->input('location_class');
		echo $this->Form->input('position_class');
		echo $this->Form->input('rate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Rate.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Rate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rates', true), array('action' => 'index'));?></li>
	</ul>
</div>