<div class="products form">
        <?php echo $this->Form->create('Product', array('type'=>'file')); ?>
        <fieldset>
                <legend><?php echo __('Admin Add Product'); ?></legend>
                <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#fra" role="tab" data-toggle="tab">FRA</a></li>
                        <li><a href="#deu" role="tab" data-toggle="tab">DEU</a></li>
                        <li><a href="#ita" role="tab" data-toggle="tab">ITA</a></li>
                        <li><a href="#eng" role="tab" data-toggle="tab">ENG</a></li>
                </ul>
                <div class="tab-content">
                        <div class="tab-pane active" id="fra">
                                <?php
                                echo $this->Form->input('Product.name.fra', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Product.description.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                echo $this->Form->input('Product.ingredients.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingedients'));
                                echo $this->Form->input('Product.alergy_informations.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Alergy Informations'));
                                echo $this->Form->input('Product.energy_value.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Energy Value'));
                                ?>
                        </div>
                        <div class="tab-pane" id="deu">
                                <?php
                                echo $this->Form->input('Product.name.deu', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Product.description.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                echo $this->Form->input('Product.ingredients.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingedients'));
                                echo $this->Form->input('Product.alergy_informations.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Alergy Informations'));
                                 echo $this->Form->input('Product.energy_value.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Energy Value'));
                                ?>
                        </div>
                        <div class="tab-pane" id="ita">
                                <?php
                                echo $this->Form->input('Product.name.ita', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Product.description.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                echo $this->Form->input('Product.ingredients.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingedients'));
                                echo $this->Form->input('Product.alergy_informations.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Alergy Informations'));
                                 echo $this->Form->input('Product.energy_value.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Energy Value'));
                                ?>
                        </div>
                        <div class="tab-pane" id="eng">
                                <?php
                                echo $this->Form->input('Product.name.eng', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Product.description.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Description'));
                                echo $this->Form->input('Product.ingredients.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingedients'));
                                echo $this->Form->input('Product.alergy_informations.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Alergy Informations'));
                                 echo $this->Form->input('Product.energy_value.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Energy Value'));
                                ?>
                        </div>
                </div>
                <?php
                echo $this->Form->input('image', array('class' => 'form-control', 'type'=>'file'));
                echo $this->Form->input('new', array('class' => 'checkbox'));
                echo $this->Form->input('pro', array('class' => 'checkbox'));
                echo $this->Form->input('order', array('class' => 'form-control'));
                echo $this->Form->input('type_id', array('class' => 'form-control'));
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
