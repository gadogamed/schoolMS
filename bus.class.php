<?php
class bus
{
public $plates;
public $driver;
public $route;
public $number;
public function show_all_info($plates,$number,$driver,$route)
{
  echo $plates+" "+$number+" "+$driver+" "+$route;
}
}
?>