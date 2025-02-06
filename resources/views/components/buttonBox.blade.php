<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>buttonBox</title>
    @vite('resources/css/app.css')
    <title>Document</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class='w-[204px] {{--h-[36px--}} cursor-pointer '>
        <button type="button" class="border-solid border pt-[10px] pb-[10px] w-[204px] {{--pl-[10px]--}} rounded-[6px] border-[#ff0033]
                        bg-[#ff0033] hover:bg-[#e6224a] cursor-pointer">
            <div class='flex justify-center gap-x-2.5 w-inherit cursor-pointer'>
                {{-- <img src={{image}} alt="Google logo" className='h-5 w-5' /> --}}
                <ion-icon name="calendar" class='{{--h-5 w-5--}} text-[#ffffff] mt-[2px]'
                    style="font-size: 15px; transform: scale(1.2);"></ion-icon>
                <p class="{{--font-sans--}} font-semibold {{--[word-spacing:-2px]--}} text-center text-[16.5px] {{--$textColor--}} text-[white] -mt-0.5
                    cursor-pointer">
                    Host
                </p>
            </div>
        </button>
    </div>
</body>

</html>