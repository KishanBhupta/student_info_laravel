<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <!-- Include Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">

        <div class="navbar">
            <nav class=navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        @if (session()->get('user') != '')
                            <li class="nav-item">
                                <p class="nav-link"> {{ session()->get('user') }}</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login">LogIn</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </nav>

        </div>
        <h1 class="my-4">Student Records</h1>
        <a href="/register"> <i class="fas fa-user-plus"></i> Add Student </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Hobbies</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row for a student record -->
                @foreach ($studentdata as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->hobbies }}</td>
                        <td>{{ $data->city }}</td>
                        <td>{{ $data->address }}</td>
                        <td>
                            <!-- Update Button -->
                            <a href="/editdata/{{ $data->id }}" class="btn btn-primary"><i class="fas fa-edit"
                                    title="Edit"></i></a>
                            <!-- Delete Button -->
                            <a href="/deletedata/{{ $data->id }}" class="btn btn-danger" title="Delete"><i
                                    class="fas fa-trash">
                                </i>
                            </a>
                            <a href="/personaldata/{{ $data->id }}" class="btn btn-danger" title="show Data"><i
                                    class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach

                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Include jQuery and Bootstrap JS for any interactive components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>
