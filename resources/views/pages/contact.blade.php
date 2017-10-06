@extends('main')
@section('title', ' | Contact')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form>
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>


            </div>
        </div>
    </div>

@endsection