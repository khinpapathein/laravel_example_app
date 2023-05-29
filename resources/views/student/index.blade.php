@extends('template')
@section('content')        
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('template_assets/assets/img/contact-bg.jpg')}})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Student Lists</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-1 px-lg-1">
            <div class="row gx-2 gx-lg-2 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {{-- <p>Student Lists</p> --}}
                    <a class="btn btn-info" href="{{ route('student.create')}}">Student Form</a>
                    <div class="my-5">
                        {{-- {{$students}} --}}
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                   $i=1; 
                                @endphp
                                @foreach ($students as $item)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->age}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a class="btn btn-info" style="padding: 7px ; width: auto; border-radius: 5px; font-weight: 600;" href="{{ route('student.show', $item->id)}}">Details</a>
                                            <a class="btn btn-info" style="padding: 7px ; width: auto; border-radius: 5px; font-weight: 600;" href="{{ route('student.edit', $item->id)}}">Edit</a>
                                            <form action="{{route('student.destroy', $item->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger" style="padding: 7px ; width: auto; border-radius: 5px; font-weight: 600;">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection