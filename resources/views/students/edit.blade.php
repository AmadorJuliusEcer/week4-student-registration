<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>

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

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            text-decoration: none;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
        }

        .current-picture {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('students.show', ['student' => $student->id]) }}"
       class="back-button">
        ← Back to Profile
    </a>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', ['student' => $student->id]) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <!-- Student ID -->
        <div class="form-group">
            <label for="student_id">Student ID</label>

            <input
                type="text"
                id="student_id"
                name="student_id"
                value="{{ old('student_id', $student->student_id) }}"
            >

            @error('student_id')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- First Name -->
        <div class="form-group">
            <label for="first_name">First Name</label>

            <input
                type="text"
                id="first_name"
                name="first_name"
                value="{{ old('first_name', $student->first_name) }}"
            >

            @error('first_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Middle Name -->
        <div class="form-group">
            <label for="middle_name">Middle Name</label>

            <input
                type="text"
                id="middle_name"
                name="middle_name"
                value="{{ old('middle_name', $student->middle_name) }}"
            >

            @error('middle_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label for="last_name">Last Name</label>

            <input
                type="text"
                id="last_name"
                name="last_name"
                value="{{ old('last_name', $student->last_name) }}"
            >

            @error('last_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $student->email) }}"
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Mobile Number -->
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>

            <input
                type="text"
                id="mobile_number"
                name="mobile_number"
                value="{{ old('mobile_number', $student->mobile_number) }}"
            >

            @error('mobile_number')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Date of Birth -->
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>

            <input
                type="date"
                id="date_of_birth"
                name="date_of_birth"
                value="{{ old('date_of_birth', $student->date_of_birth) }}"
            >

            @error('date_of_birth')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label for="gender">Gender</label>

            <select id="gender" name="gender">

                <option value="">Select Gender</option>

                <option value="Male"
                    {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>
                    Male
                </option>

                <option value="Female"
                    {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>
                    Female
                </option>

                <option value="Other"
                    {{ old('gender', $student->gender) == 'Other' ? 'selected' : '' }}>
                    Other
                </option>

            </select>

            @error('gender')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program -->
        <div class="form-group">
            <label for="program">Program</label>

            <input
                type="text"
                id="program"
                name="program"
                value="{{ old('program', $student->program) }}"
            >

            @error('program')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Year Level -->
        <div class="form-group">
            <label for="year_level">Year Level</label>

            <select id="year_level" name="year_level">

                <option value="">Select Year Level</option>

                <option value="1st Year"
                    {{ old('year_level', $student->year_level) == '1st Year' ? 'selected' : '' }}>
                    1st Year
                </option>

                <option value="2nd Year"
                    {{ old('year_level', $student->year_level) == '2nd Year' ? 'selected' : '' }}>
                    2nd Year
                </option>

                <option value="3rd Year"
                    {{ old('year_level', $student->year_level) == '3rd Year' ? 'selected' : '' }}>
                    3rd Year
                </option>

                <option value="4th Year"
                    {{ old('year_level', $student->year_level) == '4th Year' ? 'selected' : '' }}>
                    4th Year
                </option>

            </select>

            @error('year_level')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Address -->
        <div class="form-group">
            <label for="address">Address</label>

            <textarea
                id="address"
                name="address"
            >{{ old('address', $student->address) }}</textarea>

            @error('address')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Current Profile Picture -->
        <div class="form-group">

            <label>Current Profile Picture</label>

            <br>

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Current Profile Picture"
                class="current-picture"
            >

        </div>

        <!-- New Profile Picture -->
        <div class="form-group">

            <label for="profile_picture">
                Change Profile Picture
            </label>

            <input
                type="file"
                id="profile_picture"
                name="profile_picture"
                accept="image/*"
            >

            @error('profile_picture')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <button type="submit">
            Update Student
        </button>

    </form>

</div>

</body>
</html>