@extends("layouts.admin.home")
@section("title", "Dashboard")

@section("content")

    <div class="row">
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Hello, {{ auth()->user()->name }}
                    </h3>
                </div>
                <div class="box-body">
                    
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