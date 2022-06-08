<?php
class clinic
{
    public $doctor;
    public $firstaid;

    public function check_first_aid()
    {
     if( $this->firstaid==0){echo "first aid is not sufficient";};
     if( $this->firstaid==1){echo "first aid is not sufficient";};
    }
    public function set_aid($x)
    {  
      $this->firstaid=$x;
    }
}
?>