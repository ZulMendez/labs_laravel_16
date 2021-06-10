@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue dans Labs !
Votre e-mail : {{$mail->mail}}
Votre compte est validé! Vous pouvez dès à présent modifier votre profil.
Token pour vous connecter : /golabs

{{-- @component('mail::button', ['url' => '/xy'])
Se connecter au site
@endcomponent --}}

A bientôt, <br>
{{ config('app.name') }}
@endcomponent
