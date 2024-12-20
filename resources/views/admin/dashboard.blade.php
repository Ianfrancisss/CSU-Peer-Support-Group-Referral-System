<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #722a65;
            color: white;
        }

        .btn-primary {
            background-color: #722a65;
            border-color: #722a65;
        }

        .btn-primary:hover {
            background-color: #5e1f51;
            border-color: #5e1f51;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 12px;
                padding: 8px;
            }

            .btn {
                font-size: 12px;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Admin Dashboard</h1>
        <a href="{{ route('admin.create-user') }}" class="btn btn-primary mb-3">Create New User</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>{{ $user->is_approved ? 'Approved' : 'Pending Approval' }}</td>
                            <td>
                                <a href="{{ route('admin.edit-user', $user->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('admin.delete-user', $user->id) }}" class="btn btn-danger">Delete</a>
                                @if ($user->role === 'psg' && !$user->is_approved)
                                    <a href="{{ route('admin.approve-psg', $user->id) }}" class="btn btn-success">Approve</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
