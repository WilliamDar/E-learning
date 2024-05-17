<!-- @if ($errors->any())
<div class="alert alert-danger alert-fixed border-danger-dash alert-important alert-dimissable ">
    <div class='d-flex justify-content-between align-items-start'>

        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li class="px-n4">{{ $error }}</li>
            @endforeach
        </ul>


        <div class='d-flex justify-content-end align-items-start'>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif -->
@if (session()->has('message'))
<div class="alert alert-success alert-fixed border-success-dash alert-important alert-dimissable">

    {{ session('message') }}

    <div class='d-flex justify-content-end align-items-start'>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
@foreach (session('flash_notification', collect())->toArray() as $message)
<div class="alert alert-dismissible fade show shadow alert-fixed
                    alert-{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}" role="alert">

    {!! $message['message'] !!}
    @if ($message['important'])
    <div class='d-flex justify-content-end align-items-start'>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
@endforeach
{{ session()->forget('flash_notification') }}