@component('mail::message')
# Confirmez votre adresse email

Bonjour {{ $user->first_name }},

Merci de vous être inscrit sur notre site. Veuillez cliquer sur le bouton ci-dessous pour vérifier votre adresse e-mail.

@component('mail::button', ['url' => $verificationUrl])
Vérifiez votre e-mail
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
