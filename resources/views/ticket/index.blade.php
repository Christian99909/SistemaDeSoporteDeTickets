@extends('layouts.app')

@section('template_title')
    Ticket
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ticket') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ticket.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Titulo</th>
										<th>Descripcion</th>
										<th>Priority</th>
										<th>Category</th>
										<th>Etiqueta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ticket->titulo }}</td>
											<td>{{ $ticket->descripcion }}</td>
											<td>{{ $ticket->priority }}</td>
											<td>{{ $ticket->category }}</td>
											<td>{{ $ticket->etiqueta }}</td>

                                            <td>
                                                <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tickets.show',$ticket->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tickets.edit',$ticket->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tickets->links() !!}
            </div>
        </div>
    </div>
@endsection
