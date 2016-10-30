<?php

namespace Services\NameResolver;

use \Services\NameResolver\NameResolverinterface;
use \Services\RepositoryInterface;

// get list of names
$students = array();

$first_names = array_column($records, $firstName);
// check for duplicate first names
$classSize = count($array);
$duplicateNames = array();
    // loop through name list
    function duplicatFinder($array) {
        
        for ($x = 0; $x < $classSize; $x++) {
            // if name appears more than once push into duplicate array
            $slicedArray = 
            if (array_key_exists($array[i], $array)) {
                
            }
        }
    };
echo($students);

function displayNameAdder($array, $duplicateNames) {
    $duplicateSize = count($duplicateNames);
    for ($x = 0; $x < $classSize; $x++) {
        for ($y = 0; $y < $duplicateSize; $y++) {
            if ($array[$x] === $duplicateNames[$y]) {
                //$displayName = ($firstname + $lastName[1]);
            } else {
                //$displayName = $firstname;
            }
        }
    }
}

// add first name to $displayName + last initial if in duplicates array

    // loop through name list

// return names with display name