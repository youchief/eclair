<div class="blocks view">
        <h2><?php echo __('Block'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($block['Block']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($block['Block']['name']); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit Block'), array('action' => 'edit', $block['Block']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete Block'), array('action' => 'delete', $block['Block']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $block['Block']['id'])); ?> 
        </div>
</div>
