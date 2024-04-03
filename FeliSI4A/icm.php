<h1>Least Common Multiple</h1>
<?php
function gcd($a,$b)
{
if($a == 0)
        return $b;
    return gcd($b%$a,$a);
}

function lcm($a,$b)
{
    return($a/gcd($a,$b))*$b;
}
    $a = 15;
    $b = 20;
    echo "LCM of ",$a," and ",$b," is ",lcm($a,$b);
?>