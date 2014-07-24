<div class="recipeTypes view">
        <h2><?php echo __('Recipe Type'); ?></h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recipeType['RecipeType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($recipeType['RecipeType']['name']); ?>
			&nbsp;
		</dd>
        </dl>
</div>
<div class="actions">

        <div class="btn-group">
                		<?php echo $this->Html->link(__('Edit Recipe Type'), array('action' => 'edit', $recipeType['RecipeType']['id']), array('class'=>'btn btn-sm btn-default')); ?>
		<?php echo $this->Form->postLink(__('Delete Recipe Type'), array('action' => 'delete', $recipeType['RecipeType']['id']), array('class'=>'btn btn-sm btn-danger'), __('Are you sure you want to delete # %s?', $recipeType['RecipeType']['id'])); ?> 
        </div>
</div>
        <div class="related">
                <h3><?php echo __('Related Recipes'); ?></h3>
                <?php if (!empty($recipeType['Recipe'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ingredients'); ?></th>
		<th><?php echo __('How To'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Recipe Type Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($recipeType['Recipe'] as $recipe): ?>
		<tr>
			<td><?php echo $recipe['id']; ?></td>
			<td><?php echo $recipe['created']; ?></td>
			<td><?php echo $recipe['modified']; ?></td>
			<td><?php echo $recipe['name']; ?></td>
			<td><?php echo $recipe['ingredients']; ?></td>
			<td><?php echo $recipe['how_to']; ?></td>
			<td><?php echo $recipe['image']; ?></td>
			<td><?php echo $recipe['product_id']; ?></td>
			<td><?php echo $recipe['recipe_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recipes', 'action' => 'view', $recipe['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recipes', 'action' => 'edit', $recipe['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recipes', 'action' => 'delete', $recipe['id']), null, __('Are you sure you want to delete # %s?', $recipe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

        </div>
