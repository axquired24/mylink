@extends("layouts.admin.home")
@section("title", "My Links")

@section("content")

    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">
                        My Link List
                    </h3>
                    &nbsp;
                    <a title="Add New" href="{{ route('panel.links.add') }}" class="btn btn-xs btn-success">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="box-body">
                    <table class="table table-responsive table-hover table-bordered">
                        <tr>
                            <td>ID</td>
                            <td>Links</td>
                            <td>Click</td>
                            <td>Action</td>
                        </tr>
                        @if($links->isEmpty())
                        <tr>
                            <td align="center" colspan="4">
                                <div style="padding: 2rem">
                                    Let's create a new link &nbsp;
                                    <a title="Add New" href="{{ route('panel.links.add') }}" class="btn btn-xs btn-success">
                                        here <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endif

                        @foreach($links as $link)
                        <tr>
                            <td>#{{ $link->id }}</td>
                            <td>
                                {{ $link->name }} <br>
                                <small><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></small>
                            </td>
                            <td>
                                {{ $link->click_count }} Hit(s)
                                <br />
                                <small>Last Click on {{ $link->lastClickStr() }} </small>
                            </td>
                            <td>
                                <a title="Edit" href="{{ route('panel.links.edit', ['id' => $link->id]) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a title="Delete" href="{{ route('panel.links.delete', ['id' => $link->id]) }}" 
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete Link `{{ $link->name }}`?')"
                                    >
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="text-center">
                        {{ $links->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('jscode')
    <script>
        $("#menu_links").addClass('active');
    </script>
@endpush