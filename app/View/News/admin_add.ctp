<div class="news form">
        <?php echo $this->Form->create('News', array('type'=>'file')); ?>
        <fieldset>
                <legend><?php echo __('Admin Add News'); ?></legend>
                <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#fra" role="tab" data-toggle="tab">FRA</a></li>
                        <li><a href="#deu" role="tab" data-toggle="tab">DEU</a></li>
                        <li><a href="#ita" role="tab" data-toggle="tab">ITA</a></li>
                        <li><a href="#eng" role="tab" data-toggle="tab">ENG</a></li>
                </ul>
                <div class="tab-content">
                        <div class="tab-pane active" id="fra">
                                <?php
                                echo $this->Form->input('News.title.fra', array('label' => 'Title', 'class' => 'form-control'));
                                echo $this->Form->input('News.description.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                ?>
                        </div>
                        <div class="tab-pane" id="deu">
                                <?php
                                echo $this->Form->input('News.title.deu', array('label' => 'Title', 'class' => 'form-control'));
                                echo $this->Form->input('News.description.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                ?>
                        </div>
                        <div class="tab-pane" id="ita">
                                <?php
                                echo $this->Form->input('News.title.ita', array('label' => 'Title', 'class' => 'form-control'));
                                echo $this->Form->input('News.description.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                ?>
                        </div>
                        <div class="tab-pane" id="eng">
                                <?php
                                echo $this->Form->input('News.title.eng', array('label' => 'Title', 'class' => 'form-control'));
                                echo $this->Form->input('News.description.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                ?>
                        </div>
                </div>
                <?php
                echo $this->Form->input('image', array('class' => 'form-control', 'type'=>'file'));

                echo $this->Form->input('start', array('class' => 'date'));

                echo $this->Form->input('end', array('class' => 'date'));
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
