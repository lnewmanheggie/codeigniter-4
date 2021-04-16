<?php

namespace App\Controllers;

use App\Entities\Common;
use App\Entities\User;
use App\Models\CommonModel;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
	  $commonModel = new CommonModel();
	 $common =  $commonModel->find(13800);

$created_at = $common->getCreatedAt();
var_dump($created_at);
		return view('welcome_message');
	}
}
