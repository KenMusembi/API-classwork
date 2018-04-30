<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains names(IP address,surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called feature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/
//first attempt
/*
$first_name = array("Mutiso","wabwire","musembi");
$second_name = array("ken","moses","james");
$surname = array("mumbua","mundama","barasa");
$country_code = +254;
$number = array("710701791","731212129","732191292");
$country = "KENYA";

echo  "<a target = '_blank' href='".$first_name[0]. "' >$first_name[0] </a> . $second_name[0] . $surname[0] . ($country_code . $number[0] . [$country])" ;
echo "<br>";
echo  "<a target = '_blank' href='".$first_name[1]. "' >$first_name[1] </a>. $second_name[1] . $surname[1] . ($country_code . $number[1] . [$country])";
echo "<br>";
echo "<a target = '_blank' href='".$first_name[2]. "' >$first_name[2] </a> . $second_name[2] . $surname[2] . ($country_code . $number[2] . [$country])";
//new begining
echo "<br>";
echo "<br>";
echo "<br>";
*/
$one = array("66.249.72.240", "Chirchir","Olesaningo , Mosiro, 0760387482 , KENYA, +254_", "<br>");
$two = array( "192.168.170.25", "Wambua","Doe Mumbua.080023450.KENYA.+254_",  "<br> ");
$three = array("113.193.241.186", "Vonbora","Katherina Luther.0600990033.GERMANY.+32_","  <br>");
$four = array("197.176.231.200" ,"Boromir","Grommit Wallace.0100873901.IRELAND.+98_","  <br>");
$five = array("113.193.241.186","Faramir","Edwards Jonathan.0200983729.AMERICA.+1_","  <br>");
$six = array("77.77.7.7","Asaph","Aslan King.02990033.ISRAEL.+2_","  <br>");
$seven = array("172.53.14.2","Huan","Valinor Hound.02880023.SPAIN.+26_","  <br>");
$eight = array("113.193.241.18.Otoyo,Wafula Joel.0777799920.KENYA.+254_  <br>");
$nine = array("173.190.141.16.Mapete,Mwambingu Simba.0987483292.TANZANIA.+257_  <br>");
$ten = array("153.193.241.186.SARATON,DAVID BREINARD.043899292.AMERICA.+1_  <br>");
$eleven = array("103.153.211.186.Legolas,JOHN OWEN.074749292.ZAMBIA.+267_   <br>");
$twelve = array("123.19.201.186.Puddleglum,JOHN BUNYAN.09837328.UGANDA.+256_  <br>");
$thirteen = array("163.193.241.156.Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32_   <br>");
$fourteen = array("150.133.10.23.Beren,Luthien Lovi.028403323.SPAIN.+26" );


echo "<a target = '_blank' href='".$one[1]. "' >$one[1] </a>.$one[2]";
echo "<br>";
echo "<a target = '_blank' href='".$two[1]. "' >$two[1] </a>.$two[2]";
echo "<br>";
echo "<a target = '_blank' href='".$three[1]. "' >$three[1] </a>.$three[2]";
echo "<br>";
echo "<a target = '_blank' href='".$four[1]. "' >$four[1] </a>.$four[2]";
echo "<br>";
echo "<a target = '_blank' href='".$five[1]. "' >$five[1] </a>.$five[2]";
echo "<br>";
echo "<a target = '_blank' href='".$six[1]. "' >$six[1] </a>.$six[2]";
echo "<br>";
echo "<a target = '_blank' href='".$seven[1]. "' >$seven[1] </a>.$seven[2]";
echo "<br>";

//we tried using arrays with the strings...

//we thought of manually putting each ip in it's file







 ?>
