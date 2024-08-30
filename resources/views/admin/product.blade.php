
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .title
        {
            color:white; 
            padding-top: 25px; 
            font-size:25px;
        }

        label{
            display:inline-block;
            width: 200px;
        }
        </style>
  </head>
  <body>
    
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">

        <h1 class="title"> Dodaj proizvod </h1>

        @if(session()->has('message'))

        <div class="alert alert-success">

        {{session()->get('message')}}

        <button type="button" class="close" data-dismiss="alert">x</button>

        

    </div>

        @endif

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf


        <div style="padding: 15px;">
            <label> Naziv proizvoda</label>
            <input  style="color:black;" type="text" name="title" placeholder="Upisite naziv proizvoda" required="">
    </div>
    <div style="padding: 15px;">
            <label> Cena</label>
            <input style="color:black;" type="number" name="price" placeholder="Upisite cenu proizvoda" required="">
    </div>
    <div style="padding: 15px;">
            <label> Opis proizvoda </label>
            <input style="color:black;" type="text" name="description" placeholder="Upisite opis proizvoda" required="">
    </div>
    <div style="padding: 15px;">
            <label> Kolicina</label>
            <input style="color:black;" type="text" name="quantity" placeholder="Kolicina proizvoda" required="">
    </div>
    <div style="padding: 15px;">
            <input type="file" name="file">
    </div>
    <div style="padding: 15px;">
    <input class="btn btn-success" type="submit" name="">
    </div>
    </form>


</div>

</div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>