<?php

require 'easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');


$newrdf = new \EasyRdf\Graph("https://salsa201401065.github.io/Supermarket-RDF/supermarket.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('dc:title');

$i = 0;

foreach($allSubject as $subjek) {
    $title[$i]   = $newrdf->get($subjek,'dc:title');
    $price[$i]  = $newrdf->get($subjek,'dc:price');
    $image[$i]  = $newrdf->get($subjek,'dc:image');
  
   
    $i++;
    }

?>