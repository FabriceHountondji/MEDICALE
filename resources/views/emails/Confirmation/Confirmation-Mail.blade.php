@component('mail::message')
# Bienvenue sur e-autocar {{ $data['name']}} !

Votre compte a bien été créé avec cette adresse mail :{{ $data['email'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
