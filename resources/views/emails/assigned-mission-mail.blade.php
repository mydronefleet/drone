@component('mail::message')

@component('mail::panel')
Mission created successfully.
@endcomponent

@component('mail::table')
| Mission Name         | Mission Date                 | Mission Type                   | Mission Requestor             |
| ---------------------|:----------------------------:|-------------------------------:|----------------------:|
| {{$mission['name']}} | {{$mission['mission_date']}} | {{$mission['mission_types']}}  | {{$mission['requestor_name']}} |
@endcomponent

@component('mail::button', ["url" => "http://staging.mydronefleet.com/missions/?email=".$mission['email'], 'color' => 'success'])
Approve Mission
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent