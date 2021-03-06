<div class="points index">
	<h2><?php __('Points');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('cordx');?></th>
			<th><?php echo $this->Paginator->sort('cordy');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('trail_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($points as $point):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $point['Point']['name']; ?>&nbsp;</td>
		<td><?php echo $point['Point']['cordx']; ?>&nbsp;</td>
		<td><?php echo $point['Point']['cordy']; ?>&nbsp;</td>
		<td><?php echo $point['Point']['description']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($point['Trail']['name'], array('controller' => 'trails', 'action' => 'view', $point['Trail']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $point['Point']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $point['Point']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $point['Point']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $point['Point']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Point', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trails', true), array('controller' => 'trails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trail', true), array('controller' => 'trails', 'action' => 'add')); ?> </li>
	</ul>
</div>