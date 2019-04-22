@if(! auth()->user()->is_verified)
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning">
                <span class="fa fa-info-circle"></span> Email belum diverifikasi. <strong>Cek inbox/spam folder </strong>, atau
                <a href="{{ route('api.email-verif.resend') }}">Kirim ulang Email</a>.
            </div>
        </div>
    </div>
@endif