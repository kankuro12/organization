<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        body {
            background: #2C3338;
        }
    </style>
</head>

<body>

    <div
        style="position: fixed;top:0px;left:0px;right:0px;bottom:0px;display: flex;align-items:center;justify-content: center;">
        <div style="width:400px;max-width:calc(100% - 20px)" class="card bg-white shadow p-3 ">
            <h5 class="text-start">{{ config('app.name') }} - Login</h5>
            <hr>
            <form action="" method="POST">
                <div class="mb-2">
                    <label for="{{ $email }}" class="mb-1">
                        <strong>
                            Email
                        </strong>
                    </label>
                    <input type="email" name="{{ $email }}" id="{{ $email }}" class="form-control"
                        placeholder="Enter Email Address" required>
                </div>
                <div class="mb-2">
                    <label for="{{ $password }}" class="mb-1">
                        <strong>
                            Password
                        </strong>
                    </label>
                    <input type="password" name="{{ $password }}" id="{{ $password }}" class="form-control"
                        placeholder="Enter Password" required>
                </div>
                <div class="mb-2">
                    <button class="btn btn-primary">Login</button>
                </div>
                @csrf
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function showToastr() {
            @if (Session::has('message') || Session::has('error') || Session::has('info') || Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }

                @if (Session::has('message'))
                    toastr.success("{{ session('message') }}");
                @endif

                @if (Session::has('error'))
                    toastr.error("{{ session('error') }}");
                @endif

                @if (Session::has('info'))
                    toastr.info("{{ session('info') }}");
                @endif

                @if (Session::has('warning'))
                    toastr.warning("{{ session('warning') }}");
                @endif
            @endif
        }

        $(document).ready(function() {
            showToastr();
        });
    </script>
</body>

</html>
