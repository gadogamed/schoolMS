<?php
class student_affair
{
    public $datafile=fopen("schedule.txt",'a+');
    public function set_schedule()
    {
        $write=fwrite($this->datafile,"\n");
    }
    public function show_student_info($id)
    {
        $i=0;
        $flag=1;
        $datafile=fopen("userdata.txt",'a+');
        $userid="";
        while(!feof($datafile))
        {
          $line=fgets($datafile);
          while($line[$i]!=null)
          {
            if($line[$i]=='~'){$i++;$flag++;}
            if($flag==4){$userid.=$line[$i];}
            $i++;
          }
         if($id==$userid){
           echo $line;
            break;
          } 
        }
    }
}
?>