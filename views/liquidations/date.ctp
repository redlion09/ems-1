<div class="liquidations form">
<?php echo $this->Form->create('Liquidation');?>
	<fieldset>
		<legend><?php __('Select Dates'); ?></legend>
	<?php
		echo $this->Form->input('Report.date');
		echo $this->Form->button('Add', array('type'=>'button', 'class'=>'actions date'));
		echo $this->Form->input('dates', array('type'=>'select', 'multiple'=>'multiple'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Next', true));?>
</div>
