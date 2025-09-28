<!DOCTYPE html>
<html>
<head>
    <title>Users Report</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .btn {
            background: #3490dc;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background: #2779bd;
        }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Registered Users</h1>
        <a href="{{ route('user.report.pdf') }}" class="btn">Download PDF</a>
    </div>

    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registered At</th>
        </tr>
        @foreach ($users as $user)
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
