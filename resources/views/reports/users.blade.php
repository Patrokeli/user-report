<!DOCTYPE html>
<html>
<head>
    <title>Users Report</title>
</head>
<body>
    <h1>Registered Users</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registered At</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </table>

    <button onclick="window.print()">Print Report</button>
</body>
</html>
