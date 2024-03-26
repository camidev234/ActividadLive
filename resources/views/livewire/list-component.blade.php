<div>
    <h1>Listado de Departamentos</h1>
    <ul>
        @foreach($departaments as $departament)
        <button>{{$departament->departament_name}}</button>
        @endforeach
    </ul>
</div>
