<div class="announcementsTags view">
<h2><?php  __('Announcements Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $announcementsTag['AnnouncementsTag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Announcement Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $announcementsTag['AnnouncementsTag']['announcement_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tag Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $announcementsTag['AnnouncementsTag']['tag_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Announcements Tag', true), array('action' => 'edit', $announcementsTag['AnnouncementsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Announcements Tag', true), array('action' => 'delete', $announcementsTag['AnnouncementsTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $announcementsTag['AnnouncementsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Announcements Tags', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Announcements Tag', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
