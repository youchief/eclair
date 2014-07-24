<div class="attachments view">
        <h2><?php echo __('Attachment'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['subtype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embed'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['embed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metadata'); ?></dt>
		<dd>
			<?php echo h($attachment['Attachment']['metadata']); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit Attachment'), array('action' => 'edit', $attachment['Attachment']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete Attachment'), array('action' => 'delete', $attachment['Attachment']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $attachment['Attachment']['id'])); ?> 
        </div>
</div>
        <div class="related">
                <h3><?php echo __('Related Hashtags'); ?></h3>
                <?php if (!empty($attachment['Hashtag'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($attachment['Hashtag'] as $hashtag): ?>
		<tr>
			<td><?php echo $hashtag['id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hashtags', 'action' => 'view', $hashtag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hashtags', 'action' => 'edit', $hashtag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hashtags', 'action' => 'delete', $hashtag['id']), null, __('Are you sure you want to delete # %s?', $hashtag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

        </div>
