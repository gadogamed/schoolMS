<?php
class testpaper{
public $time;
public $subject;
public $date;
public $grade;
public function get_grade()
{
 echo $this->grade;
 return$this->grade;
}
public function take_grade($x)
{
    $this->grade=$x;
}
}

?>