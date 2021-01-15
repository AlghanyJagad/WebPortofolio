@extends('admin.layout')
   
@section('content')
    <div class="row" style="margin: 10px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profils.index') }}"> Back</a>
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
  
    <form action="{{ route('profils.update',$profil->id) }}" method="POST" style="margin: 10px">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Lengkap:</strong>
                    <input type="text" name="nama_lengkap" value="{{ $profil->nama_lengkap }}" class="form-control" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $profil->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi:</strong>
                    <input type="text" name="lokasi" value="{{ $profil->lokasi }}" class="form-control" placeholder="Lokasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No HP:</strong>
                    <input type="text" name="no_hp" value="{{ $profil->no_hp }}" class="form-control" placeholder="No HP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi">{{ $profil->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $profil->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Lahir</strong>
                    <input type="date" name="tgl_lahir" value="{{ $profil->tgl_lahir }}" class="form-control" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection