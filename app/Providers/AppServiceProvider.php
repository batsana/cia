<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Classificacao;
use View;
use DB;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);
      view()->composer('*', function($view) {
        if (Auth::check()) {
          $u1 = DB::table('funcionarios')->where('user_id', Auth::user()->id)->first();
      //     View::share('tt', $u1);
          if (Auth::user()->tipoEntidade == 'admin' && Auth::user()->nivel == 1 ) {
             $view->with('func', $u1);
          } elseif(Auth::user()->tipoEntidade == 'fabrica' && Auth::user()->nivel == 1 ){
             $view->with('func', $u1);
          }elseif (Auth::user()->tipoEntidade == 'companhia' && Auth::user()->nivel == 1) {
             $view->with('func', $u1);
          }elseif (Auth::user()->tipoEntidade == 'grafica' && Auth::user()->nivel == 1) {
             $view->with('func', $u1);
          }elseif (Auth::user()->tipoEntidade == 'laboratorio' && Auth::user()->nivel == 1) {
           $view->with('func', $u1);
          }elseif (Auth::user()->tipoEntidade == 'iamprovincial' && Auth::user()->nivel == 1) {
             $view->with('func', $u1);
          } else {
             $view->with('func', Auth::user());
          }
        } else {
          $view->with('currentUser', null);
          $view->with('func', Auth::user());
        }
        //$view->with('currentUser', $u1);
      });
      // View::share('classificacaos', Classificacao::where('id','>','0')->get()

   //    View::share('classificacaos', Classificacao::where('id','>','0')->get()
   //        $user = Auth()->user();
       
   // $func = Funcionario::query()
   // ->join('users','funcionarios.user_id','=','users.id')
   // ->where('users.id',$user->id)->pluck('nome');
     // $user = Auth()->user();
      // if ($id1 !== null) {
      //    $u1 = DB::table('funcionarios')->where('user_id', $id1->id)->first();
      //     View::share('tt', $u1);
      // } else {
      //   View::share('tt', '');
      // }
      
    // $u1 = DB::table('funcionarios')->get();
    //   View::share('tt', $u1);
    

      
   //        $user = Auth()->user();
        
        // );
   
    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}



 // Schema::defaultStringLength('191');
 //          View::share('consultass', Consulta::orderBy('id', 'desc')->get());
 //           View::share('users', User::orderBy('id', 'desc')->get());