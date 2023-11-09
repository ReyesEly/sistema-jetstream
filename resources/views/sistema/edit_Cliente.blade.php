@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR CLIENTES </h1>

@stop

@section('content')

    <div class="card">
        <div class="card body col-md-12 m-3 mx-auto">
            <form action="{{ route('cliente.update', $cliente) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="dni" label="DPI" label-class="text-lightblue"
                    value="{{ $cliente->dni }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="apellido" label="APELLIDO" label-class="text-lightblue"
                    value="{{ $cliente->apellido }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="nombre" label="NOMBRE" label-class="text-lightblue"
                    value="{{ $cliente->nombre }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="email" label="EMAIL" label-class="text-lightblue"
                    value="{{ $cliente->email }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-google text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="telefono" label="TELEFONO" label-class="text-lightblue"
                    value="{{ $cliente->telefono }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-phone text-lightblue"></i>
                        </div>
                    </x-slot>

                </x-adminlte-input>

                {{-- With prepend slot, sm size and label --}}
                <x-adminlte-textarea name="direccion" label="DIRECCION" rows=5 label-class="text-lightblue"
                    igroup-size="sm">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{ $cliente->direccion }}
                </x-adminlte-textarea>

                {{-- With prepend slot, lg size, and label --}}
                <x-adminlte-select name="estado" label="ESTADO CIVIL" label-class="text-lightblue" igroup-size="lg">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-car-side"></i>
                        </div>
                    </x-slot>
                    <option value="{{ $cliente->estado }}">{{ $cliente->estado }}</option>
                    <option value=" ">SELECCIONE EL ESTADO</option>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Divorsiado">Divorsiado</option>
                    {{ old('estado') }}
                </x-adminlte-select>

                <x-adminlte-button type="submit" label="ACTUALIZAR" theme="primary" icon="fas fa-edit" />
            </form>
        </div>
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
