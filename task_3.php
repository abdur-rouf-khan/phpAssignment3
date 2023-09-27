<?php 

function sortGrades($grades) {
    rsort($grades);
    print_r($grades);
}

$grades = [85, 92, 78, 88, 95];
sortGrades($grades);

$grades = [85, 92, 78, 88, 95];

function arraySorting($grades){
    rsort($grades);
    print_r($grades);
}

arraySorting($grades);


