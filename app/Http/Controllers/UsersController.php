<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Image;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index')
                    ->with(compact('users'));
    }

    public function create()
    {
        return view('users.create')
                    ->with(['button'=>'Salvar']);
    }

    public function store(UserRequest $request)
    {
      // $photo = $request->file('avatar')->getClientOriginalName();
      // $destination = base_path() . '/public/img/avatars';
      // $request->file('avatar')->move($destination, $photo);
      $user = new User();

      if($request->hasFile('avatar')){
        $photo = $request->file('avatar');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        Image::make($photo)->resize(175, 175)->save( public_path('assets/images/avatars/' . $filename ) );
        $user->avatar = $filename;
      }else{
        $user->avatar = "default.jpg";
      }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $users = User::all();
        return view('users.index')
                    ->with(compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show')
              ->with(compact('user'));
    }

    public function edit($id)
    {
      $user = User::findOrFail($id);
      return view('users.edit')
            ->with(compact('user'))
            ->with(['button'=>'Atualizar']);
    }

    public function update(UserRequest $request, $id)
    {
      $user = User::findOrFail($id);

      if($request->hasFile('avatar')){
        $photo = $request->file('avatar');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        Image::make($photo)->resize(175, 175)->save( public_path('assets/images/avatars/' . $filename ) );
        $user->avatar = $filename;
      }
        // $photo = $request->file('avatar')->getClientOriginalName();
        // $destination = base_path() . '/public/assets/images/avatars';
        // $request->file('avatar')->move($destination, $photo);
        //   $user->avatar = $photo;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->push();

        $user = User::findOrFail($id);
        return view('users.show')
                    ->with(compact('user'));
    }

    public function destroy($id)
    {
      $user = User::find($id);
      if ($user != null) {
        $user->delete();
        flash('Usuário excluido com sucesso!')->success();
        return $this->index();
      }
      flash('Código não encontrado!')->error();
      return $this->index();
    }
}
