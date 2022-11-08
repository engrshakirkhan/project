
<link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="brand-logo"></div>
  <div class="brand-title">Welcome to the Software World</div>
    <form method="POST" action="user/store" enctype="multipart/form-data">
    @csrf
    <div class="inputs">
    <label for="name"><b>First name:</b></label>
    <input type="text" id="name" name="name" required>
    @if ($errors->has('name'))
            <span id="name-error">{{ $errors->first('name') }}</span>
        @endif
    <label for="fname"><b>Father name:</b></label>
    <input type="text" id="fname" name="fname" required>
    <span></span>
    <label for="age"><b>Age:</b></label>
    <input type="number" id="age" name="age" required>
    <span></span>
    <label for="gender"><b>Gender:</b></label>
    <center><input type="radio" id="gender" name="gender" required>Male</input></center>
    <center><input type="radio" id="gender" name="gender" required>Female</input></center>
    <span></span>
    <label><b>Image:</b></label>
    <input type="file" name="imagename" class="form-control" required>
    <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>











<!-- <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="brand-logo"></div>
  <div class="brand-title">TWITTER</div>
    <form method="POST" action="user/store" enctype="multipart/form-data">
    @csrf
    <label for="name">First name:</label>
    <input type="text" id="name" name="name" >
    <label for="fname">Father name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age">
    <label for="gender">Gender:</label>
    <input type="text" id="gender" name="gender"><br><br>
    <div class="row">
    <div class="form-group">
    <label>Image:</label>
    <input type="file" name="imagename" class="form-control">
    </div>
    </div>
    <br>
    <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html> -->