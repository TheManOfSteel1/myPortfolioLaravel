@extends('pages.master')


@section('content')

<div class="row blogback mt-5">
    <div class="col">
        <h1 style="color:white">Contact Info</h1>

        <form>
            <div class="form-group">

                <label for="exampleFormControlInput1">Subject</label>
                <input type="Subject" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
                <label for="exampleFormControlInput1">Email address</label>

                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your email">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Comment here" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



@endsection
