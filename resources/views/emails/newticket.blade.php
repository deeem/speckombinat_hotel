<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>New ticket</h1>
        <ul>
            <li><em>name: </em>{{ $ticket->name }}</li>
            <li><em>phone: </em>{{ $ticket->phone }}</li>
            <li><em>check in: </em>{{ $ticket->checkin }}</li>
            <li><em>check out:</em>{{ $ticket->checkout }}</li>
            <li><em>adults:</em>{{ $ticket->adults }}</li>
        </ul>
    </body>
</html>
