<?php

class Mwelcome extends CI_Model
{
    public function get()
    {
        $data=10;
        return $data;
    }
    public function Luas($panjang, $lebar){
        return $panjang*$lebar;
    }
}
?>