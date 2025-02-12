<!DOCTYPE html>
<html>
<head>
    <title>Halls and Facilities</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Halls and Facilities</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hall Name</th>
                    <th>Capacity</th>
                    <th>Facilities</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($halls as $hall)
                    <tr>
                        <td>{{ $hall->name }}</td>
                        <td>{{ $hall->capacity }}</td>
                        <td>
                            @foreach ($hall->facilities as $facility)
                                {{ $facility->name }}@if (!$loop->last), @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
