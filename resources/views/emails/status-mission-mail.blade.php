@component('mail::message')
{{-- Greeting --}}
# Hello {{$data['requestor']}}!


{{-- Intro Lines --}}


Your Mission {{$data['name']}} has been {{$data['action']}}.
Please follow up with RPIC for more details.

Thanks,
{{ config('app.name') }}
@endcomponent