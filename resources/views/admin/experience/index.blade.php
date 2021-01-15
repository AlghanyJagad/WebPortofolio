@extends('admin.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a style="margin: 10px" class="btn btn-success" href="{{ route('experiences.create') }}"> Create New Experience</a>
    <table class="table table-striped" style="margin: 10px">
        <tr>
            <th>Tahun</th>
            <th>Bagian</th>
            <th>Nama Industri</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($experiences as $experience)
        <tr>
            <td>{{ $experience->tahun }}</td>
            <td>{{ $experience->bagian }}</td>
            <td>{{ $experience->nama_industri }}</td>
            <td colspan="7">
                <form action="{{ route('experiences.destroy',$experience->id) }}" method="POST">
  
                    <a class="btn btn-primary" href="{{ route('experiences.edit',$experience->id) }}">Edit</a>
  
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
        </tr>
        @endforeach
    </table>
  
    {!! $experiences->links() !!}
      
@endsection