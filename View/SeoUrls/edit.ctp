<div class="seoUrls form">
<?php echo $this->Form->create('SeoUrl'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seo Url'); ?></legend>
	<?php
		echo $this->Form->input('ID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SeoUrl.ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SeoUrl.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seo Urls'), array('action' => 'index')); ?></li>
	</ul>
</div>
