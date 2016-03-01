<a href="<?php print $node_url; ?>">
	<article id="node-<?php print $node->nid; ?>" style="background-image: url('<?php print file_create_url($content['field_cover_image']['#items'][0]['uri']); ?>')">
	   <span class="article-title"><?php print $title; ?></span>
	</article>
</a>