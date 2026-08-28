<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registered Students</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 25px;
        }

        .add-button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .add-button:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f1f5f9;
        }

        .profile-picture {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        .student-link {
            color: #2563eb;
            text-decoration: none;
        }

        .student-link:hover {
            text-decoration: underline;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .view-button,
        .edit-button {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .view-button {
            background: #2563eb;
        }

        .view-button:hover {
            background: #1d4ed8;
        }

        .edit-button {
            background: #16a34a;
        }

        .edit-button:hover {
            background: #15803d;
        }

        .no-students {
            text-align: center;
            color: #666;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Registered Students</h1>

    <a href="{{ route('students.create') }}" class="add-button">
        + Register New Student
    </a>

    <table>

        <thead>
            <tr>
                <th>Photo</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Program</th>
                <th>Year Level</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($students as $student)

                <tr>

                    <!-- Profile Picture -->
                    <td>
                        <img
                            src="{{ asset('storage/' . $student->profile_picture) }}"
                            alt="Profile Picture"
                            class="profile-picture"
                        >
                    </td>

                    <!-- Student ID -->
                    <td>
                        <a
                            href="{{ route('students.show', ['student' => $student->id]) }}"
                            class="student-link"
                        >
                            {{ $student->student_id }}
                        </a>
                    </td>

                    <!-- Name -->
                    <td>
                        <a
                            href="{{ route('students.show', ['student' => $student->id]) }}"
                            class="student-link"
                        >
                            {{ $student->first_name }}
                            {{ $student->middle_name }}
                            {{ $student->last_name }}
                        </a>
                    </td>

                    <!-- Email -->
                    <td>
                        {{ $student->email }}
                    </td>

                    <!-- Program -->
                    <td>
                        {{ $student->program }}
                    </td>

                    <!-- Year Level -->
                    <td>
                        {{ $student->year_level }}
                    </td>

                    <!-- Actions -->
                    <td>
                        <div class="action-buttons">

                            <a
                                href="{{ route('students.show', ['student' => $student->id]) }}"
                                class="view-button"
                            >
                                View
                            </a>

                            <a
                                href="{{ route('students.edit', ['student' => $student->id]) }}"
                                class="edit-button"
                            >
                                Edit
                            </a>

                        </div>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="7" class="no-students">
                        No registered students yet.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

</body>
</html>