<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                 @foreach($phone as $items)
                   <p>{{$items['Type']}} - {{$items['Price']}} - {{$items['Color']}} </p>
                 @endforeach
                </div>
</body>
</html>