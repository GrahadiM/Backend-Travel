@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaction - {{ $order->number }}</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.guides.update', $order->id ) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        <div class="form-group">
                            <label for="number">No Pesanan</label>
                            <input type="text" class="form-control" id="number" name="number" value="{{ $order->number }}" />
                        </div>
                        <div class="form-group">
                            <label for="guide_id">Status</label>
                            <select class="form-control" id="guide_id" name="guide_id">
                                @foreach ($guides as $guide)
                                    <option value="{{ $guide->id }}">{{ Str::ucfirst($guide->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>

@endsection

@push('script-alt')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush
