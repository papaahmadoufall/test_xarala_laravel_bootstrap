<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>interface</title>
</head>
<body>

    <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <section class="main-content">
            <div class="container">
                <h1>CustumersManagement</h1>
                <br>
                <br>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
   Ajouter un client
  </button>

</body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       <form action="{{ route("add") }}"  method="POST" enctype="multipart/form-data">
        @csrf
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Nom</label>
    <input required type="text" id="form2Example1" name="nom" class="form-control" />
    </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Email address</label>
    <input required type="email" id="form2Example1" name="email" class="form-control" />
    </div>



  <!-- Phone input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Phone </label>
    <input required type="tel" id="form2Example1" name="tel" class="form-control" />
    </div>

  <!-- Location input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Location </label>
    <input required type="text" id="form2Example1" name="loc" class="form-control" />
    </div>

  <!-- Picture input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Photo </label>
    <input required type="file" id="form2Example1" name="profile_image" class="form-control" />
    </div>



  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($custumer as $item)
                        <tr>
                            <td>
                                <div class="user-info">

                                    <div class="user-info__img">
                                        <img src="{{ asset('uploads/custumer/'.$item->profile_image) }}" alt="User Img">

                                    </div>
                                    <div class="user-info__basic">
                                        <h5 class="mb-0">{{ $item->name }}</h5>
                                        <p class="text-muted mb-0">{{ $item->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="active-circle bg-success"></span> Active
                            </td>
                            <td>{{ $item->loc }}</td>
                            <td>+{{ $item->tel }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Contact</button>
                            </td>
                            <td>
                                <div class="dropdown open">
                                    <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="triggerId1">
                                        <a class="dropdown-item" href="{{route('edit',$item->id)}}"><i class="fa fa-pencil mr-1"></i> Edit</a>

                                        <a class="dropdown-item text-danger" href="{{route('destroy',$item->id)}}"><i class="fa fa-trash mr-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
