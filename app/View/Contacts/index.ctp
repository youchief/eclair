<div class="page-header">
        <h3><span class="glyphicon glyphicon-phone-alt"></span> Contact</h3>
</div>
<div clss="row">
        <div class="col-sm-6">
                <?php echo $this->Form->create('Contact'); ?>
                <fieldset>
                        <legend><?php echo __('Send us a message'); ?></legend>
                        <?php
                        echo $this->Form->input('firstname', array('class' => 'form-control'));
                        echo $this->Form->input('lastname', array('class' => 'form-control'));
                        echo $this->Form->input('email', array('class' => 'form-control'));
                        echo $this->Form->input('entreprise', array('class' => 'form-control'));
                        echo $this->Form->input('message', array('class' => 'form-control'));
                        ?>
                </fieldset>
                <hr>
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
                <?php echo $this->Form->end(); ?>
        </div>
        <div class="col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2744.6213590560737!2d6.568562!3d46.535394000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c310e8195d02d%3A0xacd2a371fe8f08ba!2sEclair+Vuilleumier+S.A.!5e0!3m2!1sfr!2s!4v1404910468045" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
</div>