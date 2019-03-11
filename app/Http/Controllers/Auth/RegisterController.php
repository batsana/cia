<?php

namespace App\Http\Controllers\Auth;

// use App\Paciente;
use App\Entidade;
use App\Fabrica;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

   

      protected function create(array $data){
        User::create(['name' => $data['name'],'tipoEntidade' => $data['tipoEntidade'], 'email' => $data['email'], 'password' => bcrypt($data['password'])]);

        if($data->tipoRegisto == 'entidade'){
            $entidade = new Entidade();
            $entidade->create(['endereco' => $data['endereco'],'telefone' => $data['telefone'],'numerunico' => $data['numerunico'],'user_id'=>$user->id]);
            return back()->with(['success'=>'Enidade cadastrado com sucesso']);
        }else{
            Fabrica::query()->create([
                'endereco' => $data['endereco'],'conse' => $data['conse'],'entidade_id'=> $data['companhia_id'],'telefone' => $data['telefone'] ,'matrizfilial' => $data['matrizfilial'],'numerunico' => $data['numerunico'],'user_id'=>$user->id]);
                
            
             
             return view('auth.register');
        }
         
      
    }


    // public function index(){
    //     $data['fabricas'] = Fabrica::all();
    //     return view('iam.home',$data);
    // }
    public function index(){
           $fabricas = Fabrica::all();
        $user = Auth()->user()->id;

        return view('iam.home', compact('fabricas','user'));
    }
}
