<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}


  public function help()
  {
    return view('welcome_message');
  }


  public function notification()
  {
    return view('notification_page');
  }


  public function chat()
  {
    return view('chat_page');
  }
}
