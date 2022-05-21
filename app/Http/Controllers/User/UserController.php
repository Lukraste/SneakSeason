<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\History;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        return view('pages.users.user-data', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('pages.users.user-orders', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.users.user-data', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       /* $request->validate([
            'name' => ['string', 'max:255'],
            'firstname' => ['string', 'max:255'],
            'email' => ['required', 'string', 'max:191'],
            'password' => ['required', 'min:8', 'max:255'],
            'phone_number' => ['min:10', 'max:20'],
            'optin_rgpd' => ['required']
        ]);  */ 

        
        $user->name = $request->name ;
        $user->firstname =  $request->firstname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthdate = $request->has('birthdate') && strlen($request->birthdate) ? $request->birthdate : NULL;
        $user->phone_number = $request->has('phone_number') && strlen($request->phone_number) ? $request->phone_number : NULL;
        $user->sex = $request->sex;
        $user->optin_rgpd = $request->optin_rgpd;

        $user->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        $history = new History;
        $history->model = 'User';
        $history->action = 'Delete';
        $history->user_id = Auth::id();
        $history->element_id = $user->id;
        $history->save();
        
        return redirect('/');
    }

    /**
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function shopping(User $user)
    {
        return view('pages.users.user-shopping-cart', compact('user'));
    }
}
