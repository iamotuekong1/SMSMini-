<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Hmm</title>
  </head>
  <body>
    @include('navbar')

    <div class="header-container">
        <div class="header text-center">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
                <section class="col-md-4">

                </section>
            </div>
        </div>
    @elseif ($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
                <section class="col-md-4">
                    <div class="card mb-3">
                        <img src="https://png.pngtree.com/png-clipart/20230914/original/pngtree-student-loan-png-image_12160223.png" class="card-img-top" style="max-height: 30vh; object-fit: cover;" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Enter Student Info</h5>
                          <form action="{{ url('/store') }}" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label>CNE</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                                </div>
                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input name="firstName" type="text" class="form-control" placeholder="Enter first name">
                                </div>
                                <div class="mb-3">
                                    <label>Second Name</label>
                                    <input name="secondName" type="text" class="form-control" placeholder="Enter second name">
                                </div>
                                <div class="mb-3">
                                    <label>Age</label>
                                    <input name="age" type="text" class="form-control" placeholder="Enter age">
                                </div>
                                <div class="mb-3">
                                    <label>Specialty</label>
                                    <input name="specialty" type="text" class="form-control" placeholder="Enter specialty">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @elseif ($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
                <section class="col-md-4>

                </section>
            </div>
        </div>
    @elseif ($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
                <section class="col-md-4">
                    <div class="card mb-3">
                        <img src="https://png.pngtree.com/png-clipart/20230914/original/pngtree-student-loan-png-image_12160223.png" class="card-img-top" style="max-height: 30vh; object-fit: cover;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Edit Student Info</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label>CNE</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                                </div>
                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter first name">
                                </div>
                                <div class="mb-3">
                                    <label>Second Name</label>
                                    <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter second name">
                                </div>
                                <div class="mb-3">
                                    <label>Age</label>
                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter age">
                                </div>
                                <div class="mb-3">
                                    <label>Specialty</label>
                                    <input value="{{ $student->specialty }}" name="specialty" type="text" class="form-control" placeholder="Enter specialty">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                    </div>
                </section>
            </div>
        </div>

    @endif

    <footer></footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>
</html>

