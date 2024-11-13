<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1>Add New Student</h1>

        <form action="{{ route('students.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!--name="_token": This defines the name of the input field. The name is used as a key when submitting the form data, allowing the server to identify the value associated with that key. -->
            <!-- Here, _token is commonly used for a security feature known as CSRF (Cross-Site Request Forgery) protection.-->
            <!-- value="{{ csrf_token() }}": This uses a templating syntax (commonly found in frameworks like Laravel) to dynamically insert the CSRF token value into the input field. -->
            <!-- {{ csrf_token() }} is a function call that generates a unique token for the current user session. This token helps to verify that the form submission came from the authenticated user and not from a malicious third-party site. -->

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Age</label>
                <input type="text" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="{{route('students.index')}}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>