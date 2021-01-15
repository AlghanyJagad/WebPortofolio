@extends('admin.layout')
   
@section('content')
    <div class="row" style="margin: 10px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Experience</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('experiences.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('experiences.update',$experience->id) }}" method="POST" style="margin: 10px">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun:</strong>
                    <input type="text" name="tahun" value="{{ $experience->tahun }}" class="form-control" placeholder="Tahun">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tingkat:</strong>
                    <input type="text" name="bagian" value="{{ $experience->bagian }}" class="form-control" placeholder="Bagian">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Sekolah:</strong>
                    <input type="text" name="nama_industri" value="{{ $experience->nama_industri }}" class="form-control" placeholder="Nama Industri">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection