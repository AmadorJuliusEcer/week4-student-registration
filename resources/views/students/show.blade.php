<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .back-button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .profile-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile-header h1 {
            margin: 5px 0;
        }

        .profile-header p {
            color: #666;
        }

        .info {
            margin-bottom: 18px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            margin-top: 5px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .edit-button {
    display: inline-block;
    background: #16a34a;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    margin-bottom: 20px;
}
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('students.index') }}" class="back-button">
        ← Back to Students
    </a>

    <a href="{{ route('students.edit', ['student' => $student->id]) }}"
   class="edit-button">
    Edit Student
</a>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="profile-card">

        <!-- Profile Header -->
        <div class="profile-header">

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Profile Picture"
                class="profile-picture"
            >

            <h1>
                {{ $student->first_name }}
                {{ $student->middle_name }}
                {{ $student->last_name }}
            </h1>

            <p>
                Student ID: {{ $student->student_id }}
            </p>

        </div>


        <!-- Student Information -->

        <div class="info">
            <div class="label">Email</div>
            <div class="value">
                {{ $student->email }}
            </div>
        </div>

        <div class="info">
            <div class="label">Mobile Number</div>
            <div class="value">
                {{ $student->mobile_number }}
            </div>
        </div>

        <div class="info">
            <div class="label">Date of Birth</div>
            <div class="value">
                {{ $student->date_of_birth }}
            </div>
        </div>

        <div class="info">
            <div class="label">Gender</div>
            <div class="value">
                {{ $student->gender }}
            </div>
        </div>

        <div class="info">
            <div class="label">Program</div>
            <div class="value">
                {{ $student->program }}
            </div>
        </div>

        <div class="info">
            <div class="label">Year Level</div>
            <div class="value">
                {{ $student->year_level }}
            </div>
        </div>

        <div class="info">
            <div class="label">Address</div>
            <div class="value">
                {{ $student->address }}
            </div>
        </div>

    </div>

</div>

</body>
</html>