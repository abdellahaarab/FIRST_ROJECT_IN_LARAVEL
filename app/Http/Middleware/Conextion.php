<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Conextion

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     static $users = [
        ['name'=>'driss','pass'=>'4444'],
        ['name'=>'abdellah','pass'=>'4444']
     ];

    public function handle(Request $request, Closure $next)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        foreach(self::$users as $user):
            if($user['name'] === $name and $user['pass'] === $password){
                session(['user'=>$name]);
                return $next($request);
            }
        endforeach;
        session()->forget('user');
        // return redirect()->route('me.login')->with('message',  $name);
        return redirect()->route('me.login')->with('message', 'Password not correctly!!!');
    }
}
