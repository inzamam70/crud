<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <a href="{{ route('product.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @php
              $sl =1;
          @endphp
          <tbody>
            @foreach ($products as $product)
            <tr>
              <th scope="row">{{$sl++}}</th>
              <td>{{$product->name}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
              <td><a href="{{ route('slider.show', $slider->id) }}" class="btn 
                btn-sm 
                bg-success 
                border-2 
                border-success 
                btn-icon 
                rounded-round 
                legitRipple 
                shadow 
                mr-1">
                <i class="icon-eye"></i></a>
                <a href="{{ route('slider.edit', $slider->id) }}" class="btn 
                btn-sm 
                bg-primary 
                border-2 
                border-primary 
                btn-icon 
                rounded-round 
                legitRipple 
                shadow 
                mr-1">
                <i class="icon-pen"></i></a>
                
                <a href="{{ route('slider.destroy',$slider->id) }}"  class="btn 
                btn-sm 
                bg-danger 
                border-2 
                border-danger 
                btn-icon 
                rounded-round 
                legitRipple 
                shadow 
                mr-1">
                <i class="icon-trash"></i></a>
            </td>
            </tr>
            @endforeach
          </tbody>
      </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


   
  </body>
</html>