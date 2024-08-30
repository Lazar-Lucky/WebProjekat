
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->
        
        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

            @if(session()->has('message'))

            <div class="alert alert-success">

            {{session()->get('message')}}

                <button type="button" class="close" data-dismiss="alert">x</button>



                    </div>

                    @endif
                <table>

                <tr style="background-color: grey;">
                    <td style="padding:20px;">Naziv</td>
                    <td style="padding:20px;">Opis</td>
                    <td style="padding:20px;">Kolicina</td>
                    <td style="padding:20px;">Cena</td>
                    <td style="padding:20px;">Slika</td>
                    <td style="padding:20px;">Izmeni</td>
                    <td style="padding:20px;">Obrisi</td>
                    
</tr>

        @foreach($data as $product)
<tr align="center" style="background-color: black;">
                    <td >{{$product->title}}</td>
                    <td >{{$product->description}}</td>
                    <td >{{$product->quantity}}</td>
                    <td >{{$product->price}}</td>
                    <td ><img height="100" width="100" src="/productimage/{{$product->image}}"> </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Izmeni</a>
                    </td>
<td>
                        <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Obrisi</a>
</td>
                    
</tr>

    @endforeach
</table>


</div>
</div>


          <!-- partial -->
        @include('admin.script')
  </body>
</html>