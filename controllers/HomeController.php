<?php 


class HomeController
{	
	public function index($a = '',$b='')
    {
        echo "je suis home controller index method";
         echo $a ,' ',$b;
    }	
}