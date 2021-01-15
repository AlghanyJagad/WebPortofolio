@extends('admin.layout')
   
@section('content')
    <div class="row" style="margin: 10px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Resume</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('resumes.index') }}"> Back</a>
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
  
    <form action="{{ route('resumes.update',$resume->id) }}" method="POST" style="margin: 10px">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Link Github:</strong>
                    <input type="text" name="link_git" value="{{ $resume->link_git }}" class="form-control" placeholder="Link Github">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Projek:</strong>
                    <input type="text" name="nama_projek" value="{{ $resume->nama_projek }}" class="form-control" placeholder="Nama Projek">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi">{{ $resume->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection