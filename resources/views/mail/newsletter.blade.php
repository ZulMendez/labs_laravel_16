@component('mail::message')

<h2>Email : {{ $mail->mail }}</h2>

@component('mail::button', ['url' => ''])
Read More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
