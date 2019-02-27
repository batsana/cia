<?php
// namespace App\Http\Controllers;
use App\Entidade;
use App\Fabrica;
use App\User;
use App\Getiqueta;
use App\Classificacao;
use App\Classificacaohvi;
use App\Contrato;
use App\Esquema;
use App\Certificadoclasse;
use App\Certificadonacional;
use App\Fatura;
use App\Funcionario;
use Illuminate\Support\Facades\DB;

// use DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/come', function () {
    return view('welcome');
});


Route::get('/testes', function () {
		// $classificacaos = Classificacao::all();
  //          return view('classificacao.indexre',compact('classificacaos')); 
    return view('1');
});

Route::get('/ajax_upload', 'AjaxUploadController@index');

Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');


Route::group(['middleware' => 'mbatsana'],function () {
	Route::get('/registar/entidade', function () {

		$companhia = Entidade::query()
		->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','companhia')
		->select('users.name','entidades.id')->get();

    return view('auth.register',compact('companhia'));
});
});

Route::get('listar/et', function () {

    
return view('etiqueta.requisitados');	
});

Route::get('/listar/iam', function () {
	// $user = Auth()->user();
	$entidade = Entidade::query()
	->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','iamprovincial')
		->select('users.*','entidades.*')->paginate(10);
return view('iam.iam',compact('entidade'));	
});

Route::post('/salvafatura','FaturaController@criar');



Route::get('/registar/etiqueta', function () {





	$user = Auth()->user();
	$entidade = Entidade::query()
	->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','grafica')
		->select('users.name','entidades.id')->get();


 if ($user->nivel !== 1) {
   //  $us = Fabrica::query('user_id',$user->id)->first()->id;
      $fabrica_id = Fabrica::query()->where('user_id',$user->id)->first()->id;
      // $ultmo = Getiqueta::query()->orderBy('id','desc')->first()->inetervalo;
       $ultmo = Getiqueta::query()->where('fabrica_id',$fabrica_id)->first()->inetervalo;
   }elseif ($user->nivel == 1) {
 
    $funcionarios =  DB::table('funcionarios')->where('user_id',$user->id)->first()->entidade_id;
    $fabrica_id = Fabrica::query('id',$funcionarios)->first()->id; 
     $ultmo = Getiqueta::query()->where('fabrica_id',$fabrica_id)->first()->inetervalo;
   }

return view('etiqueta.create',compact('entidade','fabrica_id','ultmo'));	
});


Route::get('/apagarhvi/{id}','ClassificacaohviController@apag');


Route::get('/primeira/home', function () {
return view('welcome');
	
});

Route::get('faturas', function () {
	// $faturas = Fatura::all();	
return view('iam.factur');	
});


Route::get('/listar/etiqueta', function () {
	$user = Auth()->user()->id;
    $cla = DB::table('getiquetas')
         ->join('entidades', 'getiquetas.entidade_id', '=', 'entidades.id')
        ->join('fabricas', 'getiquetas.fabrica_id', '=', 'fabricas.id')
        // ->join('users', 'fabricas.user_id', '=', 'users.id')
         ->select('getiquetas.*','fabricas.nome')->paginate(10);
              
           return view('etiqueta.index',compact('cla','user'));	
});


Route::get('/listar/classes', function () {
		// $user = Auth()->user()->id;
   $classificacaos = Classificacao::query()->paginate(10);
   // $classificacaos = Classificacao::query()
   // ->join('entidades','classificacaos.entidade_id','entidades.id')
   // ->where('classificacaos.entidade_id',$user)->paginate(10);

           
   return view('classificacao.indexre', compact('classificacaos'));;
	
});


Route::get('/listar/classesh', function () {
   $classicacaos = Classificacaohvi::query()->paginate(10);        
           
   return view('classificacao.indexh', compact('classicacaos'));;
	
});

