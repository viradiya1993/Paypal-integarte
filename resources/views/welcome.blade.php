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
    <form action="{{route('create-agreement','PD-1B411949B85261253KF6CRFQ')}}" method="post">
      @csrf

      <input type="submit" value="Subscribe Now">

    </form>
  </div>
</body>
</html>
