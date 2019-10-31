
<?php snippet('header') ?>
	<ul class="gallery">
		<?php foreach ($page->images() as $image): ?>
			<li>
				<a href="<?= $image->url() ?>">
					<?= $image->resize(600) ?>				
				</a>
			</li>
		<?php endforeach ?>
	</ul>

<?php snippet('footer') ?>
