<nav class="navigation column" role="navigation">
	<span class="meta">
		<br />
		Spring 2017<br />
		Rhode Island School of Design (RISD)<br />
		GRAPH-3237-01 (16576)<br />
		Thursday 01:10pm – 06:10pm <br />
		Design Center, Room 501<br />
		<br />
		Instructor:<br />
		<a href="mailto:fperez02@risd.edu">Federico Pérez Villoro</a>
	</span>
	<ul class="menu">
		<?php foreach($pages->visible() as $item): ?>
		<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
			<a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
		</li>
		<?php endforeach ?>
	</ul>
</nav>