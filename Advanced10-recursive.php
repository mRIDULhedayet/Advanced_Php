<?php
$a=20;

function factorial($a){
  if ($a==0) {
    return 1;
  }
  for ($i=0; $i <$a ; $i++) {
    // code...

  $result=($a*factorial($a-1));
  echo "$result"."<br>";
  return $result;
}


}
 factorial($a);
 /*Output:

1
2
6
24
120
720
5040
40320
362880
3628800
39916800
479001600
6227020800
87178291200
1307674368000
20922789888000
355687428096000
6402373705728000
121645100408832000
2432902008176640000  */
 ?>

 <?php
 function get_element($b){
   if(is_array($b)){
     foreach($b as $value){
       get_element($value);
     }
   }
   else{
     echo $b."<br/>";
   }
 }
 $b = array('a', 'b', 'c', 'd' => array('da', 'db', 'dc', 'dd' =>array('aaa','bbb','ccc','ddd'=>array('aaaa','bbbb','cccc','dddd'=>array('aaaaa','bbbbb','ccccc','ddddd')))));
 get_element($b);
 /*Output:
a
b
c
da
db
dc
aaa
bbb
ccc
aaaa
bbbb
cccc
aaaaa
bbbbb
ccccc
ddddd */
 ?>
