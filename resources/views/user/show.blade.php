
@extends('temp.layout')

@section('conn')

    <form >
        @csrf
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{$data->name}}" disabled>
          @error('name')
          <div class="alert alert-danger">
            {{$message}}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$data->password}}" disabled>
        </div>

        <select class="form-select" aria-label="Default select example" name="city" value={{$data->city}} disabled>
            <option selected>City</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Baroda">Baroda</option>
            <option value="Surat">Surat</option>
          </select> <br><br>


      </form>

@endsection