Auth::routes();

 Route::post('/salvarClassificacao','ClassificacaoController@create');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/salvarEtiqueta','GetiquetaController@create');
Route::post('/salvarEtiqueta','GetiquetaController@create');
// Route::get('/salvacontra','ContratoController@criacao');
Route::post('/salvacontra','ContratoController@criacao');

// Route::get('/salvaesquema','EsquemaController@geraracao');
// Route::get('/salvafatura','FaturaController@criar');
Route::post('/salvarfuncionario','FuncionarioController@wekers');
Route::post('/salvarfuncionariografica','FuncionarioController@wekerprint');

Route::post('/salvaesquema','EsquemaController@geraracao');
Route::post('/salvafatura','FaturaController@criar');

Route::post('/salvacertclass','CertificadoclasseController@criar');
// Route::post('/salvacertnacional','CertificadonacionalController@criar');
Route::post('/salvacertnacional','CertificadonacionalController@criar');

Route::post('/salvamos','FabricaController@store');  ////////////////////////////////

// Secao de Edicoes//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

Route::get('/classificar','ClassificacaoController@editClasse');

Route::get('/classificacao','ClassificacaoController@index');
Route::get('/classificacao','ClassificacaoController@indexa');
// ////////////////////////////////////////////////////////////////////////////////Edicoes
Route::get('/atual/{id}/editado','EntidadeController@editado');
Route::post('/atual/editEtiqueta','EntidadeController@editEtiqueta');

Route::get('/atualaboratorio/{id}/editadolab','EntidadeController@editadolab');
Route::get('/atualgrafica/{id}','EntidadeController@editadografica');


Route::get('/editar/{id}/edit','FabricaController@edit');
Route::get('/atualfun/{id}/atualfun','FuncionarioController@atualfuncionar');

Route::get('/editarall/{id}/editall','FabricaController@editall');


Route::get('/responder/{id}/edit','GetiquetaController@edit');
Route::get('/editalgudoeira/{id}/edit','FabricaController@edit');
Route::get('/editarfuncio/{id}','FuncionarioController@edit');
Route::get('/responder/{id}/edit','GetiquetaController@edit');
Route::get('/sua/{id}/su','EntidadeController@suas');
Route::get('/detalhar/{id}/edit','FaturaController@editer');
Route::get('/editarz/{id}/entrega','CertificadonacionalController@entrega');
Route::put('iam/{id}','EntidadeController@updatiam');
Route::put('/funcioo/{id}','FuncionarioController@updatfuc');


////////////////////////////////////////////////////////////////////////////////////////
//update//
//////////////////////////////////////////////////////////////////////////////////
Route::put('/fabrica/{id}','FabricaController@update');
Route::put('/fabricall/{id}','FabricaController@updatall');
Route::put('/entidade/{id}','EntidadeController@update');
Route::put('/laboratorio/{id}','EntidadeController@updatelab');
Route::put('/grafica/{id}','EntidadeController@updategra');
Route::put('/funcione/{id}','FuncionarioController@upfunc');


 ////////////////////////////////////////////////////////////////////////////////DELETES
Route::get('/apagarcertpro/{id}','CertificadoclasseController@apag');

Route::get('/apagargrafica/{id}','EntidadeController@apagargra');

Route::get('/apagarfabrica/{id}','FabricaController@apagar');


Route::get('/apagarclasse/{id}','ClassificacaoController@apagar');
Route::get('/apagafuncio/{id}','FuncionarioController@apagar');
Route::get('/apagafuncio2/{id}','FuncionarioController@apagar2');
Route::get('/apagafun/{id}','FuncionarioController@apagar');
Route::get('/apagariam/{id}','EntidadeController@apagariam');
Route::get('/apagarlaboratorio/{id}','EntidadeController@apagar');
Route::get('/apagarCompanhia/{id}','EntidadeController@apagarComp');
Route::get('/apagarnac/{id}','CertificadonacionalController@apagarcertnac');
Route::get('/deleta/{id}','EntidadeController@delete');//////problema
Route::get('/apagarfatura/{id}','FaturaController@delete');//////problema
//////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/atualiam/{id}/editiam','EntidadeController@editiam');

