<?php

require 'easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('fof','http://xmlns.com/foaf/0.1/');



$newrdf = new \EasyRdf\Graph("https://salsa201401065.github.io/Supermarket-RDF/supermarket.rdf");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('foaf:name');

$i = 0;

foreach($allSubject as $subjek) {
    $name[$i]   = $newrdf->get($subjek,'foaf:name');
    $nim[$i]  = $newrdf->get($subjek,'foaf:nim');
    $img[$i]  = $newrdf->get($subjek,'foaf:img');
  
   
    $i++;
    }

?>