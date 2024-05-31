@extends('template.layout')
@section('content')


<form action="{{ route('thala.update',$patient->id) }}" method="post">
  @csrf
  @method('put')
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" name="name" class="form-control" required value="{{ $patient->name }}" > 
    </div>

    <div class="mb-3">
        <label  class="form-label">mobile</label>
        <input type="text" name="mobile" class="form-control" required value="{{ $patient->mobile }}" > 
      </div>

      <div class="mb-3">
        <label  class="form-label">address</label>
        <input type="text" name="address" class="form-control" required value="{{ $patient->address }}" > 
      </div>


      <div class="mb-3">
        <label  class="form-label">reference</label>
        <input type="text" name="reference" class="form-control" required value="{{ $patient->reference }}" > 
      </div>


      <div class="mb-3">
        <label  class="form-label">Gmail</label>
        <input type="email" name="gmail" class="form-control" required value="{{ $patient->gmail }}" > 
      </div>

      <div class="mb-3">
        <label  class="form-label">Gender</label>

        <select name="gender" id="" value="{{ $patient->gender }}">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection
