@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ADMINISTRAR CLIENTES </h1>

@stop

@section('content')
  

        <div class="card body col-md-12 m-3 mx-auto">
            <form action="{{ route('cliente.store') }}" method="POST">
                @csrf

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="dni" label="DPI" placeholder="INGRESA EL DPI"
                    label-class="text-lightblue" value="{{ old('dni') }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-solid fa-address-card text-lighblue" style="color: #3967b8;" ></i>
                          

                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="apellido" label="APELLIDO" placeholder="INGRESA EL APELLIDO"
                    label-class="text-lightblue" value="{{ old('apellido') }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="nombre" label="NOMBRE" placeholder="INGRESA EL NOMBRE"
                    label-class="text-lightblue" value="{{ old('nombre') }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="email" label="EMAIL" placeholder="INGRESA EL EMAIL"
                    label-class="text-lightblue" value="{{ old('email') }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-solid fa-envelope text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="telefono" label="TELEFONO" placeholder="INGRESA EL TELEFONO"
                    label-class="text-lightblue" value="{{ old('telefono') }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-phone text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot, sm size and label --}}
                <x-adminlte-textarea name="direccion" label="DIRECCION" rows=5 label-class="text-lightblue" igroup-size="sm"
                    placeholder="INGRESA LA DIRECCION">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{ old('direccion') }}
                </x-adminlte-textarea>

                {{-- With prepend slot, lg size, and label --}}
                <x-adminlte-select name="estado" label="ESTADO CIVIL" label-class="text-lightblue" igroup-size="lg">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-car-side"></i>
                        </div>
                    </x-slot>
                    <option value=" ">SELECCIONE EL ESTADO</option>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Divorsiado">Divorsiado</option>
                    value="{{ old('estado') }}"
                </x-adminlte-select>

                <x-adminlte-button type="submit" label="GUARDAR" theme="primary" icon="fas fa-save" />
            </form>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@if (session('message'))
<script>
    $(document).ready(function() {
        let $message = "{{ session('message') }}";
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: $message,
            showConfirmButton: false,
            timer: 3000
        })
    });
</script>
@endif
@stop
