<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flags</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Flag Submission</h1>
        <form action="{{ route('flags.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Responder Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="flag_string">Flag String</label>
                <input type="text" class="form-control" id="flag_string" name="flag_string" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>

</html>
