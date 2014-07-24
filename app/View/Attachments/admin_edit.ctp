<div class="attachments form">
<?php echo $this->Form->create('Attachment'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Attachment'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class'=>'form-control'));
		echo $this->Form->input('name', array('class'=>'form-control'));
		echo $this->Form->input('date', array('class'=>'form-control'));
		echo $this->Form->input('type', array('class'=>'form-control'));
		echo $this->Form->input('subtype', array('class'=>'form-control'));
		echo $this->Form->input('size', array('class'=>'form-control'));
		echo $this->Form->input('path', array('class'=>'form-control'));
		echo $this->Form->input('embed', array('class'=>'form-control'));
		echo $this->Form->input('description', array('class'=>'form-control'));
		echo $this->Form->input('metadata', array('class'=>'form-control'));
		echo $this->Form->input('Hashtag', array('class'=>'form-control'));
	?>
	</fieldset>
        <hr>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
