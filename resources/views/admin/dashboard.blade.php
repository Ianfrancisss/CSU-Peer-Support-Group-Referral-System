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
          background: linear-gradient(to bottom, #d5d5d5, #cdcdcd, #d8d8d8, #f4f4f4);
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #722a65;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-danger text-white" style="border: none; background: none; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s, transform 0.3s;" 
                                onmouseover="this.style.backgroundColor='#d9534f'; this.style.transform='scale(1.05)';" 
                                onmouseout="this.style.backgroundColor=''; this.style.transform='scale(1)';">
                                Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <a href="{{ route('admin.create-user') }}" class="btn btn-primary mb-3">Create New User</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
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
                            <td>
                              @if ($user->role === 'psg')
                                  {{ $user->is_approved ? 'Approved' : 'Pending Approval' }}
                              @else
                                  N/A
                              @endif
                          </td>
                            <td>
                                <a href="{{ route('admin.edit-user', $user->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.delete-user', $user->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                  
                                @if ($user->role === 'psg' && !$user->is_approved)
                                    <a href="{{ route('pending-approval', $user->id) }}" class="btn btn-success">Approve</a>
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
