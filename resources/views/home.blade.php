@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Import Excel') }}</div>

                
                    <div class="card-body">
                        <form action="{{route('traffic.import')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" />
            
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                       </form>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
