@extends('master')

@section('title','Learn Word Easily!')


@section('body')

<div id="carouselExampleControls" class="carousel slide px-3" data-ride="carousel">
    <div class="carousel-inner px-sm-5 text-center">
      <div class="carousel-item text-center active">
        <div class="card w-100  text-center" style="margin: 0 auto;float: none;">
        {{--  <h5 class="card-header">Featured</h5>  --}}
        <div class="card-body text-left">
            <h5 class="card-title">Question One:</h5>
            <p class="card-text">
                The results suggest that our brains actively <b>delete</b> memories that might distract us from the task at hand.
                <br>
                In this sentence, delete means to: <br>
                
                <div class="custom-control custom-checkbox" >
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1" >
                        remove or make invisible
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck2">
                    <label class="custom-control-label custom-control-label2" for="customCheck2">
                        provide with abilities or understanding
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck3">
                    <label class="custom-control-label custom-control-label2" for="customCheck3">
                        give a statement representing something
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck4">
                    <label class="custom-control-label custom-control-label2" for="customCheck4">
                        cause to move faster
                    </label>
                </div>

            </p>
            <a href="#" class="btn btn-primary">Next</a>
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="card" style="margin: 0 auto;float: none;">
        {{--  <h5 class="card-header">Featured</h5>  --}}
        <div class="card-body text-left">
            <h5 class="card-title">Question Two:</h5>
            <p class="card-text">
                The opposite of false is:
                <br>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck5">
                    <label class="custom-control-label custom-control-label2" for="customCheck5">
                        tame
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck6">
                    <label class="custom-control-label custom-control-label2" for="customCheck6">
                        public
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">
                        true
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck8">
                    <label class="custom-control-label custom-control-label2" for="customCheck8">
                            skillful
                    </label>
                </div>
            </p>
            <a href="#" class="btn btn-primary">Next</a>
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="card" style="margin: 0 auto;float: none;">
        <div class="card-body text-left">
            <h5 class="card-title">Question Three:</h5>
            <p class="card-text">
                What would you most likely do in a gymnasium?
                <br>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck9">
                    <label class="custom-control-label custom-control-label2" for="customCheck9">
                            cool a meal
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck10">
                    <label class="custom-control-label custom-control-label2" for="customCheck10">
                        buy clothing
                    </label>
                </div>
                <div class="custom-control custom-checkbox custom-control2  custom-checkbox2">
                    <input type="checkbox" class="custom-control-input custom-control-input2" id="customCheck11">
                    <label class="custom-control-label custom-control-label2" for="customCheck11">
                        paint a picture
                    </label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                    <label class="custom-control-label" for="customCheck12">
                        play basketball
                    </label>
                </div>
            </p>
            <a href="#" class="btn btn-primary">Next</a>
        </div>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
@endsection

@section('scripts')
    $('.carousel').carousel({
        interval: false
    });
    $("input").click(function() { 
        $(this).attr("disabled", true);
    });
@endsection
