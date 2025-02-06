<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>searchBox</title>
    @vite('resources/css/app.css')
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@7/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div tabindex="0"
        class="flex gap-x-[10px]  py-[7px] pl-[10px] rounded-[30px] cursor-pointer w-[204px] bg-[#f2f2f2] focus:border-[1.5px] focus:border-[#e6e6e7]">
        <ion-icon name="search-outline" style="font-size: 18px; transform: scale(1.2);"
            class="mt-[3px] cursor-pointer"></ion-icon>
        <input type="text" name="" id="" placeholder="Search"
            class="text-[15px] bg-[#f2f2f2] font-medium font-arial cursor-pointer focus:outline-none {{--border-2 border-[blue]--}} w-[147px]">
    </div>
</body>

</html>