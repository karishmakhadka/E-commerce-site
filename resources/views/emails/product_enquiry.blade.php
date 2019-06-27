@component('mail::message')
# Enquiry received from {{$data->name}}
=======================================

item_id: {{$data->item_id}}
name: {{$data->name}}  
email: {{$data->email}}  
phone: {{$data->phone}}  
message: {{$data->message}}  


Thanks,<br>
{{ config('app.name') }}
@endcomponent
