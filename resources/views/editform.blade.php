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
    
    <!-- @if (session()->has('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif -->
     <div class="container mt-5">
   <div class="row">
   <div class="col-sm-6 table table-dark table-striped ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <nav class="navbar navbar-light">
  
   <div class="card-body">
  
    <form action="" method="POST">
   

    @csrf
    @method("PUT")
  <div class="mb-3">
  
    <label for="" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="title" value="{{$students->title}}">
      
</div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{$students->description}}">
  </div>
   <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input type="text" class="form-control"  name="price" value="{{$students->price}}" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>



</form>

</div>

   
  </div>
</nav>

</br>
   </div>

   </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</x-app-layout>
</body>
</html>