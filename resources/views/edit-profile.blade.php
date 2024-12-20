<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add custom styles for elegance -->
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: white;
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-control, .form-select {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
        }
        .btn-light {
            border-radius: 50%;
            background-color: #ecf0f1;
            border: none;
            padding: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-light:hover {
            background-color: #dcdfe1;
            transform: translateY(-2px);
        }
        .btn-primary {
            border-radius: 50px;
            padding: 12px 40px;
            background-color: #3498db;
            border-color: #3498db;
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.4);
        }
        .form-label {
            font-weight: 600;
            color: #34495e;
        }
        .form-select-lg, .form-control-lg {
            height: 45px;
            font-size: 16px;
        }
        .fa-arrow-left {
            font-size: 24px;
            color: #3498db;
        }
        .fa-arrow-left:hover {
            color: #2980b9;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            border: none;
            font-size: 24px;
            color: #3498db;
            padding: 10px;
            transition: transform 0.2s, color 0.2s;
        }
        .btn-back:hover {
            color: #2980b9;
            transform: scale(1.1);
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <!-- Back to Dashboard icon button with arrow -->
        <a href="{{ route('dashboard-client') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> <!-- Back arrow icon -->
        </a>
        <br>
        <h2>Edit Profile</h2>

        <!-- Form for editing profile -->
        <form method="POST" action="{{ route('update-profile') }}">
          @csrf
          @method('PUT')
      
          <!-- Username Field -->
          <div class="form-group mb-4">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ $user->name }}" required>
          </div>
      
          <!-- Gender Field -->
          <div class="form-group mb-4">
              <label for="gender" class="form-label">Gender</label>
              <select name="gender" id="gender" class="form-select form-select-lg" required>
                  <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                  <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                  <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
              </select>
          </div>

          <!-- Change Password Section -->
          <div class="form-group mb-4">
              <label for="current_password" class="form-label">Current Password</label>
              <input type="password" class="form-control form-control-lg" id="current_password" name="current_password">
          </div>

          <div class="form-group mb-4">
              <label for="new_password" class="form-label">New Password</label>
              <input type="password" class="form-control form-control-lg" id="new_password" name="new_password">
          </div>

          <div class="form-group mb-4">
              <label for="confirm_password" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password">
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
      </form>
      
    </div>

    <!-- JavaScript for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
