<?php
class Divide extends Exception{
    public function __toString()
    {
        return " can't divide by zero";
    }
}

function divide($number,$deno)
{
    if ($deno === 0) {

        throw new Divide();
    }
    return $number/$deno;
}
try {
$result = divide(100,5);
echo $result;
$result = divide(100,0);
echo $result;
} catch (Exception $e) {
    echo "lỗi: ".$e;
}