@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
        <h2>City Bikes Information-Part1</h2>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>StationName</th>
                    <th>AvailableDocks</th>
                    <th>TotalDocks</th>
                    <th>latitude</th>
                    <th>longitude</th>
                    <th>statusValue</th>
                    <th>statusKey</th>
                    <th>availableBikes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($city_bikes as $city_bike)
                    <tr>
                        <td>{{$city_bike->stationName}}</td>
                        <td>{{$city_bike->availableDocks}}</td>
                        <td>{{$city_bike->totalDocks}}</td>
                        <td>{{$city_bike->latitude}}</td>
                        <td>{{$city_bike->longitude}}</td>
                        <td>{{$city_bike->statusValue}}</td>
                        <td>{{$city_bike->statusKey}}</td>
                        <td>{{$city_bike->availableBikes}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        <h2>City Bikes Information-Part2</h2>

            <table class="table table-striped">
                <thead>
                <tr>

                    <th>stAddress1</th>
                    <th>stAddress2</th>
                    <th>city</th>
                    <th>postalCode</th>
                    <th>location</th>
                    <th>altitude</th>
                    <th>testStation</th>
                    <th>lastCommunicationTime</th>
                    <th>landMark</th>
                </tr>
                </thead>
                <tbody>
                @foreach($city_bikes as $city_bike)
                    <tr>
                        <td>{{$city_bike->stAddress1}}</td>
                        <td>{{$city_bike->stAddress2}}</td>
                        <td>{{$city_bike->city}}</td>
                        <td>{{$city_bike->postalCode}}</td>
                        <td>{{$city_bike->location}}</td>
                        <td>{{$city_bike->altitude}}</td>
                        <td>{{$city_bike->testStation}}</td>
                        <td>{{$city_bike->lastCommunicationTime}}</td>
                        <td>{{$city_bike->landMark}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


    </div>
</div>
@endsection
