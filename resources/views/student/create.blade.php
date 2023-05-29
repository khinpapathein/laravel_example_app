@extends('template')
@section('content')        
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('template_assets/assets/img/contact-bg.jpg')}})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Student Form</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {{-- <p>Student Lists</p> --}}
                    <div class="my-5">
                        <form method="post" action="{{ route('student.store')}}">
                            @csrf
                            <div class="mb-3">
                              <label for="inputName" class="form-label">Name</label>
                              <input type="text" class="form-control" id="inputName" name="namee">
                            </div>
                            <div class="mb-3">
                              <label for="inputAge" class="form-label">Age</label>
                              <input type="number" class="form-control" id="inputAge" name="agee">
                            </div>
                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="inputAddress" name="addresss"></textarea>
                              </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection