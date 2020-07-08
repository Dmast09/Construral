<?php

$collection = (new MongoDB\Client)->Construral->workers;

$document = $collection->findOne();

var_dump($document);