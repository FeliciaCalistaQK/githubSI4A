<?php
function quickshort($array){
    $length = count ($array);
// count itu fungsi yang telah disediakan oleh php
// yang berfungsi untuk menghitung index(panjang)dari si array

    if($length<=1){
        return $array;
    }else{
        $pivot = $array[0];
        $left =$right =array();

        for($i = 1;$i<$length;$i++){
            if($array[$i]<$pivot){
                $left[] = $array[$i];
            }else{
                $right[] = $array[$i];
            }
        }
        return array_merge(
            quickshort($left),
            array($pivot),
            quickshort($right)
        );
    }
}
// kalau normalnya array itu biasanya berbentuk[], namun dalam
// php array itu ditulis dengan array(3,1,4)dst
$array = array(3,1,4,1,5,9,2,6,5,3,5);
$sortedArray = quickshort($array);

echo "Original Array: ",implode(",",$array)."\n";
echo "Sorted Array: ",implode(",",$sortedArray);
?>