<div class="attachments index">
        <h2><?php echo __('Attachments'); ?> <?php echo $this->Html->link(\__('+'), array('action' => 'add'), array('class'=>'btn btn-success btn-sm')); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('date'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('type'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('subtype'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('size'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('path'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('embed'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('description'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('metadata'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($attachments as $attachment): ?>
	<tr>
		<td><?php echo h($attachment['Attachment']['id']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['name']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['date']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['type']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['subtype']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['size']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['path']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['embed']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['description']); ?>&nbsp;</td>
		<td><?php echo h($attachment['Attachment']['metadata']); ?>&nbsp;</td>
		<td class="actions">
		<div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attachment['Attachment']['id']), array('class'=>'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attachment['Attachment']['id']), array('class'=>'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attachment['Attachment']['id']), array('class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $attachment['Attachment']['id'])); ?>
		</div>
		</td>
	</tr>
<?php endforeach; ?>
        </table>
        <div class="well well-sm">
                <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
        </div>
        <ul class="pagination">
                <?php echo '<li>'.$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')).'</li>' ?>
                <?php echo '<li>'.$this->Paginator->numbers(array('separator' => '')).'</li>' ?>
                <?php echo '<li>'.$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')).'</li>' ?>
        </ul>
</div>
