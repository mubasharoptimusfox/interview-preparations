<?php


class Test
{
    const A = 'Hello';

    public function getName()
    {

       echo self::A;

    }
    static function getValue()
    {
        return A1;
    }
}

//$data = new Test();
//echo $data->getName();
//print_r(Test::getValue());

const x = 75; const y = 25;
function addition() {
    $GLOBALS['z'] = x + y;
}


addition();
echo $z;
