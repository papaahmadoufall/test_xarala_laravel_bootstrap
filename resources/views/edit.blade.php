<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>
    <section class="main-content">
        <div class="container">
            <h1>CustumersManagement</h1>
            <h4>Modification</h4>
            <br>
            <br>

<a class="btn-primary btn  text-white" href="{{route('list')}}">retour</a>
    <div class="container col-6 ">

    <form  action="{{ route('update',$custumer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Name input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Nom</label>
          <input required type="text" id="form2Example1" name="nom" class="form-control" value="{{$custumer->name}}" />
          </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Email address</label>
          <input required type="email" id="form2Example1" value="{{$custumer->email}}" name="email" class="form-control" />
          </div>



        <!-- Phone input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Phone </label>
          <input required type="tel" id="form2Example1"  value="{{$custumer->tel}}" name="tel" class="form-control" />
          </div>

        <!-- Location input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Location </label>
          <input required type="text" id="form2Example1" value="{{$custumer->location}}" name="loc"  class="form-control" />
          </div>

        <!-- Picture input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Photo </label>
          <input required type="file" id="form2Example1" value="{{$custumer->profile_image}}" name="profile_image" class="form-control" />
          </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


      </form>

      </div>
    </div>
</section>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
