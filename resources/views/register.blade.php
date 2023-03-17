@extends ('layouts.core_template')
@section ('content')
<main>
    <form action="{{Route('pet.store')}}" method="post">
        @csrf
        <h1 class="text-center mb-3 fw-bold">FORMULARIO</h1>
        <h4 class="text-center mb-3 text-danger fs-6 fw-lighter">Registra a tu mascota</h4>
        <div class="mb-2">
            <label for="" class="col-form-label">Nombre usuario</label>
            <input type="text" class="form-control" name="name_user" id="name_user">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Número celular</label>
            <input type="text" class="form-control" name="cell_phone" id="cell_phone">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Tipo de mascota</label>
            <input type="text" class="form-control" name="pet_type" id="pet_type">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Nombre mascota</label>
            <input type="text" class="form-control" name="pet_name" id="pet_name">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Codigo mascota</label>
            <input type="text" class="form-control" name="microchip" id="microchip">
        </div> 
        <div class="mb-2">
            <label for="" class="col-form-label">Edad</label>
            <input type="text" class="form-control" name="age" id="age">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Peso</label>
            <input type="text" class="form-control" name="weight" id="weight">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Estatura</label>
            <input type="text" class="form-control" name="height" id="height">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">raza</label>
            <input type="text" class="form-control" name="race" id="race">
        </div>
        <div class="mb-2">
            <label for="" class="col-form-label">Enfermedad</label>
            <input type="text" class="form-control" name="illness" id="illness">
        </div>
        <div class="mb-2 text-center">
                <button class="btn btn-primary btn-lg text-center" type= "submit">Guardar</button>
        </div>
    </form>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</main>
@endsection