@component('mail::message')

    Welcome {{ $user['name'] }} to iamproperty

    Thanks,
    {{ config('app.name') }}
@endcomponent
