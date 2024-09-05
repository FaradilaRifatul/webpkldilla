<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-white fixed-top" style="height: 70px;">
        <ul class="nav">
            <a class="navbar-brand" style="color: black; margin-left:100px;" href="javascript:void(0)">The Comfort Zone</a>
            <li class="nav-item">
                <a class="nav-link" style="color: black; margin-left:20px;" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="">Future</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" href="">News</a>
            </li>
        </ul>
        <a href="/logout" class="btn btn-light" style="margin-left: 30%;">Logout</a>
    </nav>
    <section>
    <div class="container-fluid" style="background-color: #FFBE98; padding: 30vh; height:10%;">
        <img src="{{asset('storage/foto/Valko_-_Nautical_Hanging_Light_Fixture_-_B-Green-removebg-preview.png')}}" alt=""
        style="margin-left: 510px; width: 50%; margin-top:-20%;">
        <!-- <img src="https://img.id.my-best.com/product_images/8e7d66ab8018ee3741db7ebf9b151d0c.png?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=29fe9988d53e833e5039f90a3ca473b5" alt=""
        style="margin-left: 450px; width: 30%; margin-top:-60%;"> -->
        <div class="naon" style="margin-top: -35%; font-style:bold; font-size:40px; font-family:Georgia, 'Times New Roman', Times, serif;" >Decor <br>inspiration
    </div>
    </div>
    </section>
    <div class="row" style="margin-left: 2%;">
        <div class="col-sm-4 m-3" style="background-color: #FEF3E2; width:30%; margin-left:10%; height:50vh">
            <h6 class="text-black" style="margin-top:30px; margin-left:150px;">SOFA</h6>
            <img style="width: 90%; margin-top:-40px; margin-left:15px;" src="{{asset('storage/foto/Bubble_Sofa_Armchair-removebg-preview.png')}}" alt="">
        </div>
        <div class="col-sm-4 m-3" style="background-color: #F3FEB8; width:30%; margin-left:10%; height:50vh">
            <h6 class="text-black" style="margin-top:30px; margin-left:160px;">LAMP</h6>
            <img style="width: 60%; margin-top:-40px; margin-left:70px;" src="{{asset('storage/foto/download__3_-removebg-preview.png')}}" alt="">
        </div>
        <div class="col-sm-4 m-3" style="background-color: #FCFFE0; width:30%; margin-left:10%; height:50vh">
            <h6 class="text-black" style="margin-top:30px; margin-left:180px;">MEJA</h6>
            <img style="width: 80%; margin-top:-40px; margin-left:70px;" src="{{asset('storage/foto/Bureau_vintage_1_tiroir_rose_corail_et_blanc_Tropicool___Maisons_du_Monde-removebg-preview.png')}}" alt="">
        </div>
    </div>
    <div class="text-1">
        <h1 style="margin-left: 50%; font-size:20px; margin-top:30px;">Our Product</h1>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($product as $item)
                <div class="col-4">
                    <div class="thumbnail shadow px-3 py-4 mb-4">
                        <img src="{{ asset('storage/foto/'.$item->foto) }}" alt="Paris" width="350" height="330">
                        <br>
                        <p><strong>{{ $item->name }}</strong></p>
                        <p style="margin-top: -5%;">${{ $item->price }}</p>
                        <img style="margin-top: -5%; margin-left:-1%;" src="https://st4.depositphotos.com/2046901/19949/v/450/depositphotos_199492008-stock-illustration-five-stars-rating-icon-vector.jpg" alt=""  width="100" height="50">
                        <form action="/checkout/{{$item->id}}" method="get" >
                            @csrf
                            <button style="margin-left:35%; margin-top:5%;" typpe="submit" class="btn btn-danger">Beli Sekarang</button>
                        </form>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
    <!-- <div class="row"> -->
  <!-- <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:17%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/00/1f/c3/001fc33ad2b2da3d54ce0bbaf94bb9c7.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Kursi
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $110.00
            </div>
            <div class="b">
              <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>  
              <a href="keranjang" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:13%; margin-top:10%;">
        <img src="https://i.pinimg.com/736x/5a/01/d6/5a01d6b97072246149067861575c3484.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Cermin
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $60.00
            </div>
            <div class="b">
            <a href="/checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="/keranjang" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div> -->
  <!-- <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:10%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/02/c8/21/02c821fa2822e849f11b274665dc8f81.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Meja
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $80.00
            </div>
            <div class="b">
            <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="detailproduct" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:9%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/08/ec/48/08ec4867e33684f10ef0acfc0157693f.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Sofa
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $200.00
            </div>
            <div class="b">
            <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="detailproduct" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:17%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/bd/34/bf/bd34bff69e875ebf01801405ab3199b7.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Lampu
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $40.00
            </div>
            <div class="b">
            <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="detailproduct" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:13%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/ee/e5/39/eee539126b12267084e1f5145cf49bb9.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Meja diy
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $90.00
            </div>
            <div class="b">
            <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="detailproduct" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:10%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/a5/f0/56/a5f056844e2ca6a2fe262c379bc3db8b.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Karpet
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $87.00
            </div>
            <div class="b">
            <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="detailproduct" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card" style="width: 80%; margin-left:9%; margin-top:10%;">
        <img src="https://i.pinimg.com/originals/b2/0b/84/b20b84e532cf7c88e763cf5189ccb095.jpg" class="card-img-top" alt="" style="width: 100%;" height="230px; margin-left:50%;">
        <div class="card-body">
            <h6 class="card-title">
                Jam Dinding
            </h6>
            <div class="card-text" style="font-weight: bold" >
                $50.00
            </div>
            <div class="b">
            <a href="checkout" class="btn btn-danger" style="border-radius: 50px; margin-left:20px; margin-top:5%;">Beli</a>
            <a href="detailproduct" class="btn btn-danger" style="border-radius: 50px; margin-left:100px; margin-top:-29%;">Keranjang</a>  
  
            </div>
        </div>
    </div>
  </div> -->
    </div>
    <div class="container-fluid" style="background-color: #FFFBC1; padding: 30vh; margin-top:30px; width:90%;">
        <img style="margin-top: -300px; margin-left:470px;" src="{{asset('storage/foto/2-seater_sofa_available_DM_for_order__namaslaycustomstore__namaslaydecor__namaslay-removebg-preview.png')}}" alt="">
        <div class="naon" style="margin-top: -25%; font-style:bold; font-size:35px; margin-left:5px;" >Deal Of The Day</div>
        <div class="naon" style=" font-style:bold; font-size:20px;" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Quidem, nemo!</div>
    </div>
    <div class="container-fluid" style="background-color: #FFBE98; padding: 30vh; margin-top:30px; height:30px;">
    <div class="naon" style="margin-top:-10%; font-style:bold; font-size:35px; margin-left:10px;" >About Us</div>
    <div class="naon" style="margin-top: 1%; font-style:bold; font-size:20px; margin-left:5px; width:5; " >Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Quia porro, nisi hic sed architecto <br> minima!</div>
    <div class="y" style="margin-top:-15%; font-style:bold; font-size:35px; margin-left:640px;" >Fiture</div>
    <div class="y" style="margin-top: 1%; font-style:bold; font-size:20px; margin-left:650px; width:5; " >About<br> Product <br> Contact <br> Discover</div>

</div>            
            
        
    
    </table>
</body>
</html>