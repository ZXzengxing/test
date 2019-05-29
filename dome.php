<?php
 $arr=array(1,'a'=>2,3,'b'=>4,5);
 list($va1,$va2)=$arr;
 echo $va1.'<br>';
 echo $va2.'<br>';
 echo '<pre>';
 /*print_r(each($arr));
while(list($key,$value)=each($arr)){
 	echo $key.'=>'.$value.'<br>';
}*/
$arr2=array(
  'a'=>array(1,2,3,4,5),
  'b'=>array(6,7,8,9,10),
  'c'=>array(11,12,13,14,15),
);
//foreach($arr2 as $key=>$value){
//	if(is_array($value)){
//	 	/*echo '<pre>';
//		print_r($value);
//		*/
//		foreach($value as $newkey=>$newvalue){
//			echo $newkey.'=>'.$newvalue.'<br/>';
//		}
//	}
//}

function checkarr($strarr){
	if(!is_array($strarr)){
		return 0;
	}
	else{
		$num=0;
		foreach($strarr as $val){
			$temp=checkarr($val);
			if($temp>$num){
				$num=$temp;
			}
		}
		return $num+1;
	}
}
echo checkarr($arr);
echo '<br>';
$ar=array(1,2);
$ar2=array(1,2,7);
$arsum=$ar+$ar2;
print_r($arsum);
?> 