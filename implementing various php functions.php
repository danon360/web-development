<!DOCTYPE html>
<head>
  <title>quest1</title>
</head>
<body>
<?php
function computefactorial($num){
  if($num<0 or (int)$num!=$num)
    return false;
  if($num==0)
    return 1;
  return ($num*computefactorial($num-1));
}

function findMostFrequent($str){
  $highest;
  $count=0;
  $letters;
  $str=trim(strtolower($str));
  $ar=str_split($str);

  //creating an array with the letters of the string as keys
  foreach($ar as $x=>$value){
   $letters[$value]=0;
  }
  foreach($letters as $x=>$value){
     $stm=key($letters);
     $temp=substr_count($str,$stm);
     if($temp>$count){
       $count=$temp;
       $highest=$stm;
     }
     next($letters);
   }
   return $highest." Frequency ($count)";
 }

function toUppercaseFirst($str){
  $str=strtolower($str);
  $str=ucwords($str);
  return $str;
}

function splitCapitalizeSort($str){
  $str=trim($str);
  $ar=explode(" ",$str);
  $size=count($ar);
  for($i=0 ;$i<$size;$i++){
    $ar[$i]=ucwords($ar[$i]);
  }
  sort($ar);
  echo array_values($ar);
  return $ar;
}

function dayofNextFriday(){
  $cdate= date("N");
  $diff;

  if($cdate<5){
    $diff=5-$cdate;
  }
  if($cdate>=5){
    $diff=(7-$cdate)+5;
  }

  //here strtotime returns the number of seconds from 01-01-1970 till now(as in today)
  //while the date function formats the number of seconds into days-month-year (the specified format)
  return date('d-m-Y',strtotime("+$diff days"));
}
//and that you should print the unduplicated array and then sort it(which doesnt make sense)
function findUniqueandSort(array $ar){
  $a=array_unique($ar);
  sort($a);
  return $a;

}

function sortHash1(array $ar){
  asort($ar);
  print_r("<table border='1'>");
  foreach($ar as $x=>$value){
    print_r("<tr> <td>$x</td> <td>$value</td> </tr>");
  }
  print_r("</table");
}

function sortHash2(array $ar,$c){
  switch($c){
    case 1:{asort($ar); break;}
    case 2:{krsort($ar); break;}
    case 3:{arsort($ar); break;}
    case 4:{ksort($ar); break;}
    default:{return "Wrong Code";}
  }
  return print_r($ar,true);
}

function averageTemp(array $ar){
  $avrg=array_sum($ar)/count($ar);

  asort($ar);

  $low=implode(", ",array_slice($ar,0,4));

  $temp=array_slice($ar,-4,4);
  arsort($temp);
  $hi=implode(", ",$temp);

  return print_r("Average Temperature is : $avrg </br>List of four lowest temperatures : $low</br>List of four lowest temperatures : $hi",true);
}

function findatStartorEnd($word ,$string){
  $length=strlen($word);
  $string=trim($string);

  $testfirst=substr($string,0,strpos($string," "));

  $testlast=substr($string,strrpos($string," ")+1);
  if(strcmp($testfirst,$word)==0){
    return true;
  }
  if(strcmp($word,$testlast)==0){
    return true;
  }
  return false;
}
?>
<?php   //function 1  //
  $num=-  8;
   print "<span><h1>Function :computefactorial</h1> Parameter: $num</br>Answer: ".(computefactorial($num)?computefactorial($num):"false")."</span>";
?>
<?php   //function 2
  print "<span><h2>Function :findMostFrequent</h2> Parameter:  MYDddaaYSSS </br>Answer: ".findMostFrequent(" MYDddaaYSSS")."</span>";
?>
<?php   //function 3
  print "<span><h3>Function :toUppercaseFirst</h3> Parameter:  today is a verry sunny day </br>Answer: ".toUppercaseFirst("today is a verry sunny day")."</span>";
?>
<?php   //function 4
  $str="test my program";
  $size;
  print "<span><h4>Function :splitCapitalizeSort</h4> Parameter:  test my program</br>Answer: ".print_r(splitCapitalizeSort($str),true)."</span>";
?>
<?php   //function 5
      print "<span><h5>Function :dayofNextFriday()</h5> Parameter: None</br>Answer: The next friday will be on ".dayofNextFriday()."</span>";
?>
<?php   //function 6
       print '<span><h6>Function :findUniqueandSort()</h6> Parameter: integer array ["1","25","0","10","5","2","7","7","2"]</br>Answer: '.print_r(findUniqueandSort(["1","25","0","10","5","2","7","7","2"]),true).'</span>';
?>
<?php   //function 7
  $ar =array("dany"=>"400","tony"=>"600","yuliya"=>"200");
  print_r("<span><h1>Function :sortHash1()</h1> Parameter: Associatove array ".print_r($ar,true)."</br>Answer: </span>");
  //here we seperated the two print functions since in the function sortHash1, in thr foreach loop, the print_r
  //echos variables, IT DOES NOT RETURN THEM (I decided to do it that way since I wanted to avoid returning strings)
  //therefore the above function must print out the code to html before the second function starts to echo the new elements
  print_r(sortHash1($ar)." ");
  //print_r("test");   //  why is it that when i uncoment this,and remove the ." "in the upper func, the code messes up?
?>
<?php   //function 8
  $c=1;
  $ar=array("Jack"=>"55","Anita"=>"30","Ramesh"=>"40","Sophia"=>"21","Nastran"=>"41","William"=>"39","David"=>"5");
  print_r('<span><h2>Function :sortHash2()</h2> Parameter: Associative Array, code </br>Answer: '.sortHash2($ar,$c).'</span>');
?>
<?php   //function 9
  $ar= ["78", "60", "62", "68", "71", -"17", "52", "68", "73", "85", "66", "64", "76","63", "75", "76", "73", "68", "62","73", "-10",
  "72", "65", "80","74", "62", "62", "65", "64", "0", "68", "73", "75", "79","73", "77"];

  print_r("<span><h2>Function :averageTemp()</h2> Parameter: Associative Array </br>Answer: ".averageTemp($ar)."</span>");
?>
<?php
  $ar="hi my name is samantha ";
  $wr="hi";
  print_r("<span><h3>Function :findatStartorEnd()</h3> Parameter: $wr, $ar </br>Answer: ".(findatStartorEnd($wr,$ar)?"true":"false")."</span>");
?>

</body>
</html>
