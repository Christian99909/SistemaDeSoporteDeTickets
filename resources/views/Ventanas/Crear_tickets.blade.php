@extends('App')

@section('content')
    <div class="container">
        <h1>Crear Ticket</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form class="row g-3">
            @csrf

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="attachments">Adjuntos</label>
                <input type="file" class="form-control-file" id="attachments" name="attachments[]" multiple>
            </div>

            <div class="form-group">
                <label for="priority">Prioridad</label>
                <select class="form-control" id="priority" name="priority" required>
                    <option value="low">Baja</option>
                    <option value="medium">Media</option>
                    <option value="high">Alta</option>
                </select>
            </div>

            <div class="form-group">
                <label for="categories">Categorías</label>
                <input type="text" class="form-control" id="categories" name="categories" value="{{ old('categories') }}">
            </div>

            <div class="form-group">
                <label for="tags">Etiqueta</label>
                <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') }}">
            </div>

            <button type="submit" class="btn btn-primary">Crear Ticket</button>
        </form>
    </div>
@endsection

