<?php 
// create a fallback for the variables we are using
$title = (!isset($title)) ? '' : $title; 
$content = (!isset($content)) ? '' : $content; 
$action = ( $status == "create" ) ? myUrl("admin/update", true) : myUrl("admin/update/$id", true); 
?>

<h2><?=$GLOBALS['language'][$status.'_title']?></h2>

<p><?=$GLOBALS['language'][$status.'_description']?></p>

<form class="cms-form clearfix" method="post" action="<?=$action?>">
	<input type="hidden" name="path" value="<?=$path?>" />

	<label for="title">Title</label>
	<input type="text" id="title" name="title" value="<?=$title?>" />

	<label for="content">Content</label>
	<textarea id="content" name="content"><?=$content?></textarea>

	<label for="tags">Tags</label>
	<input type="text" name="tags" id="tags" value="<?=$tags?>" />
	
    <label for="template">Template</label>
    <?=Template::doList($template);?>
    
	<input type="submit" value="<?=$GLOBALS['language'][$status.'_button']?>" id="edit-button" class="button" />
</form>

<script src="http://code.jquery.com/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=myCDN()?>js/libs/jquery-ui-1.8.core-and-interactions.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=myCDN()?>js/libs/jquery-ui-1.8.autocomplete.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=myCDN()?>js/plugins/tag-it.js" type="text/javascript" charset="utf-8"></script>

<script>
	$(document).ready(function(){
		$("#tags").tagit({
			availableTags: []
		});
	});
</script>
