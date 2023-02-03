@extends('layouts.template')

@section('content')

    <div class="card">
        <div class="card-body row row-cols-lg-auto g-3">
            
            <form action="{{ route('dynamic.create') }}" method="POST">
                @csrf
                <div class="card-header">
                    <span class="text-nowrap">Create New Table</span>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-12">
                        <div class="form-group">
                            <strong>Table Name:</strong>
                            <input type="text" name="tableName" class="form-control" placeholder="TableName">
                        </div>
                    </div>
                    {{--  <div class="col-xs-6 col-sm-6 col-md-12">
                        <div class="form-group">
                            <strong>Column Name:</strong>
                            <input type="text" class="col1" name="col1" placeholder="Column Name">
                        </div>
                    </div> --}}
                   
                    <div class="col-xs-6 col-sm-6 col-md-12">
                        <label for="col1" class="form-label">Number of Columns</label>
                        <input type="number" class="form-control" name="col1" id="col1" min="1" value="4">
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>                
            </form>
        </div>
    </div>
    
@endsection