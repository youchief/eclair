<div class="attachments form">
    <?php echo $this->Form->create('Attachment', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Admin Add Attachment'); ?></legend>
        <?php
        echo $this->Form->input('embed', array('type' => 'textarea', 'class'=>'form-control'));
        echo $this->Form->input('path', array('type' => 'file'));
        ?>
    </fieldset>
    <hr>
    <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
    <?php echo $this->Form->end(); ?>
</div>
