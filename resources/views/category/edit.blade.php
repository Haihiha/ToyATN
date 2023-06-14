<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form role ="form" action="" method="post">

        @csrf
        
        <label>Name</label>
        
        <input class="form-control" name="category_name" value ="{{$cate->category_name}}">
        
        <label>Description</label>
        
        <input class="form-control" name="category_description" value ="{{$cate->category_description}}">
        
        <button type="submit" class="btn btn-success">Submit Button</button>
        
        <button type="reset" class="btn btn-primary">Reset Button</button>
        @extends('admin.product.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<h2>Edit Category</h2>

</div>

<div class="pull-right">

<a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>

</div>

</div>

</div>

@if ($errors->any())

<div class="alert alert-danger">

<strong>Whoops!</strong> There were some problems with your input.<br><br>

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Name:</strong>

<input type="text" name="category_name" class="form-control" placeholder="Name" value="{{ $category->category_name }}">

</div>

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Description:</strong>

<textarea class="form-control" style="height:150px" name="category_description" placeholder="Description">{{ $category->category_description }}</textarea>

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-primary">Submit</button>

</div>

</div>

</form>

@endsection
        </form>
</body>
</html>