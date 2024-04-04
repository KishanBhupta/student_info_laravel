<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Personal Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container m-5">
        <h1>Student Personal Records</h1>
        <table class="table table-striped table-bordered">

            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td> {{ $student->id }}</td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td> {{ $student->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td> {{ $student->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td> {{ $student->address }}</td>
                </tr>
                <tr>
                    <th scope="row">Gender</th>
                    <td> {{ $student->gender }}</td>
                </tr>
                <tr>
                    <th scope="row">Hobbies</th>
                    <td> {{ $student->hobbies }}</td>
                </tr>
                <tr>
                    <th scope="row">City</th>
                    <td> {{ $student->city }}</td>
                </tr>
            </tbody>
        </table>
        <div class="form-button">
            <a href="/" class="btn btn-primary">Back</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFOnpDpii0CWuOZon7VWgXhCq+8MKijAA+/q4tWtIOMCwOPM81HqCqMeWLU" crossorigin="anonymous">
    </script>
</body>

</html>
