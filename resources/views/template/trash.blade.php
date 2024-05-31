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
       
        @auth
        <th>Restore</th>
        <th>Permanent Delete</th>
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
        
        @auth
        <td>
            <form action="{{ route('thala.recover',$dat->id) }}" method="post">
            @csrf
           
            <input type="submit" value="Restore" onclick="return confirm('do you want to restore this record @php
                echo $dat->name
            @endphp')" class="btn btn-primary">
            </form>
        </td>
        <td>
            <form action="{{ route('thala.delete',$dat->id) }}" method="post">
            @csrf
    
            <input type="submit" value="Permanent Delete" onclick="return confirm('Do you want to delete this permanently @php
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