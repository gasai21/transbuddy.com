@extends('base/basehome')
@section('content')

    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-sm-12 col-lg-6">
            <div class="card" style="background-color: #ffffff;padding: 50px">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #000000;font-size: 23px;"><span>Selamat datang di Transbuddy.com</span></h5>
                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Login</button>
                    <br>
                    <center><a href="#" style="text-decoration: none;">Sign Up Now!</a></center>
                </div>
                <br>
            </div>
        </div>
    </div>

@endsection
