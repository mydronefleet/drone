@component('mail::message')

@component('mail::panel')
Mission created successfully.
@endcomponent

@component('mail::table')
| Mission Name         | Mission Date                 | Mission Type                   | Main Rpic             |
| ---------------------|:----------------------------:|-------------------------------:|----------------------:|
| {{$mission['name']}} | {{$mission['mission_date']}} | {{$mission['mission_types']}}  | {{$mission['pilot']}} |
@endcomponent


Thanks,
{{ config('app.name') }}
@endcomponent