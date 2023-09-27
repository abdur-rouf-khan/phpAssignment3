<?php 

$studentsGrates = [
    ['Math' => 80, 'English' => 90, 'Science' => 75],
    ['Math' => 85, 'English' => 70, 'Science' => 95],
    ['Math' => 90, 'English' => 85, 'Science' => 80]
];

function calculateAverageGrade($studentsGrates) {
    foreach($studentsGrates as $studentsGrate){
        $sum = array_sum($studentsGrate);
        $average = $sum / count($studentsGrate);
        echo "Average grade: " . $average . "\n";
    }
    
}
calculateAverageGrade($studentsGrates);





