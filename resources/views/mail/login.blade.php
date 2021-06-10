@component('mail::message')
Bonjour 

Nous avons validé votre compte.  
Voici votre token unique pour vous connecter: {{ $mail->token }}
@component('mail::button', ['url' => ''])
Connexion
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
