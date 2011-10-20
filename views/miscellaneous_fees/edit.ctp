<div class="miscellaneousFees form">
<?php echo $this->Form->create('MiscellaneousFee');?>
	<fieldset>
		<legend><?php __('Edit Miscellaneous Fee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('amount');
		echo $this->Form->input('report_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('MiscellaneousFee.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('MiscellaneousFee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Miscellaneous Fees', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reports', true), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report', true), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>