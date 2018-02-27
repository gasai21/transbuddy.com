@extends('base/basehome')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-sm-12 col-lg-6">
            <div class="card" style="background-color: #ffffff;padding: 50px">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Bahasa yang anda butuhkan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Pilih tanggal</label>
                    <input type="date" class="form-control datepicker">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Sampai</label>
                    <input type="date" class="form-control datepicker">
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">Next</button><br>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.datepicker').datepicker();
        })
    </script>
@endsection
