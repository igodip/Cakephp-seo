<div class="seoUrls view">
<h2><?php  echo __('Seo Url'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($seoUrl['SeoUrl']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($seoUrl['SeoUrl']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastmod'); ?></dt>
		<dd>
			<?php echo h($seoUrl['SeoUrl']['lastmod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Changefraq'); ?></dt>
		<dd>
			<?php echo h($seoUrl['SeoUrl']['changefraq']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($seoUrl['SeoUrl']['priority']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seo Url'), array('action' => 'edit', $seoUrl['SeoUrl']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seo Url'), array('action' => 'delete', $seoUrl['SeoUrl']['ID']), null, __('Are you sure you want to delete # %s?', $seoUrl['SeoUrl']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seo Urls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seo Url'), array('action' => 'add')); ?> </li>
	</ul>
</div>
