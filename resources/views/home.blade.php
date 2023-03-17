@extends('layouts.core_template')

@section('content')
<div class="container-father">
    <div class="text-center">
        <h1 class="text-center mb-3 fw-bold">Mascostas</h1>
        <h3 class="text-center mb-3 text-success fs-6 fw-lighter">La lealtad de un animal no tiene límites</h3>
    </div>
    <div>
        <a class="btn btn-info" href="{{Route ('pet.register')}}">Crear</a>
    </div>
    <div>
        <table class="table table-info text-center aling-items-center">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre Usuario</th>
                    <th>Número</th>
                    <th>Tipo de mascota</th>
                    <th>Nombre mascota</th>
                    <th>Codigo mascosta</th>
                    <th>Edad</th>
                    <th>Peso</th>
                    <th>Estatura</th>
                    <th>Raza</th>
                    <th>Enfermedad</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    <tr>
                        <td >{{$pet->id}}</td>
                        <td>{{$pet->name_user}}</td>
                        <td>{{$pet->cell_phone}}</td>
                        <td>{{$pet->pet_type}}</td>
                        <td>{{$pet->pet_name}}</td>
                        <td>{{$pet->microchip}}</td>
                        <td>{{$pet->age}}</td>
                        <td>{{$pet->weight}}</td>
                        <td>{{$pet->height}}</td>
                        <td>{{$pet->race}}</td>
                        <td>{{$pet->illness}}</td>
                        <td>
                            <form action="{{Route('pet.update',$pet)}}" method="get">
                                @csrf 
                                @method('update')
                                <button  class="btn btn-outline-success" type="submit">Actualizar</button>
                            </form> 
                        </td>
                        <td>
                            <form action="{{Route('pet.delete',$pet)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection