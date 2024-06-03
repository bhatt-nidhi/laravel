@extends('temp.layout')

@section('conn')
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>
                id
            </th>
            <th>
                name
            </th>
            <th>
                password
            </th>
            <th>
                city
            </th>
            <th>
                view
            </th>
            <th>
                edit
            </th>
            <th>
                delete
            </th>
        </tr>
    </thead>
    @foreach ($data as $ddd)


    <tbody>
        <tr>
            <td>
                {{$ddd->id}}
            </td>
            <td>
                {{$ddd->name}}
            </td>
            <td>
                {{$ddd->password}}
            </td>
            <td>
                {{$ddd->city}}
            </td>

            <td>
                <a href="{{route('hello.restore',$ddd->id)}}" class="btn btn-secondary">restore</a>
            </td>
            {{-- <td>
                <form action="{{route('hello.del',$ddd->id)}} " method="post">
                    @csrf
                    @method('delete')
                <input type="submit" class="btn btn-danger" value="delete" name="submit">
                </form>
            </td> --}}
        </tr>
    </tbody>
    @endforeach
    </table>
    {{$data->links()}}
@endsection
