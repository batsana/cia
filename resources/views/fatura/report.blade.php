
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
         <style type="text/css">



        /*.table {
            width: 100%;
            max-width: 80%;
            /*margin-bottom: 1px;*/
          /*  margin-top: 300px;
            background-color: #fff;
            font-size: 12px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid #000;
        }*/
       
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

       /* .table th,
        .table td {
            padding: 2px;
            vertical-align: bottom;
            text-align: center;
        }
        .table thead th {
            border: 2px;
           
        } */

        th{
              border: 1px solid #000; 
        }
        td{
         border: 1px solid #000;
        }
        
        /*.table .table {
            background-color: #fff;
        }*/

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
<body>
      <div align="center">
    <img src="imgs/emblema.png" width="80" height="80" title="Logo of a company" alt="Logo of a company"/>
   </div>

 <h4 align="center">República de Moçambique</h4>
 <h4 align="center">INSTITUTO NACIONAL DE ALGUDAO</h4>
    <div class="row">
        <hr style="border: 2px solid #000">
    </div>
      <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 " style="float: left; border: 2px solid #000; width: 45%;  margin-top: -5px; height: 140px; padding: 20px;"  >
            <h6 style="margin-top: -2px;">Suntec Tower:</h6>
            <h6 style="margin-top: -15px;">Telefone Fixo:</h6>
            <h6 style="margin-top: -15px;">Telefone Movel:</h6>
            <h6 style="margin-top: -15px;">Fax:</h6>
           
        </div>
         <div class="col-md-6 col-lg-6 col-sm-12 " style="margin-left: 30px; margin-top: 60px;">
              <h1 >Faturas Comercial</h1>
        </div>
        
     </div>

     <div class="row" style="margin-top: 100px;">
        <div class="col-lg-12 col-md-12 col-sm-12">
      <table style="border:none">
            <tr>
                <td style="border:none"><strong>NUMERO DA FATURA:</strong></td>
                <td style="border:none">{{$certifyc->numerofatura}}</td>
                <td style="width:0.1px; border:none">&nbsp;</td>
                 <td style="border:none"><strong>TRANSPORTADORA:</strong></td>
                <td style="border:none">{{$certifyc->transformacao}}</td>
            </tr>
            <tr>
                <td style="border:none"><strong> CONDIÇÕES:</strong></td>
                <td style="border:none">{{$certifyc->condices}}</td>
                <td style="width:200px; border:none">&nbsp;</td>
                 <td style="border:none"><strong>LIQUIDACAO:</strong></td>
                <td style="border:none">{{$certifyc->liquidacao}}</td> 
            </tr> 
            <tr>
                <td style="border:none"><strong>MERCADORIA :</strong></td>
                <td style="border:none">{{$certifyc->mercadoria}}</td>
                <td style="width:200px; border:none">&nbsp;</td>
                 <td style="border:none"><strong>EMBALAGEM:</strong></td>
                <td style="border:none">{{$certifyc->embalagem}}</td> 
            </tr>
            <tr>
                <td style="border:none"><strong>MARCA :</strong></td>
                <td style="border:none">{{$certifyc->mercadoria}}</td>
                <td style="width:200px; border:none">&nbsp;</td>
                 <td style="border:none"><strong>OBSERVAÇÃO:</strong></td>
                <td style="border:none">{{$certifyc->observacoes}}</td> 
            </tr>
            <tr>
                <td style="border:none"><strong>NUMERO DE CERTIFICADO:</strong></td>
                <td style="border:none">{{$certifyc->nacionals_id}}</td>
            </tr>
     </table>
     </div> 
     </div> 

  


     <div class="row">
        <div style="width: 100%; border: 2px solid #000; height: 43px;">
         <h5 align="center">SHIPMENT OF 1619 BALES OF MOZAMBIQUE RAW COTTON AS FOLLOWS</h5>
            
        </div>
           
     </div>

         <table style="max-width: 60%;">
             <thead style="border: 1px solid #000;">   
             <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000;"><strong>LOTE</strog></td>
                <td "><strong>TIPO</strog></td>
                <td "><strong>QUANTIDADE</strog></td>
                <td"><strong>NR CORESPONDENTE</strng></td>
                <td "><strng>COMP</strog></td>
                 <td "><strng>PL</strog></td>
                <td "><strog>LP</stron></td>
                <td "><strog>V TOTAL:</strog></td>
                <td "><stron>TOTAL COM PERCENTAGEM:</stron></td>

            </tr>
            </thead>
            <tbody style="border: 1px solid #000;">
              @foreach($esk as $es)    
            <tr style="border: 1px solid #000;">

             <td >{{$es->lote}}</td>
             <td >{{$es->tipo}}</td>
               <td >{{$es->quantfardo}}</td>
               <td >{{$es->nrocorespond}}</td>
               <td >{{$es->comprimentofibra}}</td>
              
               <td >{{$es->pesoliq}}</td>
               <td>{{$es->libraspeso}}</td>
               <td >{{$es->valortotal}}</td>
               <td >{{$es->iampercent}}</td>
             
            </tr>
                @endforeach 
            </tbody>

             </table>
         <div class="row">
        <div style="width: 100%; border: 2px solid #000; height: 200px;">
             <table style="padding-left:20px; padding-top: 10px; ">
             <tr>
                <td style="border:none"><strong>MARCA DO FARDO:</strong></td>
                <td style="border:none">{{$nacional->marcafardo}}</td>
                {{-- <td style="width:200px; border:none">&nbsp;</td> --}}
                
            </tr>
            <tr>
                 <td style="border:none"><strong>DESTINO:</strong></td>
                <td style="border:none">{{$nacional->destino}}</td> 
            </tr>
            <tr>
                 <td style="border:none"><strong>PESOBRUTO:</strong></td>
                <td style="border:none">{{$nacional->pesobruto}}</td> 
            </tr>
            <tr>
                 <td style="border:none"><strong>DESTINO:</strong></td>
                <td style="border:none">{{$nacional->destino}}</td> 
            </tr>
            <tr>
                 <td style="border:none"><strong>NMERO DE CERTIFICADO:</strong></td>
                <td style="border:none">{{$nacional->certif_id}}</td> 
            </tr>
            <tr>
                 <td style="border:none"><strong>Destino:</strong></td>
                <td style="border:none">{{$nacional->destino}}</td> esk
            </tr>



             </table>

        </div>
     </div>
{{--    <p>{{$nacional->id}}</p> --}}

    </body>
</html>


