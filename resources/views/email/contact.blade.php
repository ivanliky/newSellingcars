@component('mail::message')

Question

@component('mail::panel')

    {{ $question }}

@endcomponent

@component('mail::button', ['url' => ''])
Answer the question
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
