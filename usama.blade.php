<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    #form{
        box-shadow: 3px 0px 8px 3px black;
        margin: 100px 150px;
        padding: 8px;
    }
    body{
        /* background: black;
        color: white; */
    }
    #f2{
         box-shadow: 3px 0px 8px 3px black;
        margin: 100px 150px;
        padding: 8px;
    }
</style>
<body>
    @auth
    <h2>User logged in</h2>
    <form action="/logout" method="post">
        <button class="btn btn-outline-dark">Logout</button>
        @csrf
    </form>
    @else
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div >
                    <form id="f2" action="/login" method="post">
                    <h2 class="text-center fw-bold">Laravel Login Form</h2>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="loginname" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">password</label>
                        <input type="password" name="loginpassword" class="form-control" id="exampleFormControlInput1">

                        <button class="btn btn-outline-dark mt-2">Submit</button>
                    </div>
                </form>
                </div>
                <form id="form" action="/register" method="post">
                    <h2 class="text-center fw-bold">Laravel Register Form</h2>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1">

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">

                        <button class="btn btn-outline-dark mt-2">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @endauth
</body>

</html>