@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Transactiondetail</div>
                    <div class="card-body">
                        <a href="{{ url('/transaction-detail/create') }}" class="btn btn-success mb-4" title="Add New TransactionDetail">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/transaction-detail', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-append">
                                <button class="btn btn-dark" type="submit">
                                    Search
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <div class="table-responsive py-4">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Transaction Id</th><th>Product Id</th><th>Quantity</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($transactiondetail as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->transaction_id }}</td><td>{{ $item->product_id }}</td><td>{{ $item->quantity }}</td>
                                        <td>
                                            <a href="{{ url('/transaction-detail/' . $item->id) }}" title="View TransactionDetail"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/transaction-detail/' . $item->id . '/edit') }}" title="Edit TransactionDetail"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/transaction-detail', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger',
                                                        'title' => 'Delete TransactionDetail',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ config('laravelmanthra.view_columns_number') + 2 }}">
                                            Data not found, <a href="{{ url('/transaction-detail/create') }}"> create new </a>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $transactiondetail->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('manthra::include.flash_message')
@endsection

