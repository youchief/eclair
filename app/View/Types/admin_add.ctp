<div class="types form">
        <?php echo $this->Form->create('Type'); ?>
        <legend><?php echo __('Admin Add Type'); ?></legend>
        <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#fra" role="tab" data-toggle="tab">FRA</a></li>
                <li><a href="#deu" role="tab" data-toggle="tab">DEU</a></li>
                <li><a href="#ita" role="tab" data-toggle="tab">ITA</a></li>
                <li><a href="#eng" role="tab" data-toggle="tab">ENG</a></li>
        </ul>
        <div class="tab-content">
                <div class="tab-pane active" id="fra">
                        <?php
                        echo $this->Form->input('Type.name.fra', array('label' => 'Name', 'class' => 'form-control'));
                        echo $this->Form->input('Type.description.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                        ?>
                </div>
                <div class="tab-pane" id="deu">
                        <?php
                        echo $this->Form->input('Type.name.deu', array('label' => 'Name', 'class' => 'form-control'));
                        echo $this->Form->input('Type.description.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                        ?>
                </div>
                <div class="tab-pane" id="ita">
                        <?php
                        echo $this->Form->input('Type.name.ita', array('label' => 'Name', 'class' => 'form-control'));
                        echo $this->Form->input('Type.description.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                        ?>
                </div>
               <div class="tab-pane" id="eng">
                        <?php
                        echo $this->Form->input('Type.name.eng', array('label' => 'Name', 'class' => 'form-control'));
                        echo $this->Form->input('Type.description.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                        ?>
                </div>
        </div>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>





<!-- Tab panes -->
