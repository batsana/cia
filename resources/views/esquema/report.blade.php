
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
<body>
    <h1 align="center">Esquema de Embarque</h1>
    </div>
   
    </head>
    <body>
        <div class="row">
            <table class="table">
                <thead >
                <tr>
                    <th>Numero da Lista</th>
                    <th>Tipo</th>
                    <th>Quantidade de Fardos</th>
                    <th>Lote</th>
                    <th>Comprimento da Fibra</th>
                    <th>Codigos de Barras</th>
                    <th>Peso Bruto</th>
                   
                  
                </tr>
                </thead>
               <tr>
                    <td >{{$certifyc->nrlista}}</td>
                 <td>{{$certifyc->tipo}}</td>
                 <td>{{$certifyc->quantfardo}}</td>
              
                 <td>{{$certifyc->lote}}</td>
                 <td>{{$certifyc->comprimentofibra}}</td>
                 <td>{{$certifyc->nrocorespond}}</td>
                <!--  <td>{{$certifyc->nrocorespond}}</td> -->
                 <td>{{$certifyc->pesobruto}}</td>
                
                </tr>
               </table> 
              <table class="table" >
               
                <thead>
                  <tr>
                    <th>Peso Liquido</th>
                    <th>Nr de Certificado</th>
                    <!-- <th>Nr de Certificado</th> -->
                    <th>Nr de Fabrica</th>
                </tr>
                </thead>

                <tr>
           <td>{{$certifyc->pesoliq}}</td>
                 <td>{{$certifyc->nrcertific}}</td>
                 <td>{{$certifyc->fabrica_id}}</td>
               </tr>

             
            </table>
        </div>

<p>{{$contrato->consignatario}}</p>
        <p>Assinaturas do Responsavel:</p>
        ____________________________________
    </body>
</html>


