
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Etiquetas</title>
         <style type="text/css">

/*jakcbaljkbal*/
  .text-decoration-color: {
    background-color: gray;
  }
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


    <h1 align="center" style="margin-top: 50px;">Etiquetas Requisitadas</h1>
    </div>
   
    </head>
    <body>
        <div class="row">
            <table style="margin-top: 100px;margin-left: 100px;">

     <tr>
        <td style="border:none"><strong>Tipo de Etiqueta:</strong></td>
        <td style="border:none">{{$certifyc->tipoet}}</td>
    </tr>
    <tr>
        <td style="border:none"><strong>Intervalo :</strong></td>
        <td style="border:none">{{$certifyc->inetervalo}}</td>
        <td style="border:none; padding-left: -80px;">à</td>
        {{-- <td style="border:none"><strong>Quantidade :</strong></td> --}}
        <td style="border:none ;padding-left: -50px;">{{$n}}</td> 
    </tr>

   

    <tr>
        <td style="border:none"><strong>Estado :</strong></td>
        <td style="border:none">{{$certifyc->estado}}</td>
    </tr>
    <tr>
        <td style="border:none"><strong>Data da Emissão :</td>
        <td style="border:none">{{$certifyc->updated_at}}</td>
    </tr>
    <tr>
        <td style="border:none"><strong>Laboratorio :</strong></td>
        <td style="border:none">{{$nan->name}}</td>
    </tr>

            </table>
            
            
        </div>
  
        <div class="row">


        </div>
    </body>
</html>


