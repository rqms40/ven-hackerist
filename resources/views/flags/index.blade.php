<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flags</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Flag Submission</h1>
        <form id="flagForm" action="{{ route('flags.store') }}" method="POST" onsubmit="return false;">
            @csrf
            <div class="form-group">
                <label for="name">Responder Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="flag_string">Flag</label>
                <input type="text" class="form-control" id="flag_string" name="flag_string" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        document.getElementById('flagForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const flagString = document.getElementById('flag_string').value;
            if (flagString === 'VenFlag{C5ru5hNiVeN51A}') {
                $.ajax({
                    url: '{{ route('flags.store') }}',
                    method: 'POST',
                    data: $('#flagForm').serialize(),
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Flag Submitted Successfully!',
                            text: 'You have submitted the correct flag. The attackers will withhold the leak. Great job, Cyber Defense Incident Responder!'
                        });
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'There was an error storing the flag.'
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Try Again',
                    text: 'The flag you entered is incorrect.'
                });
            }
        });
    </script>
</body>

</html>
