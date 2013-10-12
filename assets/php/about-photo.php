<div class="span3 photo">
	<span class="name"><?php echo(htmlspecialchars($item["name"])) ?></span><br/>
	<span class="position"><?php echo(htmlspecialchars($item["position"])) ?></span><br/>
	<i class="icon-plus-sign"> bio</i><br/>
	<a class="fancybox" href="#<?php echo(htmlspecialchars($item["id"])) ?>" data-fancybox-group="gallery"><img class="photo" src="assets/img/<?php echo(htmlspecialchars($item["id"])) ?>.jpg"></a>
</div>