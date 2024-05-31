@extends('template.layout')
@section('content')


<form action="{{ route('thala.store') }}" method="post">
  @csrf
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" name="name" class="form-control"  > 
      @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>   
      @enderror
    </div>

    <div class="mb-3">
        <label  class="form-label">mobile</label>
        <input type="number" name="mobile" class="form-control"  > 
        @error('mobile')
        <div class="alert alert-danger">
            {{ $message }}
        </div>   
      @enderror
      </div>

      <div class="mb-3">
        <label  class="form-label">address</label>
        <input type="text" name="address" class="form-control"  > 
        @error('address')
        <div class="alert alert-danger">
            {{ $message }}
        </div>   
      @enderror
      </div>


      <div class="mb-3">
        <label  class="form-label">reference</label>
        <input type="text" name="reference" class="form-control"  > 
        @error('reference')
        <div class="alert alert-danger">
            {{ $message }}
        </div>   
      @enderror
      </div>


      <div class="mb-3">
        <label  class="form-label">Gmail</label>
        <input type="email" name="gmail" class="form-control"  > 
        @error('gmail')
        <div class="alert alert-danger">
            {{ $message }}
        </div>   
      @enderror
      </div>

      <div class="mb-3">
        <label  class="form-label">Gender</label>

        <select name="gender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  {{-- @if($errors->any())
    <div class="alert alert-danger">

      <ul>
        @foreach ($errors->all() as $error )
        <li>
            {{ $error }}
        </li>
          
        @endforeach
      </ul>

    </div>
  @endif --}}
    
@endsection
