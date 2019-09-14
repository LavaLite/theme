
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form class="d-inline" method="POST"
                    action="{{ route('guard.verification.resend', ['guard' => 'client']) }}">
                    @csrf

                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        {{ __('click here to request another') }}
                    </button>.
                </form>
            </div>
        </div>
    </div>
</div>