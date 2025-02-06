@props(['eventTitle', 'eventOrganiser', 'numAttends'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eventCard</title>
    @vite('resources/css/app.css')
    <title>Document</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.js"></script>
</head>

<body>



    <div class='flex flex-col gap-y-[6px] w-[220px] hover:cursor-pointer'>{{--Event card box--}}
        <div class='{{--border-solid border-2 border-black--}} w-[230px] rounded-[10px] text-center {{--p-[8px]--}}'>
            {{--Image
            and stock
            box--}}
            <div>
                <img src="{{asset('images/eventImgTest0.jpg')}}" alt="Product image"
                    class='w-[220px] h-[275px] rounded-[10px]' />
            </div>
        </div>
        <div class='flex flex-col gap-y-[6px]'>{{--Text box--}}

            <div>
                <p class='font-semibold font-sans text-[18px] w-[inherit]'>
                    {{$eventTitle}}
                </p>
            </div>

            <div class='flex w-[220px] flex-row gap-x-[4px]'>

                <div class="flex flex-row gap-x-[4px] w-[158px] {{--border-solid border-2 border-black--}}">
                    <div class="flex justify-center">
                        <div class="border-solid border-2 border-[#e6e4e4] w-[25px]  rounded-full">
                            <img src="{{asset('images/laeticia.jpg')}} " alt="Profile photo"
                                class="w-[25px] h-[25px] rounded-full">
                        </div>
                    </div>
                    <div class="w-[158px] {{--border-solid border-2 border-black--}} ">
                        <p class="text-[18px] lowercase mt-[-1px] hover:underline" style="word-spacing: -3px;">
                            {{$eventOrganiser}}
                        </p>
                    </div>
                </div>

                <div class="flex flex-row gap-x-[4px]">
                    <ion-icon name="people-outline" class="text-[18.5px] text-[#a6a7ab] mt-[4px]"
                        style="transform: scale(1.3);"></ion-icon>
                    <span
                        class="text-[18px] font-[500] text-[#a6a7ab] inline-block relative bottom-[1px]">{{$numAttends}}</span>
                </div>

            </div>
        </div>
    </div>
</body>

</html>