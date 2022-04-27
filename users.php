<?php 
  class  user 
  {
      public $name;
      public $address;
      public $id;
      public $phone_number;
      public $attendance;
      public function take_attendance()
      {

      }
      public function show_attendance($x)
      {
        
      }
  }
  class manager extends user
  {
    
  }
  class student extends user
  {

  }
  class teatcher extends user
  {

  }
  class staff extends user{

  }
?>