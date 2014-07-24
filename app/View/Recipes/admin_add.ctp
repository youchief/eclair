<div class="recipes form">
        <?php echo $this->Form->create('Recipe', array('type'=>'file')); ?>
        <fieldset>
                <legend><?php echo __('Admin Add Recipe'); ?></legend>
                <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#fra" role="tab" data-toggle="tab">FRA</a></li>
                        <li><a href="#deu" role="tab" data-toggle="tab">DEU</a></li>
                        <li><a href="#ita" role="tab" data-toggle="tab">ITA</a></li>
                        <li><a href="#eng" role="tab" data-toggle="tab">ENG</a></li>
                </ul>
                <div class="tab-content">
                        <div class="tab-pane active" id="fra">
                                <?php
                                echo $this->Form->input('Recipe.name.fra', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Recipe.ingredients.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingredients'));
                                echo $this->Form->input('Recipe.how_to.fra', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'How To'));
                                ?>
                        </div>
                        <div class="tab-pane" id="deu">
                                <?php
                                 echo $this->Form->input('Recipe.name.deu', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Recipe.ingredients.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingredients'));
                                echo $this->Form->input('Recipe.how_to.deu', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'How To'));
                                ?>
                        </div>
                        <div class="tab-pane" id="ita">
                                <?php
                                echo $this->Form->input('Recipe.name.ita', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Recipe.ingredients.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingredients'));
                                echo $this->Form->input('Recipe.how_to.ita', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'How To'));
                                ?>
                        </div>
                        <div class="tab-pane" id="eng">
                                <?php
                                echo $this->Form->input('Recipe.name.eng', array('label' => 'Name', 'class' => 'form-control'));
                                echo $this->Form->input('Recipe.ingredients.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'Ingredients'));
                                echo $this->Form->input('Recipe.how_to.eng', array('class' => 'form-control', 'type' => 'textarea', 'label' => 'How To'));
                                ?>
                        </div>
                </div>



                <?php
                echo $this->Form->input('image', array('class' => 'form-control', 'type'=>'file'));
                echo $this->Form->input('Product', array('class' => 'form-control'));
                echo $this->Form->input('recipe_type_id', array('class' => 'form-control'));
                ?>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>


<?php $this->Html->scriptBlock("$('select').selectpicker();", array('inline'=>false))?>
