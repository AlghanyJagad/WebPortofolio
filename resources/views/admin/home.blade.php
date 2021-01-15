@extends('admin.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped">
        <tr>
            <th>Nama Lengkap</th>
            <th>Nama</th>
            <th>lokasi</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
        </tr>
        @foreach ($profils as $profil)
        <tr>
            <td>{{ $profil->nama_lengkap }}</td>
            <td>{{ $profil->nama }}</td>
            <td>{{ $profil->lokasi }}</td>
            <td>{{ $profil->no_hp }}</td>
            <td>{{ $profil->email }}</td>
            <td>{{ $profil->tgl_lahir }}</td>
        </tr>
        
        <tr>
          <th colspan="7">Deskripsi</th>
      </tr>
        <tr>
            <td colspan="7">{{ $profil->deskripsi }}</td>
        </tr>
        <tr>
            <td colspan="7" style="text-align: center">
              <form action="{{ route('profils.destroy',$profil->id) }}" method="POST">

                  <a class="btn btn-primary" href="{{ route('profils.edit',$profil->id) }}">Edit</a>

                  @csrf
              </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $profils->links() !!}
      
@endsection