<div class="types form">
        <?php echo $this->Form->create('Type', array('type' => 'file')); ?>
        <legend><?php echo __('Admin Add Edit'); ?></legend>
        <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#fra" role="tab" data-toggle="tab">FRA</a></li>
                <li><a href="#deu" role="tab" data-toggle="tab">DEU</a></li>
                <li><a href="#ita" role="tab" data-toggle="tab">ITA</a></li>
                <li><a href="#eng" role="tab" data-toggle="tab">ENG</a></li>
        </ul>
        <div class="tab-content">
                <?php echo $this->Form->input('id'); ?>

                <div class="tab-pane active" id="fra">
                        <?php
                        echo $this->Form->input('Type.name.fra', array('label' => 'Name', 'class' => 'form-control', 'value' => $this->request->data['nameTranslation'][0]['content']));
                        echo $this->Form->input('Type.description.fra', array('label' => 'Description', 'type'=>'textarea', 'class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][0]['content']));
                        ?>
                </div>
                <div class="tab-pane" id="deu">
                        <?php
                        echo $this->Form->input('Type.name.deu', array('label' => 'Name', 'class' => 'form-control','value' => $this->request->data['nameTranslation'][1]['content']));
                        echo $this->Form->input('Type.description.deu', array('label' => 'Description', 'type'=>'textarea','class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][1]['content']));
                        ?>
                </div>
                <div class="tab-pane" id="ita">
                        <?php
                        echo $this->Form->input('Type.name.ita', array('label' => 'Name', 'class' => 'form-control', 'value' => $this->request->data['nameTranslation'][2]['content']));
                        echo $this->Form->input('Type.description.ita', array('label' => 'Description', 'type'=>'textarea','class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][2]['content']));
                        ?>
                </div>
                <div class="tab-pane" id="eng">
                        <?php
                        echo $this->Form->input('Type.name.eng', array('label' => 'Name', 'class' => 'form-control','value' => $this->request->data['nameTranslation'][3]['content']));
                        echo $this->Form->input('Type.description.eng', array('label' => 'Description', 'type'=>'textarea','class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][3]['content']));
                        ?>
                </div>
        </div>

        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>