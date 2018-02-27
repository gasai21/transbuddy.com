@extends('base/basehome')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-sm-12 col-lg-6">
            <div class="card" style="background-color: #ffffff;padding: 50px">
                <div class="card-body">
                    <h5 class="card-title text-center display-4" style="color: #000000;">Login as Tourist</h5>
                </div><br><br>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih negara tujuan anda</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih kota tujuan anda</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">Login</button><br>
            </div>
        </div>
    </div>
@endsection
