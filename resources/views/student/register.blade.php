<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Example</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="POST" action="{{ route('storedata') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="addresss">Address</label>
                <input type="textarea" class="form-control" id="address" name="address" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="number" maxlength="10" class="form-control" id="contactNumber" name="contact"
                    placeholder="Enter contact number">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                    <label class="form-check-label" for="genderMale">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                    <label class="form-check-label" for="genderFemale">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label>Hobbies</label>
                <div class="form-check">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" value="coding" id="coding">
                    <label class="form-check-label" for="hobby1">Coding</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" value="sleeping" id="sleeping">
                    <label class="form-check-label" for="hobby2">Sleeping</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" value="eating" id="sleeping">
                    <label class="form-check-label" for="hobby3">Eating</label>
                </div>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city" name="city">

                    <option value="Ahemdabad">Ahemdabad</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="Baroda">Baroda</option>
                    <option value="Gandhinagar">Gandhinagar</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
