<div class="seoUrls form">
<?php echo $this->Form->create('SeoUrl'); ?>
	<fieldset>
		<legend><?php echo __('Add Seo Url'); ?></legend>
	<?php
		echo $this->Form->input('url');
		echo $this->Form->input('keywords');
		echo $this->Form->input('description');
		echo $this->Form->input('lastmod');
		echo $this->Form->input('changefreq');
		echo $this->Form->input('priority');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seo Urls'), array('action' => 'index')); ?></li>
	</ul>
</div>
