
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
         <style type="text/css">



        .table {
            width: 100%;
            max-width: 80%;
            /*margin-bottom: 1px;*/
            margin-top: 100px;
            background-color: #fff;
            font-size: 12px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid #000;
        }
       
       h1{
        font-size: 19px;
        font-family: Arial, Helvetica, sans-serif;
       }

       h2{
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
       }

       h3{
        font-size: 17px;
        font-family: Arial, Helvetica, sans-serif;
       }

       h4{
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
       }

       h5{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
       }

       h6{
        font-size: 14px;
        font-family: Arial, Helvetica, sans-serif;
       }

       p{
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
       }

        .table th,
        .table td {
            padding: 2px;
            vertical-align: bottom;
            text-align: center;
        }
        .table thead th {
            border: 2px;
           
        } 

        th{
              border: 1px solid #000; 
        }
        td{
         border: 1px solid #000;
        }
        
        .table .table {
            background-color: #fff;
        }

        .list-group {
            display: block;
            width: 100%;
            list-style: none;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .list-group p {
            width: 100%;
            height: 20px;
            line-height: 20px;
            list-style: none;
            font-size: 1.1em;
        }
    </style>
    
</head>


    {{-- <h1 align="center" style="margin-top: 50px;">Certificado de Origem e Classificacao</h1> --}}
   
    </head>
    <body>

    <div align="center">
    <img src="imgs/emblema.png" width="80" height="80" title="Logo of a company" alt="Logo of a company"/>
   </div>

 <h4 align="center">República de Moçambique</h4>
 <h4 align="center">INSTITUTO NACIONAL DE ALGUDAO</h4>
 <h5 style="float: right;"><strong>Numero do Certificado: </strong>{{$certifyc->id}}</h5>



<table style="margin-top: 100px;">
    <tr>
        <td style="border:none"><strong>Nome do Esportador :</strong></td>
        <td style="border:none">{{$contrato->consignatario}}</td>
    </tr>

    <tr>
        <td style="border:none"><strong>Quantidade de fardo :</strong></td>
        <td style="border:none">{{$contrato->quantfibra}}</td>
    </tr>

    <tr>
        <td style="border:none"><strong>Peso Bruto :</strong></td>
        <td style="border:none">{{$esqm->pesobruto}}</td>
        <td style="border:none"><strong>Peso Liquido :</td>
        <td style="border:none">{{$esqm->pesoliq}}</td>
    </tr>

    <tr>
        <td style="border:none"><strong>Marca dos Fardos :</strong></td>
        <td style="border:none">{{$contrato->marcafardo}}</td>
    </tr>

    <tr>
        <td style="border:none"><strong>Origem dos fardos :</strong></td>
        <td style="border:none">{{$fabrica->nome}}/{{$fabrica->province}}</td>
    </tr> 
     <tr>
        <td style="border:none"><strong>Estalacao fabril onde foi enfardo :</strong></td>
        <td style="border:none">{{$fabrica->endereco}}/{{$fabrica->telefone}}</td>
    </tr> 
    <tr>
        <td style="border:none"><strong>Navio de Embarque :</strong></td>
        <td style="border:none">{{$contrato->portoembarq}}</td>
    </tr> 
    <tr>
        <td style="border:none"><strong>Destino :</strong></td>
        <td style="border:none">{{$contrato->destino}}</td>
    </tr>
</table>

<h6 style="margin-top: 100px;">Classificacao</h6>

 <div style="width: 2px; height: 70px; background-color: black;margin-top: -150px; margin-left: 100px;"></div>
 <div style="margin-left: 103px; margin-top: -100px;">
     <table>
         <tr>
              <td style="border:none"><strong>Lote :</strong></td>
        <td style="border:none">{{$esqm->lote}}</td>
         </tr>
         <tr>
              <td style="border:none"><strong>Comprimento :</strong></td>
        <td style="border:none">{{$esqm->comprimentofibra}}</td>
         </tr>
         <tr>
              <td style="border:none"><strong>Destino :</strong></td>
        <td style="border:none">{{$contrato->destino}}</td>
         </tr>
     </table>
 </div>



<table style="margin-top: 20;">
<tr>
    <td style="border:none;"><strong>Consignatario :</strong></td>
   <td style="border:none;"> </strong>{{$contrato->consignatario}}</td>
</tr>
</table>

<table style="margin-top: 20;">
<tr>
    <td style="border:none;"><strong>Numero dos fardos :</strong></td>
   <td style="border:none;"> </strong>{{$esqm->nrocorespond}}</td>
</tr>
</table>



<table align="center" style="margin-top: 20;">
<tr>
    <td style="border:none; "><strong>Maputo,</strong></td>
   <td style="border:none;"> </strong>{{$dataActual}}</td>
</tr>
</table>




       {{--  <div class="row">
            <table class="table table-bordered">
                <thead style="   border: 1px solid #000;">
                <tr>
                    <th>Quantidade de fardos</th>
                    <th>Quantidade por estenso</th>
                    <th>Marca do Fardo</th>
                    <th>Navio</th>
                    <th>Destino</th>
                    <th>Peso Bruto</th>
                    <th>Peso Liquido</th>
                    <th>Nr de Esquema</th>
                  
                </tr>
                </thead>
               <tr>
                    <td >{{$certifyc->quantfardo}}</td>
                 <td>{{$certifyc->quantestenso}}</td>
                 <td>{{$certifyc->marcafardo}}</td>
              
                 <td>{{$certifyc->navio}}</td>
                 <td>{{$certifyc->destino}}</td>
                 <td>{{$certifyc->pesobruto}}</td>
                 <td>{{$certifyc->pesoliq}}</td>
                 <td>{{$certifyc->esquema_id}}</td>
                </tr>
               </table> 
              <table >
                <thead>
                  <tr>
                    <th>Peso Bruto</th>
                    <th>Peso Liquido</th>
                    <th>Nr de Esquema</th>
                </tr>
                </thead>

                <tr>
                  <td>{{$certifyc->tipo}}</td>
                    <td>{{$certifyc->navio}}</td>
                 <td>{{$certifyc->destino}}</td>
               </tr>
            </table>
 --}}

       
        {{-- </div> --}}
    </body>
</html>


