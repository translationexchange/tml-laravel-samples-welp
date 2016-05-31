@extends('layouts.application')

@section('content')

<div class="container">

    <div class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="pull-right"><br>
                    <a href="#">{!! tr("More Cities", "A link to view more cities") !!}</a>
                </div>
                <h4>
                    {!! tr("Welp {city}", ["city" => tr("Los Angeles")]) !!}
                </h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7">
                <div class="well">
                    {!! trh("
                        <h3 class='text-primary'>
                            The best way to find local businesses
                        </h3>
                        <p class='text-muted'>
                            Search for everything from the city's tastiest burger to the most renowned cardiologist.
                            What will you uncover in your neighborhood?
                        </p>
                        <p>
                            <a href='#' class='btn btn-primary'>Create your free account</a>
                        </p>
                    ") !!}
                </div>

                <h3 class="text-primary">
                    {!! tr("Best of Welp: {city}", ["city" => tr("Los Angeles")]) !!}
                </h3>

                <hr>

                <small class="pull-right">
                    <a href="#">{!! tr("See More", "A link to view more restaurants") !!}</a>
                </small>

                <h5 class="text-primary">
                    {!! tr("Restaurants") !!}
                </h5>


                @foreach ($restaurants as $index => $restaurant)
                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="media-object media-img"></div>
                    </a>
                    <div class="media-body">
                        <strong>
                            {{ $index + 1 }}.
                            <a href="#">{{ $restaurant["name"] }}</a>
                        </strong>

                        <div class="text-muted">
                            <img src="{{ asset("images/" . $restaurant['rating'] . "-stars.png") }}" title="{{ trl('{count} out of 5 stars', ['count' => $restaurant['rating']]) }}">
                            {!! tr("{count || Review}", ["count" => $restaurant["review_count"]]) !!}
                        </div>

                        <div class="media">
                            <a class="pull-left" href="#">
                                <div class="media-object media-img-sm"></div>
                            </a>
                            <div class="media-body">
                                <p>{!! trh($restaurant["last_comment"]) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="col-sm-5">
                <form>
                    <div class="form-group">
                        <label>
                            <small>
                                {!! tr("Find") !!}
                            </small>
                        </label>
                        <input type="text" class="form-control" placeholder="{{ trl('tacos, cheap dinner, etc.') }}">
                    </div>
                    <div class="form-group">
                        <label>
                            <small>
                                {!! tr("Near") !!}
                            </small>
                        </label>
                        <input type="text" class="form-control" value="{{ trl('Los Angeles') }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-sm">
                            {!! tr("Search") !!}
                        </button>
                    </div>
                </form>

                <hr>

                <h4 class="text-primary">
                    {!! tr("Review of the day") !!}
                </h4>

                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="media-object media-img"></div>
                    </a>
                    <div class="media-body">
                        <strong>
                            {!! tr("{user} reviewed [link: {restaurant}]", [
                            "user"          => ["object" => ["gender" => "female", "name" => "Jane Smith"], "attribute" => "name"],
                            "restaurant"    => "Ricky's Fish Tacos",
                            "link"          => function($text) { return "<a href='#'>$text</a>"; } ]
                            ) !!}
                        </strong>
                        <div>
                            <img src="{{ asset("images/5-stars.png") }}" title="{{ trl('{count} out of 5 stars', ['count' => 5]) }}">
                        </div>
                        <small class="text-muted">
                            {!! tr("{count || Review}", ["count" => 234]) !!}
                        </small>

                        <p>
                            {!! tr("You can't beat flavorful crunchy tacos, free chips and delicious salsa, yummy burritos and enchiladas.") !!}
                            <a href="#">{!! tr("Read More") !!}</a>
                        </p>
                    </div>
                </div>

                <hr>

                <h4 class="text-primary">
                    {!! tr("Welp on the go") !!}
                </h4>

                <p>
                    {!! tr("Get the Welp app on your mobile phone. It's free and helps you find great, local businesses on the go!") !!}
                </p>

                <button type="submit" class="btn btn-default btn-sm">
                    {!! tr("Get it free now") !!}
                </button>

            </div>
        </div>
        <br><br><br>
    </div>
</div>

@endsection
