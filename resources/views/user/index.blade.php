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
            @auth


            <th>
                edit
            </th>
            <th>
                delete
            </th>
            @endauth
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
                <a href="{{route('hello.show',$ddd->id)}}" class="btn btn-info">view</a>
            </td>
            @auth


            <td>
                <a href="{{route('hello.edit',$ddd->id)}}" class="btn btn-secondary">edit</a>
            </td>
            <td>
                <form action="{{route('hello.destroy',$ddd->id)}} " method="post">
                    @csrf
                    @method('delete')
                <input type="submit" class="btn btn-danger" value="delete" name="submit">
                </form>
            </td>
            @endauth
        </tr>

    </tbody>
    @endforeach
    </table>
    {{$data->links()}}
@endsection
