<?php 

// define('NAMA', 'Tora Digda');
// echo NAMA;
// echo"<br>";

// const UMUR = 18;
// echo UMUR;


// class Coba{
//     const NAMA = "Tora";
// }

// echo Coba::NAMA;

// echo __FILE__;



// function coba(){
//     return __FUNCTION__;
// }

// echo coba();


class coba{
    public $kelas = __CLASS__;
}

$obj = new coba;

echo $obj->kelas;


?>