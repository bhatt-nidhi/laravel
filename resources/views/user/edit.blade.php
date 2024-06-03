
@extends('temp.layout')

@section('conn')

    <form action="{{route('hello.update',$data->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label  class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{$data->name}}">
          @error('name')
          <div class="alert alert-danger">
            {{$message}}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{$data->password}}">
        </div>

        <select class="form-select" aria-label="Default select example" name="city" value={{$data->city}}>
            <option selected>City</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Baroda">Baroda</option>
            <option value="Surat">Surat</option>
          </select> <br><br>

          <button type="submit" class="btn btn-primary">Submit</button>

      </form>

@endsection











