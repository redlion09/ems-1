<div class="announcementsTags form">
<?php echo $this->Form->create('AnnouncementsTag');?>
	<fieldset>
		<legend><?php __('Add Announcements Tag'); ?></legend>
	<?php
		echo $this->Form->input('announcement_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Announcements Tags', true), array('action' => 'index'));?></li>
	</ul>
</div>