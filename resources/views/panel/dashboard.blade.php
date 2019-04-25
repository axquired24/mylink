@extends("layouts.admin.home")
@section("title", "Dashboard")

@section("content")

    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $totalLink }}<sup style="font-size: 20px"></sup></h3>
                    <p>
                        <small>Total </small>
                        Registered Link
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <a href="{{ route('panel.links') }}" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $linkByPopularity->first()->click_count }}<sup style="font-size: 20px"> Hits</sup></h3>
                    <p>
                        <small>Popular Link </small>
                        {{ $linkByPopularity->first()->name }}
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-star"></i>
                </div>
                <a href="{{ route('panel.links') }}" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>{{ $linkByRecent->first()->lastClickStr('d F') }}<sup style="font-size: 20px"></sup></h3>
                    <p>
                        <small>Recent Click </small>
                        {{ $linkByRecent->first()->name }}
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <a href="{{ route('panel.links') }}" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    {{-- /.row --}}

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Hello, {{ auth()->user()->name }}
                    </h3>
                </div>
                <div class="box-body">
                    Visit Your Site:
                    <?php
                        $sitename = route('public.site', ['sitename' => auth()->user()->sitename]);
                    ?>
                    <a href="{{ $sitename }}" target="_blank">{{ $sitename }}</a>
                </div>
            </div>
        </div>
        {{-- /.col-md --}}
    </div>
    {{-- /.row --}}

@endsection


@push('jscode')
    <script>
        $("#menu_dashboard").addClass('active');
    </script>
@endpush