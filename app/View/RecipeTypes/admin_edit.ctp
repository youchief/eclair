<div class="recipeTypes form">
        <?php echo $this->Form->create('RecipeType'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit Recipe Type'); ?></legend>
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
                                echo $this->Form->input('RecipeType.name.fra', array('label' => 'Name', 'class' => 'form-control', 'value' => $this->request->data['nameTranslation'][0]['content']));
                                ?>
                        </div>
                        <div class="tab-pane" id="deu">
                                <?php
                                echo $this->Form->input('RecipeType.name.deu', array('label' => 'Name', 'class' => 'form-control', 'value' => $this->request->data['nameTranslation'][1]['content']));
                                ?>
                        </div>
                        <div class="tab-pane" id="ita">
                                <?php
                                echo $this->Form->input('RecipeType.name.ita', array('label' => 'Name', 'class' => 'form-control', 'value' => $this->request->data['nameTranslation'][2]['content']));
                                ?>
                        </div>
                        <div class="tab-pane" id="eng">
                                <?php
                                echo $this->Form->input('RecipeType.name.eng', array('label' => 'Name', 'class' => 'form-control', 'value' => $this->request->data['nameTranslation'][3]['content']));
                                ?>
                        </div>
                </div>
        </fieldset>
        <hr>
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
</div>
