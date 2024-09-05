<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Checkout</title>
</head>
<body>
  <div class="container mt-5"></div>
  <h1 class="mb-4" style="margin-left: 45%; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">CHECKOUT</h1>

  @if (session('success'))
  <div class="alert alert-success">{{session('success')}}</div>
  @endif

 
  @csrf
    <div class="from-group">
      <img style="margin-left: 10%;" src="{{ asset('storage/foto/'.$product->foto)}}" alt="" width="20%" srcset="">
    </div>
    
    <div style="margin-top: -20%;" class="form-group">
      <label style="margin-left: 40%;" for="name">Name</label>
      <input for="text" style="width: 30%; margin-left:40%;" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label style="margin-left: 40%;" for="email">Email</label>
      <input type="email" style="width: 30%; margin-left:40%;" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label style="margin-left: 40%;" for="address">Address</label>
      <textarea class="form-control" style="width: 30%; margin-left:40%;" id="address" name="address" rows="3" required></textarea>
    </div>
    <div class="form-group">
      <label style="margin-left: 40%;" for="payment_type">Payment Type</label>
      <select class="form-control" style="width: 30%; margin-left:40%;" id="payment_type" name="payment_type" required>
        <option value="credit-card">Credit Card</option>
        <option value="paypal">PlayPal</option>
        <option value="bank_transfer">Bank Transfer</option>
      </select>
    </div>
    <div class="form-group">
      <label style="margin-left: 40%;" for="total_amount">Total Amount</label>
      <input type="number" style="width: 30%; margin-left:40%;" class="form-control" id="total_amount" name="total_amount" step="0.01" required>
    </div>
    <button type="submit" style="margin-left: 52%;" class="btn btn-danger">Place Order</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .navbar{
            margin-bottom: 50px;
            border-radius: 0;
            margin-left: 30px;
        }
        .jumbotron{
            margin-bottom: 0;
            margin-left: 30px;
        }
        footer{
            padding: 25px;
        }
        .affix{
            top: 0;
            width: 100%;
            z-index: 999 !important;
        }
        .affix + .container-fluid{
            padding-top: 70px;
        }
        .col-sm-3{
            font-family: 'incida console',sans-serif;
            font-size: 18px;
            color: black;
            text-align: center;
            margin-top: 10px;
            padding-left: 5px;
        }
        .col-sm-4{
            margin-inline: 40px;
            margin-left: 13px;
        }
        .pager{
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: black">
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background-color: black; color:white">
            <ul class="nav navbar-nav">
                    <li class="active"><a href="#" style="background-color: black; color:white">Home</a></li>
                    <li class="active"><a href="#" style="background-color: black; color:white">produk</a></li>
                    <li class="active"> <a href="#"style="background-color: black; color:white">Sourcess</a></li>
                    <li class="active"><a href="#" style="background-color: black; color:white">Search</a></li>
            </ul>

            <!-- <ul class="nav navbar-nav navbar-right" style="margin-inline: 2%">
                <li><a href="#" style="background-color: black; color:white"><span class="glyphicon glyphicon-user"></spann>YourAccount</a></li>
                    <li><a href="#" style="background-color: black; color:white"><span class="glyphicon glyphicon-shopping-cart"></spann>cart</a></li>
            </ul> -->
        </nav>
        </div>
         </nav>
         <br>
         <div class="row-2 text-center" style="padding-left: 20%">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img  style="width:1500px; height:400px;" src="{{ asset('storage/foto/'.$product->foto)}}" alt="">
                    <br>
                </div>
            </div>
            <div class="col-sm-5" style="color: #FFBE98; padding-left:10px">
            </div>
         </div>
        </div>
        <div class="col-sm-4" style="padding-top: 0%;">
            <div class="well">
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$product->harga}}</h4>
                <p style="font-size: 20px;">Price:$.{{$product->price}}</p>
                <div class="input-group" >
                    <label style="font-size: 20px;" for="quantity">jumlah</label>
                    <input style="width:100%;" type="number" class="form-control" id="quantity" placeholder="masukan jumlah produk">
                </div>
                <br>
                <!-- <form action="/keranjang" method="get" >
                    <button style="margin-left:35%; margin-top:-1%;" typpe="submit" class="btn btn-danger">keranjang</button>
                </form> -->
                <br>
                <form action="/berhasil" method="get" >
                    <button style="margin-left:35%; margin-top:-1%;" typpe="submit" class="btn btn-danger">Beli Sekarang</button>
                </form>
            </div>
             </div>
            </div>
             </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/ajax/bootstrap/3.4.1/js/bootstrap.min.js"></script>



            <script src="https://stackpath.bootstrap.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
