@extends('layouts.master')

@section('topcontent')
    <style>
        .container{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-7">
            <a href="#"><img class="img-responsive" src="http://placehold.it/700x300"></a>
        </div>

        <div class="col-lg-5 col-md-5">
            <h3>Project One</h3>
            <h4>Subheading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
<hr>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="download.png" alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal">Source</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
<!-- beginmodal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Code
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<!-- endmodal -->
            </div>
        </div>
    </div>


    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="download.png" alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="download.png" alt="...">
            <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
        </div>
    </div>


</div>
@stop
