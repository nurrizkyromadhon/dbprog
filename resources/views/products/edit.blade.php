<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Products</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div class="container">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')            
            <div class="form-group">
                <label for="name">Nama Product :</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Product" value="{{ old('name', $product->name) }}" required autofocus>            
            </div>
            <div class="form-group">
                <label for="price">Price Product :</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Masukkan Price Product" value="{{ old('price', $product->price) }}" required>            
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Masukkan Description Product" value="{{ old('description', $product->description) }}" required>            
            </div>
            <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
        </form>
    </div>    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>