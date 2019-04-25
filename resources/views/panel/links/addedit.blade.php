@extends("layouts.admin.home")
@section("title", "My Links")

<?php
    $isEditOperation = $operation == "edit" ? true : false;
?>

@section("content")

    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="javascript:history.back()"><i class="fa fa-chevron-left"></i></a>&nbsp;
                        @if($isEditOperation)
                            Manage Link
                        @else
                            Add Link
                        @endif
                    </h3>
                </div>
                <div class="box-body">
                    <?php
                        $postRoute = route('panel.links.add-action');
                        if($isEditOperation) {
                            $postRoute = route('panel.links.edit-action', ['id' => $link->id]);
                        }
                    ?>
                    <form action="{{ $postRoute }}" method="post" class="form">
                        {{ csrf_field() }}

                        <input type="hidden" name="operation" value="{{ $operation }}">
                        {{-- Kirim `link_id` ke controller jika operation = edit --}}
                        @if($isEditOperation)
                            <input type="hidden" name="link_id" value="{{ $link->id }}">
                        @endif

                        <div class="form-group">
                            <label for="LinkName">Link Name</label>
                            <input name="link_name"
                                type="text" class="form-control"
                                value="{{ $link->name or '' }}"
                                id="LinkName"
                                placeholder="Link Name"
                            required />
                        </div>
                        <div class="form-group">
                            <label for="LinkURL">URL</label>
                            <input name="link_url"
                                type="text" class="form-control"
                                value="{{ $link->url or '' }}"
                                id="LinkURL"
                                placeholder="http://yoursite.com"
                            required />
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
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