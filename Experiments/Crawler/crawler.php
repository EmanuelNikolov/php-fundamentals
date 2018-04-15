<?php

$dom = new DOMDocument();
$dom->loadHTML("http://investmentpolicyhub.unctad.org/IIA/mappedContent");
$nodeList = $dom->getElementsByTagName("td");
echo $nodeList->length;