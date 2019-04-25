<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opps! Nothing Here</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body style="background: #FFF">
    <div class="container" style="margin-top: 10rem">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="{{ asset('images/404-not.gif') }}" alt="404 Nt Fnd" class="img-responsive">

                <div class="text-center">
                    <a href="{{ route('panel.dashboard') }}" class="btn btn-primary">Oops! Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>