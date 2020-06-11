@extends('layout.app')

@section('content')
<div class="col-12">
    <a href="{{route('student.add')}}" class="btn btn-success float-right mb-4">
      Add New Student
    </a>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>
    @endif
    @if(isset($students))
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col">Controls</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        @foreach($students as $student)
            <tr>
              <td>{{ $i }}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->contact}}</td>
              <td>{{$student->address}}</td>
              <td>
                <a href="{{route('student.edit', $student->id)}}" class="btn btn-success">
                  edit
                </a>
                <a href="{{route('student.delete', $student->id)}}" class="btn btn-danger">
                  delete
                </a>
              </td>
            </tr>
            <?php $i++; ?>
        @endforeach
        </tbody>
    </table>
    </div>
    @endif
</div>
@endsection