<div class="seoUrls index">
	<h2><?php echo __('Seo Urls'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('lastmod'); ?></th>
			<th><?php echo $this->Paginator->sort('changefraq'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seoUrls as $seoUrl): ?>
	<tr>
		<td><?php echo h($seoUrl['SeoUrl']['ID']); ?>&nbsp;</td>
		<td><?php echo h($seoUrl['SeoUrl']['location']); ?>&nbsp;</td>
		<td><?php echo h($seoUrl['SeoUrl']['lastmod']); ?>&nbsp;</td>
		<td><?php echo h($seoUrl['SeoUrl']['changefraq']); ?>&nbsp;</td>
		<td><?php echo h($seoUrl['SeoUrl']['priority']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seoUrl['SeoUrl']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seoUrl['SeoUrl']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seoUrl['SeoUrl']['ID']), null, __('Are you sure you want to delete # %s?', $seoUrl['SeoUrl']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Seo Url'), array('action' => 'add')); ?></li>
	</ul>
</div>
