<div ><h2><a href="<?=$vars['object']->getURL()?>"><?=$vars['object']->getTitle()?></a></h2>
<?php echo $this->autop($this->parseHashtags($vars['object']->body)); //TODO: a better rendering algorithm ?></div>