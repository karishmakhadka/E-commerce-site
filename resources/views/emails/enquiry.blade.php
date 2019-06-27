@component('mail::message')
# Enquiry received from {{$data->name}}
====================================

name: {{$data->name}}  
email: {{$data->email}}  
message: {{$data->message}} 


Thanks,<br>
{{ config('app.name') }}
@endcomponent
