<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List student</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <h3>Student Survey</h3>
        <h2 id="notification"></h2>
        <form action="{{url('/storeSurvey')}}" method="POST" id="surverform">
            @csrf
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="email">Student Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required>
            </div>
            <div class="form-group">
                <label for="tel">Student Telephone:</label>
                <input type="number" class="form-control" id="tel" name="tel" value="{{old('tel')}}" required>
            </div>
            <div class="form-group">
                <label for="feedback">Example textarea</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="{{ asset("js/jquery-3.5.0.min.js") }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#surverform').submit((e) => {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url: $("#surverform").attr("action"),
                    data: $("#surverform").serialize(),
                    dataType: "json",
                    success: (res) => {
                        $("#notification").html(res.message);
                    }
                });
            });
        });
    </script>
</body>

</html>
