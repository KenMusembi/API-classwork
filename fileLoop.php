<?php

class OneTime{
//class attribute
public $filename='fileLoop.php';

//constructor
public function __construct($filename){
  $this->filename=$filename;
}

//check whether the file exists
public function lawd(){
  if(file_exists($this->filename))
  return true;
  else
  return false;
}
//check whether it is readable
public function someka(){
  return is_readable($this->filename);
}
//check whether it is writtable
public function andika(){
  return is_writable($this->filename);
}


  public function getfilesize(){
    if(){
    }
  return $this->filesize;
}
//setting getfilesize
}
  public function setfilesize(){
    $this->filesize=filesize($this->filesize);
  }
}

fileLoop=new fileLoop('sample.txt');
echo 'the file'.$file->filename.'exists?'.$file->iko();
echo '<br/> my size';.$file->getfilesize().'bytes'
 ?>
