<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Stoves</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            border: 1.5px solid black;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content p {
            margin-bottom: 10px;
            font-size: 16px;
            line-height: 1.5;
        }

        .card-content .price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content button {
            display: block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .card-content button:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <a href="/GasStoves/create">Add New Gas Stove</a>
    <h1>Our Available Gas Stoves:</h1>
    <div>
        @foreach($gasStoves as $gasStove)
        <div class="card">
            <div>
                <img src="{{asset('storage/images/'. $gasStove->namePicture)}}" alt="{{$gasStove->type}}">
            </div>
            <div class="card-content">
                <h2>{{$gasStove->type}}</h2>
                <p>Size: {{$gasStove->size}}</p>
                <p>Color: {{$gasStove->color}}</p>
                <p class="price">Price: {{$gasStove->price}}</p>
                <p>{{$gasStove->brand}}</p>
                <button>Compare</button>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>