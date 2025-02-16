<!-- resources/views/events/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>

<body>
    <h1>Event Cards</h1>

    @foreach($eventsCardData as $event)
        <div>
            <h2>{{ $event->event_name }}</h2>
            <p>{{ $event->event_date }}</p>
            <p>{{ $event->name }} ({{ $event->email }})</p>
        </div>
    @endforeach
</body>

</html>