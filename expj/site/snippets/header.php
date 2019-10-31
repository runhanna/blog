<!DOCTYPE html>
<html lang="en">

	<head>
		<?= css('assets/css/index.css') ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR|Yeon+Sung&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
	</head>
	
	<body>
		<header>
			<a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>
			<nav id="menu" class="menu">
				 <?php 
        // In the menu, we only fetch listed pages, i.e. the pages that have a prepended number in their foldername
        // We do not want to display links to unlisted `error`, `home`, or `sandbox` pages
        // More about page status: https://getkirby.com/docs/reference/panel/blueprints/page#statuses
        foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
			</nav>
		</header>


  