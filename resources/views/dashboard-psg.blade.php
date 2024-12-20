<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psg Volunteer Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .navbar {
         background-color: #722a65 !important;
        }
        .card-header{
            background-color: #c13ea9 !important;
        }

    </style>
</head>
<body>

    <!-- Success logout message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show fixed-top" role="alert" id="logoutSuccessAlert" style="z-index: 1050;">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CareConnect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
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
    <div class="container-fluid pt-5 mt-5">
        <div class="row">
            <!-- Sidebar -->
<div class="col-md-3 bg-light sidebar p-4">
    <img src="assets/images/client_avatar.png" alt="Client Avatar" class="img-fluid rounded-circle mx-auto d-block mb-3" style="width: 150px;">
    <h5 class="text-center">{{ Auth::user()->name ?? 'Anonymous' }}</h5>
    <p class="text-muted text-center">{{ Auth::user()->role ?? 'psg' }} volunteer</p>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-calendar-alt me-2"></i> Appointments</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-envelope me-2"></i> Messages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-book me-2"></i> Resources</a>
        </li>
        <!-- Settings Dropdown -->
        <li class="nav-item dropdown mt-2">
            <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-cogs me-2"></i> Settings
            </a>
            <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                <li><a class="dropdown-item" href="{{ route('edit-profile') }}"><i class="fas fa-user-edit me-2"></i> Edit Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('delete-account') }}" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-user-times me-2"></i> Delete Account</a></li>
            </ul>
        </li>
    </ul>
</div>

<!-- Modal for Delete Account Confirmation -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- Center the modal vertically -->
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" id="deleteModalLabel">Confirm Account Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-4">Are you sure you want to delete your account? This action cannot be undone.</p>
                <!-- Form to delete account -->
<form action="{{ route('delete-account') }}" method="POST" class="text-center">
    @csrf
    @method('DELETE') <!-- HTTP method spoofing for DELETE request -->
    <div class="form-group mb-3">
        <label for="current_password" class="form-label">Enter Your Password</label>
        <input type="password" name="current_password" id="current_password" class="form-control w-75 mx-auto" required>
        @error('current_password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-flex justify-content-center gap-2">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete Account</button>
    </div>
</form>

            </div>
        </div>
    </div>
</div>



            <!-- Main Dashboard Section -->
            <div class="col-md-9">
                <h2 class="mt-4 mb-4">Welcome Volunteer!</h2>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                                <h5>Upcoming Appointments</h5>
                                <p>3 Scheduled</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope fa-3x text-success mb-3"></i>
                                <h5>New Messages</h5>
                                <p>2 Unread</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <i class="fas fa-book fa-3x text-warning mb-3"></i>
                                <h5>Resources Accessed</h5>
                                <p>10 Resources</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Appointment Section -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-white">
                                Recent Appointments
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Counselor</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2024-12-10</td>
                                            <td>10:00 AM</td>
                                            <td>Jane Smith</td>
                                            <td><span class="badge bg-success">Confirmed</span></td>
                                        </tr>
                                        <tr>
                                            <td>2024-12-08</td>
                                            <td>2:00 PM</td>
                                            <td>Michael Brown</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there's a success message
            var successAlert = document.getElementById('logoutSuccessAlert');
            if (successAlert) {
                // Hide the alert after 1.5 seconds
                setTimeout(function() {
                    successAlert.classList.remove('show');
                    successAlert.classList.add('fade');
                }, 1500);  // 1500 milliseconds = 1.5 seconds
            }
        });
      </script>
</body>
</html>