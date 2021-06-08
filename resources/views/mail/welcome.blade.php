@component('mail::message')
Bonjour,

Un compte vous a été attribué sur Labs-Studio.com  

Veuillez attendre l'activation de votre compte. 
Ci-dessous votre mot de passe par défaut: 

{{ 'labs2021' }}

Vous recevrez une notification quand votre compte sera activé, veuillez changer votre mot de passe assez rapidement. 
Le mail comprendra votre lien unique de connexion. 

@component('mail::button', ['url' => ''])
Edit password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
