<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class UsersController extends Controller
{
	private $userModel;

	public function __construct(User $user)
	{
		$this->userModel = $user;
	}

    public function hello()
    {
    	return view('4linux');
    }

    public function index()
    {
    	return $this->userModel->get();
    }

    public function find($id)
    {
    	return $this->userModel->find($id);
    }

    public function create(Request $request)
    {
    	$dados = $request->all();
    	$this->userModel->create($dados);
    }

    public function update(Request $request, $id)
    {
    	$dados = $request->all();
    	$this->userModel->find($id);

    	$user->update($dados);
    }

    public function delete($id)
    {
    	$user = $this->userModel->find($id);
    	$user->delete();
    }

}
