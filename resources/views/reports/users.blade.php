<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users Report</title>
    @vite('resources/css/app.css') {{-- Ensure Tailwind is compiled --}}
</head>
<body class="bg-gray-100 font-sans text-gray-900">
    <div class="max-w-6xl mx-auto py-10 px-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Registered Users</h1>
            <a href="{{ route('user.report.pdf') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md shadow">
                Download PDF
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border-b text-left text-sm font-semibold text-gray-700">#</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="px-4 py-2 border-b text-left text-sm font-semibold text-gray-700">Registered At</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $user->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-800">{{ $user->email }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">{{ $user->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
