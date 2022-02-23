@extends('Layouts.App')
@section('page-tittle')
    Add New Patient
@endsection
@section('main-section')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">New Entry</h3>
                </div>


                <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Phone Number ">
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Token Number</label>
                                    <select class="custom-select">
                                        <option> 1</option>
                                        <option> 2</option>
                                        <option> 3</option>
                                        <option> 4</option>
                                        <option> 5</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Consultation Fee</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Attender Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">On Date</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Phone number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Patient Address</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success float-right">Add Entry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
