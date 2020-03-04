<?php
include_once('autoload.php');

$link = Tag::a();
$link->setAttribute('href', 'http://google.com');
$link->prependBody('text');
echo $link;