@extends('admin.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a style="margin: 10px" class="btn btn-success" href="{{ route('educations.create') }}"> Create New Education</a>
    <table class="table table-striped" style="margin: 10px">
        <tr>
            <th>Tahun</th>
            <th>Tingkat</th>
            <th>Nama Sekolah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($educations as $education)
        <tr>
            <td>{{ $education->tahun }}</td>
            <td>{{ $education->tingkat }}</td>
            <td>{{ $education->nama_sekolah }}</td>
            <td colspan="7">
                <form action="{{ route('educations.destroy',$education->id) }}" method="POST">
  
                    <a class="btn btn-primary" href="{{ route('educations.edit',$education->id) }}">Edit</a>
  
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
        </tr>
        @endforeach
    </table>
  
    {!! $educations->links() !!}
      
@endsection