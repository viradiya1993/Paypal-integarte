<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="{{route('create-payment')}}" method="post">
      @csrf

        <input type="submit" value="Pay Now">

    </form>
  </div>
</body>
</html>
Business account -> Sell something
Personal account -> purchase something

Business Account
sb-5v6m472385944@business.example.com	 -> amit@#1993 -> US->Seller ->Sandbox login For check
sb-uvzbv2589769@business.example.com	 -> amit@#1993 -> In ->Seller

Pernosal Account
sb-vfj982597896@personal.example.com	 -> amit@#1993 -> In -> localhost:8000
sb-iali42435635@personal.example.com	 -> amit@#1993 -> In