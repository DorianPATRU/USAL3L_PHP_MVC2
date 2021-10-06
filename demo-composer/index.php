<?php
require 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();

echo '<h1>Bonjour</h1>';
echo '<p>Mon super Article qui mèle tout !!! ';
echo $slugify->slugify('Mon super Article qui mèle tout !!!');


$auditeur = new Cnam\Auditeur('Mike');