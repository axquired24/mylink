<script src="{{ url('lte/plugins/toastr/build/toastr.min.js') }}"></script>
{{-- Toastr Notification --}}
<script>
    var TOASTR_OPTION = {
        progressBar: true
    };

    var Notice = {
        showInfo: function(msg, title=null) {
            toastr.info(msg, title, this.option);
        },
        showError: function(msg, title=null) {
            toastr.error(msg, title, this.option);
        },
        showSuccess: function(msg, title=null) {
            toastr.success(msg, title, this.option);
        },
        showWarning: function(msg, title=null) {
            toastr.warning(msg, title, this.option);
        },
        option: {
            progressBar: true
        }
    }
</script>
@if(Session::has('toastr'))
    <script>
        <?php
        $toastr     = Session::get('toastr');
        // type: warning, success, error, info
        $type       = $toastr->get('type') or 'success';
        $title      = $toastr->get('title') or '';
        $message    = $toastr->get('message') or '';
        $redirect   = $toastr->get('redirect') or '';
        ?>
        toastr.{{$type}}("{{$message}}", "{{$title}}", {
            progressBar: true,
            onclick: function() {
                @if(empty($redirect))
                console.log("NO REDIRECTION");
                @else
                    document.location = "{{$redirect}}";
                @endif
            }
        });
    </script>
@endif

@if(Session::has('errorLog'))
    <script>
        console.log("{{ Session::get('errorLog') }}");
    </script>
@endif