@extends('admin.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a style="margin: 10px" class="btn btn-success" href="{{ route('resumes.create') }}"> Add New Resume</a>
    <table class="table table-striped" style="margin: 10px">
        <tr>
            <th>Link Github</th>
            <th>Nama Projek</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($resumes as $resume)
        <tr>
            <td>{{ $resume->link_git }}</td>
            <td>{{ $resume->nama_projek }}</td>
            <td>{{ $resume->deskripsi }}</td>
            <td colspan="7">
                <form action="{{ route('resumes.destroy',$resume->id) }}" method="POST">
  
                    <a class="btn btn-primary" href="{{ route('resumes.edit',$resume->id) }}">Edit</a>
  
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
        </tr>
        @endforeach
    </table>
  
    {!! $resumes->links() !!}
      
@endsection