@extends('App')
@section('content')
    <h1>Tickets</h1>
    <div class="container">
    <form id="ticket-filter-form">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="status">Estado:</label>
                <select class="form-control" id="status" name="status">
                    <option value="">Todos</option>
                    <option value="abierto">Abierto</option>
                    <option value="cerrado">Cerrado</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="priority">Prioridad:</label>
                <select class="form-control" id="priority" name="priority">
                    <option value="">Todos</option>
                    <option value="alta">Alta</option>
                    <option value="media">Media</option>
                    <option value="baja">Baja</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="category">Categoría:</label>
                <select class="form-control" id="category" name="category">
                    <option value="">Todos</option>
                    <option value="AAA">AAA</option>
                    <option value="BBB">BBB</option>
                    <option value="CCC">CCC</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="sort">Ordenar por:</label>
                <select class="form-control" id="sort" name="sort">
                    <option value="id">ID</option>
                    <option value="titulo">Título</option>
                    <option value="prioridad">Prioridad</option>
                    <option value="categoria">Categoría</option>
                    <option value="fecha_creacion">Fecha de Creación</option>
                    <option value="fecha_actualizacion">Fecha de Actualización</option>
                </select>
            </div>
        </div>
    </div><br>
    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>
</div>
<br>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                    <th>Prioridad</th>
                    <th>Categoría</th>
                    <th>Agente</th>
                    <th>Fecha de Creación</th>
                    <th>Fecha de Actualización</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>conexion</td>
                    <td>Abierto</td>
                    <td>Alta</td>
                    <td>AAA</td>
                    <td>Christian999</td>
                    <td>28/06/2023</td>
                    <td>28/06/2023</td>
                </tr>
            </tbody>
        </table>
    </div>

    
    <a href="#" class="btn btn-primary">Crear nuevo ticket</a>
    </div>
@endsection