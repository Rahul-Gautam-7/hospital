@extends('template.layout')
@section('content')


<form >
  @csrf
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" name="name"  class="form-control" disabled value="{{ $patient->name }}" > 
    </div>

    <div class="mb-3">
        <label  class="form-label">mobile</label>
        <input type="text" name="mobile" class="form-control" disabled value="{{ $patient->mobile }}" > 
      </div>

      <div class="mb-3">
        <label  class="form-label">address</label>
        <input type="text" name="address" class="form-control" disabled value="{{ $patient->address }}" > 
      </div>


      <div class="mb-3">
        <label  class="form-label">reference</label>
        <input type="text" name="reference" class="form-control" disabled value="{{ $patient->reference }}" > 
      </div>


      <div class="mb-3">
        <label  class="form-label">Gmail</label>
        <input type="email" name="gmail" class="form-control" disabled value="{{ $patient->gmail }}" > 
      </div>

      <div class="mb-3">
        <label  class="form-label">Gender</label>

        <select name="gender" id="" disabled value="{{ $patient->gender }}">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
      </div>
      @foreach ($med as $m )
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Medicine : {{ $m->medicine }}</h5>
          
          <p class="card-text">Time : {{ $m->created_at }}</p>
          
        </div>
      </div>
        
      @endforeach

     
      
  </form>

  <form action="{{ route('med.store') }}" method="post">
    @csrf
    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
    <div class="form-floating">
      <textarea class="form-control" name="medicine" placeholder="Enter medicine here"  style="height: 100px"></textarea>
      <label >Medicines</label>
    </div>
    @auth
    <button type="submit" class=" my-2 btn btn-primary">Submit</button>
    @endauth
  </form>
    
@endsection
