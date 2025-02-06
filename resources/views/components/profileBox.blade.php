<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profileBox</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="flex flex-col gap-y-[8px] w-[204px] {{--border-solid border-2 border-black--}}">
        <div class="flex justify-center">
            <div class="border-solid border-2 border-[#e6e4e4] w-[40px]  rounded-full">
                <img src="{{asset('images/laeticia.jpg')}} " alt="Profile photo" class="w-[40px] h-[40px] rounded-full">
            </div>
        </div>
        <div class="w-[204px] {{--border-solid border-2 border-black--}}">
            <p class="font-semibold text-[18px] text-center">
                Megan Laeticia
            </p>
            <p class="font-medium text-[14px] text-[#c5c4c4] text-center">
                laeti@gmail.com
            </p>
        </div>
    </div>
</body>

</html>