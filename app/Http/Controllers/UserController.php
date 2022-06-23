<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function form()
{
    $this->authorize('admin');
    return view('users.novoadmin');
}

public function register(Request $request)
{   
    $request->validate([
        'codpes' => 'required|integer|codpes'
    ]);
    $user = User::where('codpes',$request->codpes)->first();
    if(!$user) $user = new User;

    $user->codpes = $request->codpes;
    $user->email  = \Uspdev\Replicado\Pessoa::email($request->codpes);
    $user->name   = \Uspdev\Replicado\Pessoa::nomeCompleto($request->codpes);
    $user->is_admin = TRUE;
    $user->save();
    return redirect("/novoadmin/");
}

}