Route::get('/fabrica','FabricaController@fabricas');

Route::get('/gestao/entidade', function () {
    return view('iam.entidades');
});



/////////////////////////CREATES????//////////////////////////////////////
/////////////////////////Esquemas de embarque/////////////////////////////
Route::get('gerar/esquema', function () {
	$class = Classificacao::all();


	$user = Auth()->user();
  $r = $user->nivel;

  if ($r != 1) {
    # code...
 

  //var_dump($user->id);
  //exit;

  //$entidade_id = Entidade::query()->where('user_id',$user->id)->first()->id;
  $entidade_id = $user->id;

  $contratos = Contrato::query()
	 ->join('entidades','contratos.entidade_id','=','entidades.id')
	 // ->join('fabricas','contratos.fabrica_id','=','fabricas.id')
		->select('entidades.*','contratos.*'
			)->get();
    return view('esquema.create',compact('entidade_id','contratos','class'));
  } else {
    // $entidade_id = $user->id
      $entidade_id = Funcionario::query()->where('user_id',$user->id)->first()->id;

    $contratos = Contrato::query()
   ->join('entidades','contratos.entidade_id','=','entidades.id')
   // ->join('fabricas','contratos.fabrica_id','=','fabricas.id')
    ->select('entidades.*','contratos.*'
      )->orderBy('nrcontrato', 'desc')->get();
    return view('esquema.create',compact('entidade_id','contratos','class'));
  }
});


Route::get('/gerar/funcionario', function () {
  $user = Auth()->user();
   $tipo_id =  $user->tipoEntidade;
   $entidades =  $user->id;           
   return view('funcionario.create', compact('entidades','tipo_id'));	


	      
});

// Route::get('/gerar/funcionariof', function () {
//   $user = Auth()->user();
//    $tipo_id =  $user->tipoEntidade;
//    $entidades =  $user->id;           
//    return view('funcionario.create', compact('entidades','tipo_id'));	
// });





Route::get('/esquam', 'EsquemaController@adicionando');

Route::get('ger/cont', function () {
 $user = Auth()->user()->id;


 $entidades = Entidade::query()->where('user_id',$user)->first();

 // $users  = Contrato::query()->where('entidade_id',$user->id)->get();
  // $users  = Contrato::query()->
  $users  = Contrato::query()->where('entidade_id',$user)->get();
  // ->join('entidades','contratos.entidade_id','=','entidades.id')
  // ->join('users','entidades.user_id','=','users.id')
  // ->where('entidades.user_id',$user->id)->get();
   return view('contrato.create',compact('entidades','users'));
});

Route::get('/listar/classesh', function () {
   $classicacaos = Classificacaohvi::query()->paginate(10);
           
   return view('classificacao.indexh', compact('classicacaos'));
	
});

Route::get('/list/funcionario', function () {
  $user = Auth()->user()->id;
	$funcionarios = Funcionario::query()
	->join('entidades','funcionarios.entidade_id','entidades.id')
	->join('users','entidades.user_id','users.id')
	->where('entidades.user_id',$user)
	->select('users.*','funcionarios.*')->paginate(10);

   // $funcionarios = Funcionario::query()->paginate(10);
           
   return view('funcionario.index', compact('funcionarios'));
	
});
Route::get('/list/funcionariofab', function () {

	$user = Auth()->user()->id;

	    // $funcionarios = DB::table('funcionarios')->where('entidade_id',$user)->get();

        $funcionarios =  DB::table('funcionarios')->where('entidade_id',$user)->get();


   return view('funcionario.index2', compact('funcionarios'));
	
});

Route::get('/listar/classeshs', function () {
   $classicacaos = Classificacaohvi::query()->paginate(10);
           
   return view('classificacao.indexhs', compact('classicacaos'));
	
});

