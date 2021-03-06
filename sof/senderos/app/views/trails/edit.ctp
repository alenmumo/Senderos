<div class="trails form">
<?php echo $this->Form->create('Trail', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Edit Trail'); ?></legend>
	<?php
        echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('name');
		echo $this->Form->input('description');
        echo $this->Form->input('archivo', array('type' => 'file', 'label'=>'Select a map image:'));
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Trail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Trail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trails', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>