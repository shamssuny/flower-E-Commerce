@extends('layouts.master')

@section('title','Contact')

@section('content')
    <hr>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="decor-title">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="message..." row="3" ></textarea>
                        </div>
                    </form>
                    <a href="" id="send" class="btn btn-danger">Send</a>
                </div>
                <div class="col-md-6">
                    <div class="map_section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5872639163554!2d90.38581001498356!3d23.868785684531126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41a1356bebb%3A0xd230134f87092b1a!2sRd+No+19%2C+Dhaka+1230%2C+Bangladesh!5e0!3m2!1sen!2s!4v1501949968773" style="border:0" allowfullscreen="" frameborder="0" height="300" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection