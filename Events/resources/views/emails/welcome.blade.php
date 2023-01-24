<x-mail::message>
# Hi : {{$user->name}}

<h2>مرحبا بك معنا</h2>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
