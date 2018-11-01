@extends('master')

@section('title','Learn Word Easily!')

@section('style')
@media only screen and (max-width: 600px) {
    .vocab{
        font-size:4rem !important;
    }
}
@endsection

@section('body')
<div class="container">
    <div class="input-group m-0 w-50" style="margin: 0 auto;float: none;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-search"></i>
            </span>
        </div>
        <input type="text" class="form-control" placeholder="LOOK UP" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="my-3"></div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1 vocab">affiliate</h1>
                    </div>
                    <div class="col">
                        <a href="" style="color:#6eaf27; text-decoration: none;"><i class="fas fa-check-circle" ></i> Start learning this vocab.</a>
                    </div>
                </div>
            </h5>
            <p class="card-text">
                <span style="font-size: 1.8em; font-weight: 300;"> An affiliate is a subordinate group or organization associated with a larger group or organization. For example, the American broadcasting company NBC has hundreds of affiliate stations around the country.</span>
                <br>
                <br>
                <span style="font-size: 1.2em; font-weight: 300;">Affiliate comes from the Medieval Latin term affiliat, meaning "adopted as a son," though its unlikely NBC sees its affiliate companies in quite that way. The word can also be used to describe someone who simply hangs out with someone else a lot, or keeps company with them regularly, whether for business or not.</span>
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</div>
@endsection