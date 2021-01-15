@extends('admin.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a style="margin: 10px" class="btn btn-success" href="{{ route('skills.create') }}"> Add New Skills</a>
    <table class="table table-striped" style="margin: 10px">
        <tr>
            <th>Skill</th>
            <th>Nilai Skill</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ $skill->skill }}</td>
            <td>{{ $skill->nilai_skill }}</td>
            <td colspan="7">
                <form action="{{ route('skills.destroy',$skill->id) }}" method="POST">
  
                    <a class="btn btn-primary" href="{{ route('skills.edit',$skill->id) }}">Edit</a>
  
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
        </tr>
        @endforeach
    </table>
  
    {!! $skills->links() !!}
      
@endsection