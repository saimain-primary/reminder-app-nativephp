<div>
    <h1 class="mb-3 text-lg font-medium">Reminders</h1>

    @foreach ($reminders as $reminder)
        <p>{{ $reminder->reminder }}<small> Remind you in {{ $reminder->when->diffForHumans()}}</small> </p>
    @endforeach
</div>
