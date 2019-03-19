@component('mail::message')
# Introduction

Welcome to our Blog

@component('mail::button', ['url' => 'https://algebra.hr'])

Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
