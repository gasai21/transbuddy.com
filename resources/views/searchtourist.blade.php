@extends('base/basehome')
@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-sm-12 col-lg-6">
            <div class="card" style="background-color: #ffffff;padding: 50px">
                <div class="card-body">
                    <h5 class="card-title" style="color: #000000;"><span>50</span> penerjemah Bahasa <span>inggris</span> hadir di bandung :</h5>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">List Translate</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModal">search</button>
                        </div>
                    </div>

                </div>
                <br>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>ini isi pesan</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection
