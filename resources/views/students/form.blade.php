<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merchent Navy exam</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
    <style>
body {
  background:radial-gradient(ellipse at center, rgba(255,254,234,1) 0%, rgba(255,254,234,1) 35%, #B7E8EB 100%);
  overflow: hidden;
}
</style>
</head>

<body class="bg-gray-900 font-sans leading-normal tracking-normal ">

<div class="flex justify-center">




    <div class=" w-full max-w-xs py-5">
        <div class="flex  justify-center p-4">
            <a href="{{url('/form')}}"><img src="{{asset('img/logo.png')}}" alt="" class="h-20"></a>
        </div>
        <p class="text-base text-blue-400 text-center font-extrabold shadow-2xl hover:text-orange-700">Please Enter name and roll no</p>
        <form method="post" action="{{url('/varifyStudent')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 justify-items-center">
            @csrf
            @method('POST')
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Roll No.
            </label>
            <input  class="shadow appearance-none border
            @error('roll_no') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="roll_n"
            type="number"
            name="roll_no"
            value="{{old('roll_no')}}"
            @error('roll_no')
            placeholder="{{old('roll_no')}}"@enderror >
            @error('roll_no')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Name <i class="text-gray-500 leading-tight">(only first name required)</i>
            </label>
            <input  class="shadow appearance-none border
            @error('fname') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="fname"
            type="name"
            name="fname"
            value="{{old('fname')}}"
            @error('fname')
            placeholder="{{old('fname')}}"
            @enderror >

            @error('fname')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror

          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-400 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Submit
            </button>
            @error('msg')
            <p class="text-red-500 text-sm font-extrabold ml-2 hover:text-red-900">{{$message}}</p>
            @enderror
          </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 seashore maritime academy. All rights reserved.
        </p>

    </div>

</div>

</body>
</html>