Route::get('/listar/classess', function () {
   $classificacaos = Classificacao::query()
    ->join('entidades','classificacaos.entidade_id','=','entidades.id')
	 ->join('users','entidades.user_id','=','users.id')
	 ->join('fabricas','classificacaos.fabrica_id','=','fabricas.id')
	 // ->where('entidades.user_id','=',auth()->user()->id)
		->select('fabricas.nome','classificacaos.*','users.name')->paginate(10);
           
   return view('classificacao.ind', compact('classificacaos'));
	
});


///////////////////////CONTRATOS///////////////////////////
Route::get('gestao/contratos', function () {
    return view('contrato.second');
});

Route::get('cadas/contrato', function () {
	$fabricas = $requestFabrica::all();
    return view('contrato.create',compact('fabricas'));
});

Route::get('gestao/contratos', function () {
    return view('contrato.second');
});
//////////////////////////////////////////////////////////Certificados//////////////

Route::get('gestao/cetificate', function () {
	$esquemas = Esquema::all();
    return view('certifyn.create',compact('esquemas'));
});

Route::get('gestao/cetificadonacional', function () {
	$contrato = Contrato::all();
	 $certificado   = Certificadoclasse::all();
    return view('certinacional.certficadonacional',compact('contrato','certificado'));
});
//////////////////////////////////////////////////////////////////certificados////////////////////////
//////////////////////////////fatiuras///////////////////////////////////////////////////////////////

Route::get('/gestao/facturas', function () {
	$nacional = Certificadonacional::all();
           return view('fatura.create',compact('nacional')); 
});

Route::get('/gestao/classificacao', function () {
	 $user = Auth()->user();
	 $fabrica_id = Fabrica::query()->where('user_id',$user->id)->first()->id;
   
   $entidade = Entidade::query()
	 ->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','laboratorio')
		->select('users.name','entidades.*'
			)->get();

	 return view('classificacao.create', compact('fabrica_id','entidade'));
});

Route::get('/listar/algudoeira', function () {
    $user = Auth()->user();
	$algo = Entidade::query()->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','companhia')
		->select('users.name','entidades.*')->paginate(10);

     return view('iam.home',compact('algo')); 
});


Route::get('/resulta/iam', function () {
           return view('fabrica.result'); 
});

Route::get('resultado/classificacao', function () {
	$classificacaos = Classificacao::query()->paginate(10);
           return view('classificacao.indexre',compact('classificacaos')); 
});
 ///////////////////////////////SECAO DE LISTAS/////////////////////////////////////////////////
///////////////////////////////////listar etiquetas as etiquetas que tiverem o id do pesquisador
Route::get('/ver/etiqueta', function () {
	/*ultimas alteracoes*/ 
	$user = Auth()->user();         
        // $classes = Getiqueta::query()        
        // ->join('fabricas', 'getiquetas.fabrica_id', '=', 'fabricas.id')
        // ->join('funcionarios', 'getiquetas.entidade_id', '=', 'funcionarios.id')
        // ->where('estado','=','Enviado')
        // ->select('getiquetas.*','funcionarios.nome','fabricas.nome')->get();              
        //    return view('etiqueta.indexf',compact('classes'));     
         $classes = Getiqueta::query()        
        ->join('fabricas', 'getiquetas.fabrica_id', '=', 'fabricas.id')
        ->join('entidades', 'getiquetas.entidade_id', '=', 'entidades.id')
        // ->join('users', 'entidades.user_id', '=', 'users.id')
        ->join('users', 'entidades.user_id', '=', 'users.id')
        ->where('estado','=','Enviado')
        ->select('getiquetas.*','users.name','fabricas.nome')->get();              
           return view('etiqueta.indexf',compact('classes'));   
});
// 

