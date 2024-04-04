<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Edit Record </h2>
        <form method="POST" action="{{ route('updatedata', $student->id) }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}"
                    placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="addresss">Address</label>
                <input type="textarea" class="form-control" id="address" name="address"
                    value= "{{ $student->address }}" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="number" maxlength="10" class="form-control" value="{{ $student->phone }}"
                    id="contactNumber" name="contact" placeholder="Enter contact number">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale"
                        {{ $student->gender == 'male' ? 'checked' : '' }} value="male">
                    <label class="form-check-label" for="genderMale">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-inaput" type="radio" name="gender"
                        {{ $student->gender == 'female' ? 'checked' : '' }} id="genderFemale" value="female">
                    <label class="form-check-label" for="genderFemale">Female</label>
                </div>
            </div>
            <div class="form-group">

                <label>Hobbies</label>

                {{-- @foreach ($array as $value) --}}
                <div class="form-check">

                    {{-- <label class="form-check-lable">{{ $value->hobbies }}</label> --}}
                    <input class="form-check-input" name="hobbies[]" type="checkbox" value="coding">
                    <label class="form-check-label" for="hobby1">Coding</label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" value="sleeping" id="sleeping"
                        <label class="form-check-label" for="hobby2">Sleeping</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" value="eating" id="sleeping"
                        <label class="form-check-label" for="hobby3">Eating</label>
                </div>
                {{-- @endforeach --}}



            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city"="{{ $student->city ? 'selected' : '' }}" name="city">
                    <option value="ahemdabad">Ahemdabad</option>
                    <option value="rajkot">Rajkot</option>
                    <option value="baroda">Baroda</option>
                    <option value="gandhinagar">Gandhinagar</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
