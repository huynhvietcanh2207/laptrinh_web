<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view.css">
    <title>Document</title>
    <style>
        .khung {
            justify-content: center;
            margin: 50px 400px;
            border: 5px solid black;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: brown;
            padding: 10px;
        }

        .small {
            margin: 0px 40px 0 50px;

        }


        .btn {
            width: 100px;
            height: 50px;
            background-color: aqua;
            margin: 30px 200px;
        }
    </style>
</head>

<body>

</body>

</html>
@extends('dashboard')

@section('content')


<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="khung col-md-6">
                <h1 class="display-5 fw-bolder">Màn hình chi tiết</h1>
                <table>
                    <tr>
                        <td>
                            <div class="small mb-1">Username: </div>
                        </td>
                        <td>
                            <h3 class="">{{$messi->name}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="small mb-1">email: </div>
                        </td>
                        <td>
                            <h3 class="">{{$messi->email}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="small mb-1">Phone Number: </div>
                        </td>
                        <td>
                            <h3 class="">{{$messi->phone_number}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="small mb-1">Image :</div>
                        </td>
                        <td>
                            @if (!empty($messi->profile_image))
                            <img src="data:image/jpeg;base64,{{ base64_encode($messi->profile_image) }}" alt="Profile Image">
                            @else
                            <p>Không có hình ảnh</p>
                            @endif
                        </td>
                    </tr>
                </table>
                <div class="d-flex">
                    <button class="btn btn-outline-dark " type="button">
                        <i class="bi-cart-fill me-1"></i>
                        chỉnh sửa
                    </button>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h4>Profile (1-1)</h4>
                    First name : {{$messi->profile->first_name}} <br>
                    Last name : {{$messi->profile->last_name}} <br>
                </div>

                <div class="row">
                    <h4>Danh sách bài viết đã viết (1 - N)</h4>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Post name</th>
                        </thead>
                        <tbody>
                            @foreach($messi->posts as $post)
                            <tr>
                                <td>{{ $post->post_id }}</td>
                                <td>{{ $post->post_name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <h4>Danh sách sở thích (N-N)</h4>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Favorite</th>
                        </thead>
                        <tbody>
                            @foreach($messi->favorities as $favorite)
                            <tr>
                                <td>{{ $favorite->favorite_id }}</td>
                                <td>{{ $favorite->favorite_name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Lập trình web @ 01/2024</p>
            </div>
        </footer>
</section>
@endsection