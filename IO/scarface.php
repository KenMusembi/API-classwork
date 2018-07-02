<?php

class zahli{
//directory location


public $prank_directory =__DIR__.'/prank';
public $prank_directory_c = __DIR__.'/prank_cracked';

public function __construct(){
//  echo is_dir($this->prank_directory);
//  echo '<br/>'.__DIR__;
}

public function decode_files(){
  //how you need to get filesize
//if ($handle = opendir($this->prank_directory)) {
//$testing12 = readdir($handle);
//$testing12 = scandir($$this->prank_directory);

//echo $testing12;
  //loop through the files to get the namespace
  if ($handle = opendir($this->prank_directory)) {

      while (false !== ($entry = readdir($handle))) {

          if ($entry != "." && $entry != "..") {
  //@TODO: remove letter from the filename
            //  echo "$entry\n";
              //@TODO:writeout the file with the new file_name
            //$string =  preg_replace('/[^0-9 ]+/','',$entry).'.jpg';

              //copy($this->prank_directory.'/'.$entry,$this->prank_cracked.'/'.$string);
$stringer =  preg_replace('/[^A-Za-z.]+/','',$entry);
echo $stringer;
copy($this->prank_directory.'/'.$entry, $this->prank_directory_c.'/'.$stringer );



          }
      }

      // split string by '-'

  }
}
}


$cracki_no_paye = new zahli();
$cracki_no_paye->decode_files();
 ?>
