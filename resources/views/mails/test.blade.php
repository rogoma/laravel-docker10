@component('mail::message')
# Introduction

Prueba de mail

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Gracias,<br>
Nombre de la App: {{ config('app.name') }}
@endcomponent
