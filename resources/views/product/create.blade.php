<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
<h1>Product Add</h1>
    @if(session('status'))
        <div class='alert alert-danger'>
            <ul>
                    <li>
                        {{ session('status') }}
                    </li>
            </ul>
        </div>
    @endif
    @if($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action ={{ route('product.store') }}>
        @csrf
        SKU   <input type="text" name="SKU" id="SKU" placeholder="Insert SKU"><br>
        Name  <input type="text" name="Name" id="Name" placeholder="Insert Name"><br>
        Price <input type="text" name="Price" id="Price" placeholder="Insert Price"><br>
        <button type="submit">Save</button>
        <a href="/">Back</a>
    </form>


</body>
</html>
