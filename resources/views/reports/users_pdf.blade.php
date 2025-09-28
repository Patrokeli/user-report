<!DOCTYPE html>
<html>
<head>
    <title>Users Report PDF</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; padding: 5px; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Registered Users Report</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registered At</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
