<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sideBar</title>
</head>

<body>
    <div class="flex flex-col h-screen justify-between pt-[14px] pl-[20px] pb-[18px] " {{--gap-y-[40px]--}}">
        {{--logo,
        search,
        optionsSet,
        button
        and profileBox
        Boxes--}}

        <div class="flex flex-col gap-y-[8px]">{{--logo, search , optionsSet and button Boxes--}}
            <div>{{--Logo Box--}}
                <x-logoBox />
            </div>

            <div class="flex flex-col gap-y-[22px]">{{--search , optionsSet and button Box--}}
                <div class="flex flex-col gap-y-[5px]">{{--search and optionsSet Box--}}
                    <x-searchBox />
                    <div class="flex flex-col gap-y-[6px]">{{--optionsSet Box--}}
                        <x-optionBox name="compass" texts="Explore" /> {{--public events option box--}}
                        <x-optionBox name="home" texts="For You" /> {{--private events option box--}}
                        <x-optionBox name="people" texts="Joined" />{{--invitations option box--}}
                        <x-optionBox name="Card" texts="Premium" />{{--paid events (public and private) option box--}}
                    </div>
                </div>

                <x-buttonBox />
            </div>
        </div>

        <x-profileBox />
    </div>
</body>

</html>