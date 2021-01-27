{{-- @include('layouts.partials.head') --}}

@extends('layouts.app2')

@section('content')
<div class="container"> 
    <br>
    <h2>Información</h2>
    <div class="display-container">       
        <div class="client-container col-5 col-sm-5">
            <div class="table-responsive">
                <table id="table-client" class="table tableClientes table-striped" border="1">
                        <thead class="thead-dark">
                            <tr>
                                <th>Numero de Cliente</th>
                                <th>Nombre Cliente</th>                 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id_cliente}}</td>
                                    <td>{{$cliente->nombre_cliente}}</td>
                                </tr> 
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
            <div class="contratos-container col-7 col-sm-7">
                <div class="table-responsive">
                    <table id="table-client" class="table tableClientes table-striped" border="1">
                            <thead class="thead-dark">
                                <tr>
                                    <th># Contrato</th>
                                    <th>Cliente ID</th> 
                                    <th>Contrato</th> 
                                    <th>Fecha</th>  
                                    <th>Monto</th>                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contratos as $contrato)
                                    <tr>
                                        <td>{{$contrato->id_contrato}}</td>
                                        <td>{{$contrato->clienteID}}</td>
                                        <td>{{$contrato->contrato}}</td>
                                        <td>{{$contrato->fecha}}</td>
                                        <td>{{$contrato->monto}}</td>
                                    </tr> 
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
    </div>
    <div class="filtrar-info">
        <h2>Filtrar</h2>
        <form class="form-inline">
            <label class="custom-lab">Fecha Inicio: </label>  
            <select name="tipo" class="form-control mr-sm-2 select-custom" id="filtrar">  
                @foreach($contratos as $contrato)    
                    <option value="{{$contrato->fecha}}">{{$contrato->fecha}}</option>
                @endforeach
            </select>
            <label class="custom-lab">Fecha Fin:  </label>  
            <select name="tipo2" class="form-control mr-sm-2 select-custom" id="filtrar2">    
                @foreach($contratos as $contrato)    
                    <option value="{{$contrato->fecha}}">{{$contrato->fecha}}</option>
                @endforeach
            </select>
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <div class="row row-content">
            <br>
            <div class="col-12 col-sm-12">
                 <div class="table-responsive">
                    <table id="table-client" class="table tableClientes table-striped" border="1">
                            <thead class="thead-dark">
                                <tr>
                                    <th># Contrato</th>
                                    <th>Cliente</th> 
                                    <th>Contrato</th> 
                                    <th>Fecha</th>  
                                    <th>Monto</th>                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queryContratos as $qry)
                                    <tr>               
                                        <td>{{$qry->id_contrato}}</td>
                                        <td>{{$qry->clienteID}}</td>
                                        <td>{{$qry->contrato}}</td>
                                        <td>{{$qry->fecha}}</td>
                                        <td>{{$qry->monto}}</td>
                                    </tr> 
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>     
        </div>
    </div>
</div>
@endsection