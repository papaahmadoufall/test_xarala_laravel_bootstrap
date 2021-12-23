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
    <h1>Welcome! Ajouter un nouveau client</h1>
    <br>
    <br>

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
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-info__img">
                            <img src="img/user1.jpg" alt="User Img">
                        </div>
                        <div class="user-info__basic">
                            <h5 class="mb-0">Kiran Acharya</h5>
                            <p class="text-muted mb-0">@kiranacharyaa</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="active-circle bg-success"></span> Active
                </td>
                <td>Bangalore</td>
                <td>+91 9876543215</td>
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
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-info__img">
                            <img src="img/user1.jpg" alt="User Img">
                        </div>
                        <div class="user-info__basic">
                            <h5 class="mb-0">Kiran Acharya</h5>
                            <p class="text-muted mb-0">@kiranacharyaa</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="active-circle bg-danger"></span> Inactive
                </td>
                <td>Bangalore</td>
                <td>+91 9876543215</td>
                <td>
                    <button class="btn btn-primary btn-sm">Contact</button>
                </td>
                <td>
                    <div class="dropdown open">
                        <a href="#!" class="px-2" id="triggerId2" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="triggerId2">
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="user-info">
                        <div class="user-info__img">
                            <img src="img/user1.jpg" alt="User Img">
                        </div>
                        <div class="user-info__basic">
                            <h5 class="mb-0">Kiran Acharya</h5>
                            <p class="text-muted mb-0">@kiranacharyaa</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="active-circle bg-success"></span> Active
                </td>
                <td>Bangalore</td>
                <td>+91 9876543215</td>
                <td>
                    <button class="btn btn-primary btn-sm">Contact</button>
                </td>
                <td>
                    <div class="dropdown open">
                        <a href="#!" class="px-2" id="triggerId3" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="triggerId3">
                            <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-1"></i> Edit</a>
                            <a class="dropdown-item text-danger" href="#"><i class="fa fa-trash mr-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
