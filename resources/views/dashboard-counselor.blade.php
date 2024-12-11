<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .navbar {
         background-color: #722a65 !important; /* Replace with your desired color */
        }
        .card-header{
            background-color: #c13ea9 !important;
        }

    </style>
</head>
<body>
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
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="#">Log Out</a>
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
                <h4 class="text-center">Counselor Profile</h4>
                <img src="assets/images/client_avatar.png" alt="Client Avatar" class="img-fluid rounded-circle mx-auto d-block mb-3" style="width: 150px;">
                <h5 class="text-center">Counselor Name</h5>
                <p class="text-muted text-center">Counselor</p>
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
                </ul>
            </div>

            <!-- Main Dashboard Section -->
            <div class="col-md-9">
                <h2 class="mt-4 mb-4">Welcome to Your Dashboard</h2>
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
                                            <th>Client</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2024-12-10</td>
                                            <td>10:00 AM</td>
                                            <td>Anonymous</td>
                                            <td><span class="badge bg-success">Confirmed</span></td>
                                        </tr>
                                        <tr>
                                            <td>2024-12-08</td>
                                            <td>2:00 PM</td>
                                            <td>Anonymous</td>
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
</body>
</html>