<div class="news form">
        <?php echo $this->Form->create('News'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit News'); ?></legend>
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
                                echo $this->Form->input('News.title.fra', array('label' => 'Title', 'class' => 'form-control', 'value' => $this->request->data['titleTranslation'][0]['content']));
                                echo $this->Form->input('News.description.fra', array('label' => 'Description', 'type' => 'textarea', 'class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][0]['content']));
                                ?>
                        </div>
                        <div class="tab-pane" id="deu">
                                <?php
                                echo $this->Form->input('News.title.deu', array('label' => 'Title', 'class' => 'form-control', 'value' => $this->request->data['titleTranslation'][1]['content']));
                                echo $this->Form->input('News.description.deu', array('label' => 'Description', 'type' => 'textarea', 'class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][1]['content']));
                                ?>
                        </div>
                        <div class="tab-pane" id="ita">
                                <?php
                                echo $this->Form->input('News.title.ita', array('label' => 'Title', 'class' => 'form-control', 'value' => $this->request->data['titleTranslation'][2]['content']));
                                echo $this->Form->input('News.description.ita', array('label' => 'Description', 'type' => 'textarea', 'class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][2]['content']));
                                ?>
                        </div>
                        <div class="tab-pane" id="eng">
                                <?php
                                echo $this->Form->input('News.title.eng', array('label' => 'Title', 'class' => 'form-control', 'value' => $this->request->data['titleTranslation'][3]['content']));
                                echo $this->Form->input('News.description.eng', array('label' => 'Description', 'type' => 'textarea', 'class' => 'form-control', 'value' => $this->request->data['descriptionTranslation'][3]['content']));
                                ?>
                        </div>
                </div>
                <?php
                echo $this->Form->input('id', array('class' => 'form-control'));
                echo $this->Form->input('image', array('class' => 'form-control'));
                echo $this->Form->input('start', array('class' => 'form-control'));
                echo $this->Form->input('end', array('class' => 'form-control'));
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
