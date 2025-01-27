<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>

        body{
            display: flex;
            justify-content: center;
            align-items:center;
        }
        
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 30%;
            /* border: 2px solid black; */
            padding:50px 50px;
            border-radius: 10px;
            gap: 10px;
            margin-top:20px;
            box-shadow: 1px -1px 10px gray;    
        }

        input[type="text"]{
            height: 50px;
            font-size: 20px;
            border-radius: 10px;
            border:none;
            border: 1px solid black;
            width: 350px;
            padding-left: 20px;
        }

        input[type="password"]{
            height: 50px;
            font-size: 20px;
            border-radius: 10px;
            border:none;
            border: 1px solid black;
            width: 350px;
            padding-left: 20px;
        }

        input[type="email"]{
            height: 50px;
            font-size: 20px;
            border-radius: 10px;
            border:none;
            border: 1px solid black;
            width: 350px;
            padding-left: 20px;
        }

        input[type="submit"]{
            height: 50px;
            width: 90px;
            background-color: green;
            border: none;
            color: white;
            font-weight:bold;
            font-size: 16px;
            border-radius: 10px;
            margin-top: 20px;
            transition: 1.5s;
        }

        input[type="submit"]:hover{
            transform: scale(1.2)
        }

        h1{
            font-size: 40px;
            margin-bottom: 50px
        }
    </style>
</head>
<body>
<form action="{{ url('/submit-form') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Name" required>
    <input type="email" name="email" placeholder="Enter Email" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>