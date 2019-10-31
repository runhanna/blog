
<?php snippet('header') ?>
<div class="text-hero appear"><?= $page->text()->kirbytext() ?></div>
	<ul class="projects">
		<?php foreach ($page->children()->listed() as $project): ?>
		<li class="appear animation--delay--1">
			<a href="<?= $project->url() ?>">
				<?= $project->image()?>				
				<?= $project->title() ?>
			</a>

		</li>
		<?php endforeach ?>
	</ul>

<?php snippet('footer') ?>
