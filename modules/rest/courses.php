<?php
function GetCourses() {
    //$movies=array("Drama"=>5,"Comedies"=>6);
   

    $courses=array();
    $database=Database::get();
    $database->queryFunc('SELECT title FROM course',
		function($row) use (&$courses) {$courses[]=$row;  /*var_dump($row);echo$row->title;*/ }
		);
	 echo Json_encode($courses);
}
function PostCourses() {
    echo 'Hello';
}
function DeleteCourses() {
    echo 'Hello';
}
?>
