<div class="span4 committee-photo">
	<span class="name"><?php echo(htmlspecialchars($item["committee"])) ?></span><br/>
	<span class="position"><?php echo(htmlspecialchars($item["name"])) ?></span>
	<a class="fancybox" href="#<?php echo(htmlspecialchars($item["id"])) ?>-bio" data-fancybox-group="gallery"><p class="plus-bio">bio</p></a><br/><a class="fancybox" href="#<?php echo(htmlspecialchars($item["id"])) ?>-committee" data-fancybox-group="gallery"><p class="plus-committee">committee</p></a>
	<img class="committee-photo" src="assets/img/<?php echo(htmlspecialchars($item["id"])) ?>.jpg">
</div>