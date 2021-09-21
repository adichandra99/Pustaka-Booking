<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function index()
	{
			echo "<h1> Perkenalkan </h1>";
			echo "Nama Saya Adi Chandra <br>
			      Tempat Lahir di Bekasi <br>
				  Tanggal Lahir 6 April 1999 <br>
				  Tempat Tinggal di Bekasi <br>
				  Motivation Kuliah Saya ingin menjadi Programmer";
	}

}
