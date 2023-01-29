<?php

namespace App\Http\Controllers;




use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('user.show',compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate([//происходит проверка на уникальность
            'email' => $data['email']
        ], $data);
        return redirect()->route('user.index');
    }

    //TODO: сделать для обновления другой реквест
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);
        $user->is_premium = isset($data['is_premium']) ? 1 : 0;
//dd($user->is_premium);
        $user->update($data);
        return view('user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
