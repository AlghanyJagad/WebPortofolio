@extends('admin.layout')
   
@section('content')
    <div class="row" style="margin: 10px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Skill</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('skills.index') }}"> Back</a>
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
  
    <form action="{{ route('skills.update',$skill->id) }}" method="POST" style="margin: 10px">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Skill:</strong>
                    <input type="text" name="skill" value="{{ $skill->skill }}" class="form-control" placeholder="Skill">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai Skill:</strong>
                    <input type="text" name="nilai_skill" value="{{ $skill->nilai_skill }}" class="form-control" placeholder="Nilai Skill">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection