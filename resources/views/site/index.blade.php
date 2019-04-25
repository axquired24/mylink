<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ url('lte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('lte/plugins/font-awesome/font-awesome.css') }}">

    <title>MyLink</title>
</head>
<style>
    .menu-item {
        margin: 5px auto;
    }
</style>
<body>

    <div class="container" style="margin-top: 100px">
        <div class="text-center">
            <img src="{{ asset('images/achievement.png') }}" class="img-responsive" style="margin: auto; max-height: 100px">
            <p>{{ $user->name }}</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @foreach($user->links as $link)
                    <div class="menu-item">
                        <a href="{{ route('public.link.click', ['id' => $link->id]) }}"
                            target="_blank"
                            class="btn btn-default"
                            style="width: 100%"
                        >
                            {{ $link->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


<!-- jQuery 2.2.3 -->
<script src="{{ url('lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('lte/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>