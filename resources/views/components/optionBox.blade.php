<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.js"></script>
</head>
@php
    // $isClick = false;
    // $icon = $isClick ?
    //     '<ion-icon name="home-sharp"    style="font-size: 22px; transform: scale(1.2); color: #ff0033;" class="cursor-pointer"></ion-icon>' :
    //     '<ion-icon name="home-outline" color="dark" style="font-size: 22px; transform: scale(1.2);" class="cursor-pointer"></ion-icon>';
    // function switchIcon()
    // {
    //     if ($GLOBALS['isClick'] = true) {
    //         $GLOBALS['isClick'] = false;
    //     } else {
    //         $GLOBALS['isClick'] = true;
    //     }
    // }
    // //color="dark"
    // $name = "home-outline"

@endphp

<body>
    <div class="flex gap-x-[15px] p-[6px] w-[204px]  hover:rounded-[6px] cursor-pointer hover:bg-[#f2f2f2]
    focus:text-[#ff0033]" tabindex="0">
        {{-- <img src="" alt=""> --}}
        {{-- {!!$icon!!} --}}
        <ion-icon name={{$name ?? 'home'}} style="font-size: 22px; transform: scale(1.2);"
            class="cursor-pointer focus:text-[#ff0033]"></ion-icon>
        <p class="text-[18px] font-semibold mb-0 -mt-[1.5px] text-center cursor-pointer">{{$texts ?? 'For You'}}</p>
    </div>
</body>

</html>