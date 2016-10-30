<?php

namespace Services\NameResolver;

use \Services\NameResolver\NameResolverinterface;
use \Services\RepositoryInterface;

// get list of names
$students = array();

// check for duplicate first names
$classSize = count($array);

    // loop through name list
    function duplicatFinder($first_names) {
        $duplicateNames = array();
        for ($x = 0; $x < $classSize; $x++) {
            // if name appears more than once push into duplicate array
            $slicedArray = array_slice($first_names, $x)
            if (array_key_exists($first_names[$x], $slicedArray)) {
                array_push($duplicateNames, $first_names[$x]);
            }
        }
        return($duplicateNames);
    };

function displayNameResolver($array, $duplicateNames) {
    $duplicateSize = count($duplicateNames);
    $displayNames = array();
    for ($x = 0; $x < $classSize; $x++) {
            if (array_key_exists($array[$x]->$firstName, $duplicateNames)) {
                array_push($displayNames, ($array[$x]->$firstname + " " + $lastName[1]));
            } else {
                array_push($displayNames, ($array[$x]->$firstname));
            }
        
    }
    return($displayNames)
}


public function nameResolver($array) {
    $first_names = array_column($students, $firstName);
    $duplicates = duplicatFinder($first_names);
    return(displayNameResolver($array, $duplicates))
    
}
// add first name to $displayName + last initial if in duplicates array

    // loop through name list

// return names with display name