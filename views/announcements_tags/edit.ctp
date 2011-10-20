<div class="announcementsTags form">
<?php echo $this->Form->create('AnnouncementsTag');?>
	<fieldset>
		<legend><?php __('Edit Announcements Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('announcement_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AnnouncementsTag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AnnouncementsTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Announcements Tags', true), array('action' => 'index'));?></li>
	</ul>
</div>