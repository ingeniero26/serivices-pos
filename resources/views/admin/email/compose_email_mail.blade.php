@component('mail::message')
Asunto,{{ $save->subject }},
<br>
Descripcion,{{ $save->descriptions }},
<p>Este mensaje es de la aplicacion app.services</p>

{{ $save->send_message }}

{{ config('app.name') }}
@endcomponent
