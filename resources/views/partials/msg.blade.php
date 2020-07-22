<div class="text-center col-12">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        <small>{{ session('status') }}</small>
    </div>
    @endif


</div>

<div class="text-center col-12">
    @if (session('error'))
    <div class="alert alert-danger" role="alert">
        <small>{{ session('error') }}</small>
        </li>
    </div>
    @endif


</div>