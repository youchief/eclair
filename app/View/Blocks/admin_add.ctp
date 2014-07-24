<div class="blocks form">
<?php echo $this->Form->create('Block'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Block'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class'=>'form-control'));
                
                // attachment 
                echo $this->element('attachment_add', array(
                    'settings' => array(
                        
                        'className' => 'Block',
                        
                        'relations'=>array(
                            
                            'habtm' => array(
                                'joinTable' => 'blocks_attachments',
                                'foreignKey' => 'attachment_id',
                                'associationForeignKey' => 'block_id'
                            )
                        )
                    )
                ));
	?>
	</fieldset>
        <hr>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>
</div>
