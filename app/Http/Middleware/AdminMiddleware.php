<?php

namespace App\Http\Middleware;
use DB;
use Closure;
use App\User as User;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $idActual = auth()->user()->id;
        $rol = User::where('id','=',$idActual)->value('rol');
        if ($rol  =='Administrador') {
            return redirect('perfiladministrador');
        }
        //return $next($request);
    }
}
