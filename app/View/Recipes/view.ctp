<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-540488a76b406c86"></script>
<?php 
$this->assign('title', $recipe['Recipe']['name']);
$this->assign('description', $recipe['Recipe']['how_to']);
$this->assign('keywords', $recipe['Recipe']['ingredients']);
?>

<ol class="breadcrumb">
        <li><?php echo __('RECETTES') ?></li>
        <li><?php echo $this->Html->link($type['RecipeType']['name'], array('controller' => 'recipes', 'action' => 'index_by_type', $recipe['RecipeType']['id'])) ?></li>
        <li class="active"><?php echo h($recipe['Recipe']['name']); ?></li>
</ol>


<div class="row ">
        <div class="col-sm-12 story" id='story'>
                <?php echo $this->Html->image($recipe['Recipe']['image'], array('width' => '100%')) ?>
        </div>
</div>

<div class="row">
        <div class="col-sm-10 col-sm-offset-1">

                <h1><?php echo h($recipe['Recipe']['name']); ?></h1>
                <div class="addthis_sharing_toolbox"></div>
                <h3><?php echo __('Ingredients'); ?></h3>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->

                <p>
                        <?php echo $recipe['Recipe']['ingredients']; ?>
                </p>
                <h3><?php echo __('How To'); ?></h3>
                <p>
                        <?php echo $recipe['Recipe']['how_to']; ?>
                </p>
                <div class="hidden-print">
                        <h3><?php echo __('Possible Product'); ?></h3>
                        <div class="row">
                                <?php foreach ($recipe['Product'] as $product): ?>
                                        <div class="col-sm-3">

                                                <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'view', $product['id'])) ?>" class="thumbnail">
                                                        <?php echo $this->Html->image($product['image'], array('class' => 'img-responsive')) ?>
                                                        <p>
                                                                <?php echo $product['name'] ?>
                                                        </p>
                                                </a>

                                        </div>
                                        


                                <?php endforeach; ?>
                        </div>
                </div>


        </div>
</div>
