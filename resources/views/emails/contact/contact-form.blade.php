@component('mail::message')
# Hello, New Customer send you a message

<strong>Customer Name : {{ $data['name'] }}</strong><br>
<strong>Customer Email : {{ $data['email'] }}</strong>

<strong>Subject : {{ $data['subject'] }}</strong>

<strong>Message : {{ $data['message']}}</strong>


<a href="mailto:{{$data['email']}}?subject={{$data['subject']}}">Click Here To Reply</a>

Thanks, System<br>
{{ config('app.name') }}
@endcomponent
