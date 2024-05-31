@extends('template.layout')

@section('content')


<h1>home page</h1>

<table class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Gmail</th>
        <th>Reference</th>
        <th>Show</th>
        @auth
        <th>Edit</th>
        <th>Delete</th>
        @endauth
        
    </tr>

    @foreach ($data as $dat)

    <tr>
        <td>{{ $dat->id }}</td>
        <td>{{ $dat->name }}</td>
        <td>{{ $dat->mobile }}</td>
        <td>{{ $dat->gender }}</td>
        <td>{{ $dat->address }}</td>
        <td>{{ $dat->gmail }}</td>
        <td>{{ $dat->reference }}</td>
        <td>
            <a href="{{ route('thala.show',$dat->id) }}" class="btn btn-primary">Show</a>
        </td>
        @auth
        <td>
            <a href="{{ route('thala.edit',$dat->id) }}" class="btn btn-info">Edit</a>
        </td>
        <td>
            <form action="{{ route('thala.destroy',$dat->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete" onclick="return confirm('Do you want to delete @php
                echo $dat->name
            @endphp')" class="btn btn-danger">
            </form>
        </td>
        @endauth
        
    </tr>
        
    @endforeach

    
</table>

    {{ $data->links('template.custom') }}
    


    
@endsection