<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

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
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Registration</h1>

    <a href="{{ route('students.index') }}"
   style="
       display: inline-block;
       background: #64748b;
       color: white;
       padding: 10px 15px;
       border-radius: 5px;
       text-decoration: none;
       margin-bottom: 20px;
   ">
    View Registered Students
</a>

    @if (session('success'))
    <div style="background: #dcfce7; color: #166534; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Student ID -->
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input
    type="text"
    id="student_id"
    name="student_id"
    value="{{ old('student_id') }}"
    placeholder="Enter Student ID"
>

@error('student_id')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- First Name -->
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input
    type="text"
    id="first_name"
    name="first_name"
    value="{{ old('first_name') }}"
    placeholder="Enter First Name"
>

@error('first_name')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Middle Name -->
        <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input
    type="text"
    id="middle_name"
    name="middle_name"
    value="{{ old('middle_name') }}"
    placeholder="Enter Middle Name"
>

@error('middle_name')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input
    type="text"
    id="last_name"
    name="last_name"
    value="{{ old('last_name') }}"
    placeholder="Enter Last Name"
>

@error('last_name')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input
    type="email"
    id="email"
    name="email"
    value="{{ old('email') }}"
    placeholder="Enter Email"
>

@error('email')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Mobile Number -->
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input
    type="text"
    id="mobile_number"
    name="mobile_number"
    value="{{ old('mobile_number') }}"
    placeholder="Enter Mobile Number"
>

@error('mobile_number')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Date of Birth -->
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input
    type="date"
    id="date_of_birth"
    name="date_of_birth"
    value="{{ old('date_of_birth') }}"
>

@error('date_of_birth')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
    <option value="">Select Gender</option>

    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
        Male
    </option>

    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
        Female
    </option>

    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>
        Other
    </option>
</select>

@error('gender')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Program -->
        <div class="form-group">
            <label for="program">Program</label>
            <input
    type="text"
    id="program"
    name="program"
    value="{{ old('program') }}"
    placeholder="Enter Program"
>

@error('program')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Year Level -->
        <div class="form-group">
            <label for="year_level">Year Level</label>
            <select id="year_level" name="year_level">
    <option value="">Select Year Level</option>

    <option value="1st Year" {{ old('year_level') == '1st Year' ? 'selected' : '' }}>
        1st Year
    </option>

    <option value="2nd Year" {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>
        2nd Year
    </option>

    <option value="3rd Year" {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>
        3rd Year
    </option>

    <option value="4th Year" {{ old('year_level') == '4th Year' ? 'selected' : '' }}>
        4th Year
    </option>
</select>

@error('year_level')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Address -->
        <div class="form-group">
            <label for="address">Address</label>
            <textarea
    id="address"
    name="address"
    placeholder="Enter Address"
>{{ old('address') }}</textarea>

@error('address')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <!-- Profile Picture -->
        <div class="form-group">
            <label for="profile_picture">Profile Picture</label>
            <input
    type="file"
    id="profile_picture"
    name="profile_picture"
    accept="image/*"
>

@error('profile_picture')
    <small style="color: #dc2626;">{{ $message }}</small>
@enderror
        </div>

        <button type="submit">
            Register Student
        </button>

    </form>

</div>

</body>
</html>