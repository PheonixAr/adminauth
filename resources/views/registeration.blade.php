<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script defer src="{{ asset('js/register.js') }}"></script>
    <script defer src="{{ asset('js/country-states.js') }}"></script>
    <script defer src="{{ asset('js/country.js') }}"></script>


    <title>Registeration</title>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <form action="{{ route('register') }}" id="Registeration" method="post">
                        @csrf

                        <div class="row">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fistname" id="fistname"
                                    placeholder="Enter the first name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname"
                                    placeholder="Enter the Last name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter the email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number </label>
                                <input type="tel" class="form-control" name="phone" id="phone"
                                    placeholder="Enter the phone number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label>Password:</label>

                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter the password" /><span style="float: right;display:inline"> <i
                                        class="bi bi-eye-slash" id="togglePassword"></i>
                                </span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="confirmpass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name='confirmpass' id="confirmpass"
                                    placeholder="Enter the confrim password" />
                                <span style="float: right;display:inline"> <i class="bi bi-eye-slash"
                                        id="toggleConfimPass"></i></span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of birth</label>
                                <input type="date" class="form-control" name='dob' id="dob"
                                    placeholder="Enter the date of birth ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Gender</label>&nbsp;&nbsp;
                                <input type="radio" class="form-radio" name='gender' id="gender"
                                    value="male" placeholder="select the gender">&nbsp;&nbsp;Male&nbsp;
                                <input type="radio" class="form-radio" name='gender' id="gender"
                                    value="female" placeholder="select the gender">&nbsp;&nbsp;Female&nbsp;
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select id="country" class="form-select" name="country">
                                <option>select country</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <select id="state" class="form-select" name="state" form="Registeration">
                                <option>_</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label" form="Registeration">City</label>
                            <input type="text" name="city" id="city" class="form-control"
                                placeholder="Enter the city">
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="profile picture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" name='profile_pic' id="profile_pic"
                                    accept="jpeg/png" placeholder="select profile picture">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <button class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
