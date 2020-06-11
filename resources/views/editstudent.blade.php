@extends('layout.app')

@section('content')
<div class="col-12 col-md-3 col-lg-3"></div>
<div class="col-12 col-md-6 col-lg-6">
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
    <form action="{{route('student.update', $student->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Please Enter Your Name" value="{{$student->name}}">
            </div>
            <div class="form-group">
                <label for="conactNumber">Contact Number:</label>
                <input type="text" name="contactNumber" class="form-control" placeholder="Please Enter Your Contact Number" value="{{$student->contact}}">
            </div>
            <div class="form-group">
               <label for="address">Address:</label>
               <textarea rows="5" name="address" class="form-control" style="resize: none;" placeholder="Please Enter Your Contact Number">{{$student->address}}</textarea>
           </div>
           <button type="submit" name="btnRegister" class="btn btn-success">Add Now</button>
    </form>
</div>
<div class="col-12 col-md-3 col-lg-3"></div>
@endsection           