<div class="documents form">
<?php echo $this->Form->create('Document', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Edit Document'); ?></legend>
	<?php
        echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('Document.type',array('type'=>'select','options'=>array('Video','Text','Image','Sound')));
        echo $this->Form->input('archivo', array('type' => 'file', 'label'=>'Select a file:'));
		echo $this->Form->input('language');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
        <li><?php echo $this->Html->link(__('List Documents', true), array('action' => 'index'));?></li>
	</ul>
</div>