<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>userDashboard</title>
    @vite('resources/css/app.css')
    <title>userDashboard</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.js"></script>
</head>

<body>

    @php
        $eventTitle = "Black History Month Janr";
        $eventOrganiser = "megan laeticia";
        $numAttends = "13.4K";
        #megan laetici ...
    @endphp
    {{-- {{ dd($eventTitle, $eventOrganiser, $numAttends) }} --}}

    <div class="flex flex-row">

        <!-- Sidebar -->
        <div class="fixed w-[210px]">
            <x-sideBar />
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-[300px] pt-[92px] pr-[50px] pb-[30px]">
            <div class="{{--border-solid border-2 border-black--}} grid grid-cols-4 gap-x-[10px] gap-y-[20px] ">
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
            </div>
        </div>

    </div>
</body>

</html>