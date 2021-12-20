<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <title>Document</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    @if (session()->has('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
     <div class="container mt-5">
   <div class="row">
   <div class="col-sm-6 table table-dark table-striped ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <nav class="navbar navbar-light">
  
   <div class="card-body">
    <form action="" method="POST">
    <!-- @method("PUT") -->
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="title">
     </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input type="text" class="form-control" name="description">
  </div>
   <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input type="text" class="form-control"  name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
   
  </div>
</nav>

</br>
   </div>
    <div class="col-sm-12">
<table class="table table-dark table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($students as $stu)
    <tr>
      <th scope="row">{{$stu->id}}</th>
      <td>{{$stu->title}}</td>
      <td>{{$stu->description}}</td>
      <td>{{$stu->price}}</td>
      <td>
      <a href="{{ url('/edit', $stu->id) }}" class="btn btn-info btn-sm">Edit</a>
      <a href="{{ url('/delete', $stu->id) }}" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
   </div>
   </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</x-app-layout>
</body>
</html>