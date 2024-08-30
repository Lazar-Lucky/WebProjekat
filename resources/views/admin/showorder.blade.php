
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
        
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">

            <table>
                <tr style="background-color: grey;">
                    <td style="padding: 20px;"> Ime kupca</td>
                    <td style="padding: 20px;"> Telefon</td>
                    <td style="padding: 20px;"> Adresa</td>
                    <td style="padding: 20px;"> Naziv proizvoda</td>
                    <td style="padding: 20px;"> Cena</td>
                    <td style="padding: 20px;"> Kolicina</td>
                    <td style="padding: 20px;"> Status</td>
                    <td style="padding: 20px;"> Akcija </td>
                </tr>
                @foreach($order as $orders)
                <tr align="center" style="background-color:black;">
                    <td style="padding: 20px;">{{$orders->name}}</td>
                    <td style="padding: 20px;">{{$orders->phone}}</td>
                    <td style="padding: 20px;">{{$orders->address}}</td>
                    <td style="padding: 20px;">{{$orders->product_name}}</td>
                    <td style="padding: 20px;">{{$orders->price}}</td>
                    <td style="padding: 20px;">{{$orders->quantity}}</td>
                    <td style="padding: 20px;">{{$orders->status}}</td>
                    <td style="padding: 20px;"><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Isporuceno</a></td>

                </tr>
                @endforeach

            </table>
</div>
</div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>