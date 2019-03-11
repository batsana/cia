

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Esquema</title>
         <style type="text/css">



        .table {
            width: 100%;
            max-width: 80%;
            margin-top: 100px;
            background-color: #fff;
            font-size: 12px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid #000;
        }


        .table tr{
       border: 1px solid #000;
    }
        .table thead th {
            border: 1px solid #000;
           
        } 

    
        td{
         border: 1px solid #000;

        }
        
   
    </style>
    
</head>
<body>
        <div align="center">
    <img src="imgs/logo-iam.png" width="80" height="80" title="Logo of a company" alt="Logo of a company"/>
   </div>

 <h1 align="center"><strong>ESQUEMA DE EMBARQUE DE ALGODÃO RAMA</strong></h1>

    <div class="row">
        <hr style="border: 2px solid #000">
    </div>
      <div class="row">
       
         <div class="col-md-6 col-lg-6 col-sm-12 " style="margin-left: 30px;">
             
             <table style="width:85%">
              <tr>
               <td style="border:none;">EXPORTADOR: <strong><u>{{$ent->name}}</strong></u></td>&nbsp; <td style="border:none; margin-left:150px">
              ESQUEMA N<sup>o</sup> 
          
              
                <strong><u>{{$certifyc->id}}</u> </strong>
                  </td>
           </tr>
            <tr>
               <td style="border:none;">CONSIGNATÁRIO:<strong><u>{{$contrato->consignatario}}</u> </strong></td>

 <td style="border:none;">CAMPANHA:<strong><u>{{$contrato->campanha}}</u> </strong></td>

           </tr>
             <tr>
               <td style="border:none;">PORTO DE EMBARQUE:<strong><u>{{$contrato->portoembarq}}</u> </strong></td>

               <td style="border:none;">FACTURA:</td>
           </tr>
            <tr>
               <td style="border:none;">DESTINO:<strong><u>{{$contrato->destino}}</u> </strong></td>
                <td style="border:none;">CONTRATO N<sup>o</sup>:<strong><u>{{$contrato->nrcontrato}}</u></strong></td>
           </tr>
           <tr><td colspan="2" style="border:none;">MARCA DOS FARDOS:</td></tr>
          
           </table>
        </div>

        
     </div>

        <div class="row" style="width:85%; margin-left:30px; margin-top: -40px;">
            <table class="table">
                <thead >
                <tr>
                    <th>Instalação Fabril</th>
                    <th>Variedade</th>
                    <th>Concelho ou Circunscrição</th>
                    <th>Nr. das Listas</th>
                    <th>Tipo</th>
                    <th>Quantidade de Fardos</th>
                    <th>Comprimento da Fibra</th>
                    <th>Códigos Correspondentes</th>
                    <th>Peso Bruto</th>
                    <th>Peso Liquido</th>
                    <th>Nr. dos Certif.</th>
                     
                   
                  
                </tr>
                </thead>
               <tr>
                   <td >{{$fab->province}}</td>
                    <td >{{$certifyc->lista}}</td>
                 <td>{{$certifyc->tipo}}</td>
                 <td>{{$certifyc->quantfardo}}</td>
              
                
                 <td>{{$certifyc->comprimentofibra}}</td>
                 <td>{{$certifyc->nrocorespond}}</td>
    
                 <td>{{$certifyc->pesobruto}}</td>
                
              
                
                </tr>
               </table> 
             
        </div>

       <div style="width:85%; margin-left:30px; margin-top: 30px">
         <table><tr><td style="border:none;">ELABORADO POR:
        _____________________</td><td style="border:none;">CONFERIDO POR:
        _____________________</td><td style="border:none;">LOCAL: ______ DATA: __/__/__</td></tr></table>


       
    </div>
    </body>
</html>
