<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Actions') ?></li>
		<li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
	</ul>
</nav>
<div class="books form large-9 medium-8 columns content">
	<?= $this->Form->create($book) ?>
	<fieldset>
		<legend><?= __('Add Book') ?></legend>
		<?php
			echo $this->Form->input(__('title'));
			echo $this->Form->input(__('author'));
			echo $this->Form->input(__('price'));
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>