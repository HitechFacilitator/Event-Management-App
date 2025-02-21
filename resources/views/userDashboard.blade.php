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
        use App\Http\Controllers\UserDashboardController;

        $eventCardRecords = UserDashboardController::generatePublicEventCards();

        // $eventCards = array_map(function ($eventCardRecord) {

        //     // return "<x-eventCard :eventTitle=\"eventCardRecord['eventTitle']\" :eventOrganiser=\"$eventCardRecord['eventOrganiser']\" :numAttends=\"$eventCardRecord['attendee_count']\" />";

        //     return "<x-eventCard :eventTitle=\"" . $eventCardRecord['eventTitle'] . "\" :eventOrganiser=\"" . $eventCardRecord['eventOrganizer'] . "\" :numAttends=\"" . $eventCardRecord['attendee_count'] . "\" />";

        // }, $eventCardRecords);

        // Generate the Blade component strings for each event
        $eventCards = array_map(function ($eventCardRecord) {
            return view('components.eventCard', [
                'eventTitle' => $eventCardRecord['eventTitle'],
                'eventOrganiser' => $eventCardRecord['eventOrganizer'],
                'numAttends' => $eventCardRecord['attendee_count'],
            ])->render();
        }, $eventCardRecords);



        // Combine all event cards into one string
        $eventCardsHtml = implode('', $eventCards);

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



                {!! $eventCardsHtml !!} <!-- Render all event cards at once -->

                {{-- <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser"
                    :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                <x-eventCard :eventTitle="$eventTitle" :eventOrganiser="$eventOrganiser" :numAttends="$numAttends" />
                --}}
            </div>
        </div>

    </div>
</body>

</html>