Route::get('/listar/laboratorio', function () {
	$user = Auth()->user();
	$entidade = Entidade::query()
	->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','laboratorio')
		->select('users.name','entidades.*')->get();
return view('iam.labora',compact('entidade'));	
});

Route::get('/list/re', function () {
	$use = Auth()->user()->id;  
   $user = Funcionario::query()->where('user_id',$use)->pluck('nome');
$userStr = str_replace('"]','', str_replace('["', '', $user));
       $classificacaos = Classificacao::query()
           
     ->join('fabricas','classificacaos.fabrica_id','=','fabricas.id')
     ->join('entidades','classificacaos.entidade_id','=','entidades.id')
     ->join('users','entidades.user_id','=','users.id')
      ->where('classificacaos.estado','=','naoclass')
      // ->where('entidades.user_id',$user)
        ->select('fabricas.nome','users.name','classificacaos.*' )->get();	

         return view('classificacao.index', compact('classificacaos','userStr'));
});


Route::get('listar/contrato', function () {
	$contrato = Contrato::query()->paginate(10);	
return view('contrato.list',compact('contrato'));	
});

Route::get('cert/origem', function () {
	// $certifyc = Certificadoclasse::all();
	$user = Auth()->user()->provincia;	
 // $fa = User::where('entidade_id', auth()->user()->id)->get();


$certifyc = Certificadoclasse::query()
	->join('esquemas','certificadoclasses.esquema_id','=','esquemas.id')
	->join('fabricas','esquemas.fabrica_id','=','fabricas.id')
	->where('fabricas.province','=',$user)
	->select('certificadoclasses.*','esquemas.*')->get();	
	
return view('certifyn.index',compact('certifyc'));
/////////

});

Route::get('cert/origem','DocController@index');


Route::get('cert/naciona', function () {
$nacional = DB::table('certificadonacionals')
        ->join('contratos', 'certificadonacionals.contrato_id', '=', 'contratos.id')
        ->select('contratos.*', 'certificadonacionals.*')->get();
return view('certinacional.index', compact('nacional'));

});


Route::get('list/fatura', function () {
	$faturas = Fatura::query()->paginate(10);	
return view('fatura.index',compact('faturas'));	
});

Route::get('lista/esquema', function () {
$user = Auth()->user()->id;
	$esquemas = Esquema::query()
	->join('entidades','esquemas.entidade_id','entidades.id')
	->join('contratos','esquemas.contrato_id','contratos.id')
	->join('users','entidades.user_id','users.id')
	->where('entidades.user_id',$user)
	->select('contratos.*','esquemas.*','users.name','entidades.*')->paginate(10);
return view('esquema.index',compact('esquemas'));	
});


Route::get('/listar/grafica', function () {
	$user = Auth()->user();
	$entidade = Entidade::query()
	->join('users','entidades.user_id','=','users.id')
		->where('users.tipoEntidade','=','grafica')
		->select('users.name','entidades.*')->paginate(10);
return view('iam.grafica',compact('entidade'));	
});

Route::get('/sua/{id}/su','EntidadeController@suas');



Route::get('/listar/fabricas', function () {
$fabricas = Fabrica::query()->join('entidades','fabricas.entidade_id','entidades.id')
->join('users','entidades.user_id','users.id')
->select('users.name', 'fabricas.*')->paginate(10); 

  return view('iam.fabricasall',compact('fabricas')); 

});


Route::get('impressao/{id}/edit','DocController@edit'); 







Route::get('/users', 'UserController@index');
Route::get('/users/report/{view_type}', 'DocController@report');

Route::get('/use/repo/{views_type}', 'DocController@reports');

Route::get('/users', 'UserController@index');
Route::get('/users/report/{id}', 'DocController@report');
Route::get('/esque/report/{id}', 'DocController@reportar');
Route::get('/impressaobom/{id}', 'DocController@reportario');
Route::get('/impressfatura/{id}', 'DocController@repor');
Route::get('/usersna/report/{id}', 'DocController@rap');

