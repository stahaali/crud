@extends('frontend.master')

@section('bodycontent')

    <section>
        <div class="container">
            <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">create Records</h3>
                            </div>
                            <div class="card-body">
                            <form method="post" action="{{ route('home') }}">
                            {!! csrf_field() !!}
                            <div class="form-group mb-4">
                                <input type="text" name="studname" id="studname" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="course" id="course" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="fee" id="fee" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection