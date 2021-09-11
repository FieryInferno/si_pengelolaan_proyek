<?php

namespace App\Controllers;

class Membercontroller extends BaseController
{
  
  public function index()
	{
    $data['konten'] = 'member/dashboard';
    $data['title']  = 'Dashboard';
		return view('template', $data);
	}
}
