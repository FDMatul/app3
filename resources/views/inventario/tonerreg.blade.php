<link rel="stylesheet" href="{{ asset("css/app.css") }}">  <!-- importa CSS de bootstrap -->
<script src="{{ asset("js/app.js") }}"></script>

@extends('inventario.template')
@section('subTitle')
    - Registro de personal
@endsection
{{--@section('breadcrumb')--}}
{{--    <li class="breadcrumb-item active">Registro</li>--}}
{{--@endsection--}}
{{--@section('buttons')--}}
{{--    <a href="#" class="btn btn-sm btn-outline-primary"><li class="fas fa-reply"></li> Return</a>--}}
{{--@endsection--}}
{{--@section('buttons2')--}}
{{--    <a href="#" class="btn btn-sm btn-outline-primary"><li class="fas fa-reply"></li> Registro</a>--}}
{{--@endsection--}}

@section('subContent')
{{--    {{Form::open([--}}
{{--                     'action' => ['HRTrainingController@store'],--}}
{{--                     'method' => 'post',--}}
{{--                     'id' => 'frmRegistro',--}}
{{--                     'files' => true,--}}
{{--                     'autocomplete' => 'off'--}}
{{--                 ])}}--}}
    <div class="row">
        <div class="col-xs-12 col-md-3 col-sm-3">
            <div class="card card-primary text-white">
                <div class="card-header bg-primary">Linea</div>
                <div class="card-body border-primary">
                    <div class="form-group">
                        <label for="">IBT</label>

                        <select name="ibt" id="" class="form-select" data-placeholder="Elije IBT..."
                                required="required">
{{--                            <select class="form-select" aria-label="Default select example">--}}
                            <option value="" style="display: none">Selecciona el IBT...</option>
{{--                            @foreach ($ibts as $ibt)--}}
{{--                                <option--}}
{{--                                    {{$ibt->id==old('ibt') ? 'selected':'' }} value="{{$ibt->id}}">{{$ibt->nombre}}</option>--}}
{{--                            @endforeach--}}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Proyecto</label>
                        <select name="proyecto" id="" class="form-select" data-placeholder="Elije Proyecto..."
                                required="required">
                            <option value="" style="display: none">Selecciona el proyecto...</option>
{{--                            @foreach ($proyectos as $proyecto)--}}
{{--                                <option {{$proyecto->id==old('proyecto') ? 'selected':'' }} value="{{$proyecto->id}}"--}}
{{--                                        style="display: none"--}}
{{--                                        data-ibt="{{($proyecto->ibt) ? $proyecto->ibt->id:''}}">{{$proyecto->nombre}}</option>--}}
{{--                            @endforeach--}}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Linea</label>
                        <select name="linea" id="" class="form-select" data-placeholder="Elije la linea..."
                                required="required">
                            <option value="" style="display: none">Selecciona la linea...</option>
{{--                            @foreach ($lineas as $linea)--}}
{{--                                <option {{$linea->id==old('linea') ? 'selected':'' }} value="{{$linea->id}}"--}}
{{--                                        style="display: none"--}}
{{--                                        data-proyecto="{{($linea->proyecto) ? $linea->proyecto->id:''}}">{{$linea->nombre}}</option>--}}
{{--                            @endforeach--}}
                        </select>
                    </div>
                </div>
            </div>
        </div>
{{--            <div class="form-group">--}}
{{--                <label for=""><i class="fas fa-clock"></i> Turno</label>--}}
{{--                <select name="turno_id" class="custom-select select2" id="" data-placeholder="Selecciona el turno..."--}}
{{--                        required="required">--}}
{{--                    <option value=""></option>--}}
{{--                    @foreach ($turnos as $turno)--}}
{{--                        <option--}}
{{--                            {{$turno->id==old('turno_id') ? 'selected':'' }} value="{{$turno->id}}">{{$turno->nombre}}--}}
{{--                            - {{$turno->horario}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}


        <div class="col-xs-12 col-md-9 col-sm-9">
            <div class="row hr-training">
                <div class="col">
                    <h4><i class="fas fa-check-circle"></i> Operadores certificados en la Linea <span
                            id="op-selection"></span></h4>
                    <button class="btn btn-primary float-right btn-sm" type="submit"><i class="fas fa-save"></i> Guardar
                        Operadores
                    </button>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col">
                    <p class="text-muted">Selecciona una linea...</p>
                    <table class="table datatables-hr">
                        <thead>
                        <tr>
                            <th>Num Emp</th>
                            <th>Nombre</th>
                            <th>Turno</th>
                        </tr>
                        </thead>
                        <tbody class="operadores">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col">
                    <h4><i class="far fa-check-circle"></i> Otros operadores</h4>
                    <div class="row">
                        <div class="hr-training col-xs-12 col-md-9 col-sm-9 col-sm-6-offset">
                            <div class="input-group mb-3">
                                <input type="text"  value="{{old('s')}}" name="s" class="search form-control" placeholder="search..."
                                       aria-label="Search" aria-describedby="button-addon2" {{ old('turno_id') =="" ? 'disabled="disabled"':'' }} >
                                <div class="input-group-append">
                                    <button class="btn btn-secondary btnBuscar" disabled type="button" id="button-addon2">Buscar</button>
                                </div>
                            </div>
                            <div class="chosen-operators"></div>
                            <div class="otros-operadores">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--        {{Form::close()}}--}}
        <!-- modals -->

            <!--/modals-->
@endsection
