<?php 
$studentGrades = [
    'Masud' => ['Math' => 55, 'English' => 88, 'Science' => 92],
    'Jony' => ['Math' => 95, 'English' => 90, 'Science' => 86],
    'Osman' => ['Math' => 78, 'English' => 85, 'Science' => 88],
];

function calculateAndPrintGrade($studentGrades){
    foreach($studentGrades as $studentName=>$subjects){
        $totalMarks=array_sum($subjects);
        $averageMarks=$totalMarks / count($subjects);
        $grade =' ' ;
        if($averageMarks >=80){
            $grade='A+';
        }elseif($averageMarks >=70){
            $grade='A';
        }elseif($averageMarks >=60){
            $grade='B';
        }elseif($averageMarks >=50){
            $grade='C';
        }elseif($averageMarks >=40){
            $grade='D';
        }elseif($averageMarks <40){
            $grade='F';
        }
        echo "Student: $studentName\n";
        echo "Average Marks: $averageMarks\n";
        echo "Grade: $grade\n\n";
    }
}
 calculateAndPrintGrade($studentGrades);
?>