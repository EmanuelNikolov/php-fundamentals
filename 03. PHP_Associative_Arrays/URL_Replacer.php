<?php
$input = trim(fgets(STDIN));
$result = preg_replace('~<a\shref="(.*?)">(.*?)<\/a>~', "[URL=$1]$2[/URL]", $input);
echo $result;