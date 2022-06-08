<?php 
  class  user 
  {
  public $username;
  public $address;
  public $id;
  public $phone_number;
 public $dateofbirth;
 public $type;
 public $email;
  public $pass;
  public $home;
public function login($username,$userpass)
  {
   $datafile=fopen("userdata.txt",'a+');
   $i=0;
   $flag=1;
   $savedusername="";
   $savedpass="";
   $type="";
      while(!feof($datafile))
     {
          //line by line
          $line=fgets($datafile);
          //collect data from every line
          while($line[$i]!=null)
          {
            if($line[$i]=='~'){$i++;$flag++;}
            if($flag==1){$savedusername.=$line[$i];}
            if($flag==2){$savedpass.=$line[$i];}
            if($flag==3){$type.=$line[$i];}
            $i++;
          }
         if($username==$savedusername && $userpass==$savedpass)
         {
           if($type=="student"){header('Location:student_view.html');}
           if($type=="teacher"){header('Location:teacher_view.html');}
           if($type=="manager"){header('Location:manager_view.html');}
           if($type=="admin"){header('Location:admin_view.html');}
           if($type=="secretary"){header('Location:secretary_view.html');}
           if($type=="student affairs"){header('Location:studentaffair_view.html');}
          }
         else{echo"username or password are incorrect ";}
         $flag=1;
         $i=0;
         $savedusername="";
         $savedpass="";
         $type="";
     }
  }
  }
class manager extends user
{

}
class admin extends user
{
  public function add_user(user $l,$datafile)
  {
    if($l->username!=null && $l->id!=null && $l->pass!=null && $l->type!=null)
    {
     $write=fwrite($datafile,"$l->username~$l->pass~$l->type~$l->id~\n");
    }
    else{echo "missing info";}
  }
}
class student extends user
{
 public $parent_phone;
 public $class;
 public $grade;
public function show_schedual()
{
 
}
public function recieve()
{

}
}
class teatcher extends user
{

  
}
class secretary extends user
{

}
class student_affairs extends user
{

}
class doctor extends user
{
  
}
?>