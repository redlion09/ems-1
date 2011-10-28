<div class="rates form">
<?php echo $this->Form->create('Rate');?>
	<fieldset>
		<legend><?php __('Add Rate'); ?></legend>
	<?php
		echo $this->Form->input('expense', array('type'=>'select','options'=> array('Breakfast'=>'Breakfast','Lunch'=>'Lunch','Dinner'=>'Dinner','Lodging'=>'Lodging')));
		echo $this->Form->input('location_class', array('type'=>'select', 'options'=>array('A'=>'A', 'B'=>'B','C'=>'C','M'=>'M')));
		echo $this->Form->input('position_class', array('type'=>'select','options'=> array('RF'=>'Rank and File', 'SO'=>'Senior Officers', 'MS'=>'Managers and Secretaries')));
		echo $this->Form->input('rate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rates', true), array('action' => 'index'));?></li>
	</ul>
</div>