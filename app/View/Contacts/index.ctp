<ol class="breadcrumb">
        <li><?php echo __('Contact') ?></li>

</ol>
<div class="row">
        <div class="col-sm-12">
                 <div class="row">
                <div class="col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2744.6213590560737!2d6.568562!3d46.535394000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c310e8195d02d%3A0xacd2a371fe8f08ba!2sEclair+Vuilleumier+S.A.!5e0!3m2!1sfr!2s!4v1404910468045" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                </div>
        </div>
        </div>
</div>
<div class="container">
        <div clss="row">
                <div class="col-sm-12">
                        <h1><?php echo __('Contact') ?></h1>
                </div>
                <div class="col-sm-6">
                        
                        <?php echo $this->Form->create('Contact'); ?>
                        <fieldset>
                                <legend><?php echo __('Envoyez-nous un message'); ?></legend>
                                <?php
                                $this->Helpers->load('Captcha.CaptchaForm');
                                echo $this->Form->input('firstname', array('class' => 'form-control'));
                                echo $this->Form->input('lastname', array('class' => 'form-control'));
                                echo $this->Form->input('email', array('class' => 'form-control'));
                                echo $this->Form->input('entreprise', array('class' => 'form-control'));
                                echo $this->Form->input('message', array('class' => 'form-control'));
                                echo $this->CaptchaForm->input('captcha');
                                ?>
                        </fieldset>
                        <br>
                        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
                        <?php echo $this->Form->end(); ?>
                        <br>
                </div>
                <div class="col-sm-4 col-sm-offset-1">

                        <address>
                                <strong>Eclair Vuilleumier S.A.</strong><br>
                                Route de Crochy 26<br>
                                1024 Ecublens <br>
                                <i class="fa fa-phone"></i> 021 691 77 34 <br>
                                <i class="fa fa-print"></i> 021 691 77 40 <br>
                                
                        </address>
                </div>

        </div>
</div>