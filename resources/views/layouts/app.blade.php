<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Home')</title>
</head>
<body class="w-full p-0 m-0">
    <div class="bg-white py-2 px-4 shadow-md z-20 relative sticky top-0">
        <x-navbar :user="$user"/>
    </div>
    <div class="flex flex-col-reverse md:flex-row">
        <div class="fixed bottom-0 w-full md:w-1/6 bg-white shadow-md z-10 md:h-screen">
            <x-sidenav :user="$user" />
        </div>
        
        <div class="w-full md:flex-1">
            <div class="flex justify-center items-center h-screen">
                {{-- <x-profile :user="$user" /> --}}
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni rem quasi eum totam veritatis a ex unde pariatur animi accusamus, ipsum obcaecati aut earum rerum explicabo minus repudiandae molestiae quaerat quam nostrum. Illum optio, quis architecto fugiat asperiores doloribus minus amet iure consectetur quaerat possimus, esse exercitationem ipsam tempora reprehenderit beatae? Ea a accusantium, minus illo cumque placeat sint nemo suscipit? Quae odit neque eligendi, beatae asperiores quaerat consequuntur laudantium a reprehenderit explicabo earum cum suscipit laboriosam exercitationem accusamus quibusdam inventore esse voluptate sint! Ab odit esse, vel eveniet praesentium, libero laborum velit ducimus, consectetur asperiores quae fuga corporis adipisci eum neque quos mollitia id ex saepe enim sunt molestiae consequatur maiores vero? Aperiam sint autem veritatis impedit quos accusantium officiis rerum, tempora debitis aut dignissimos deserunt nisi, pariatur consequatur illo, modi cum. Officiis, porro! Cumque quo quisquam laudantium a omnis praesentium, sunt voluptatibus odio possimus sit ex? Provident veritatis sunt aliquid, beatae asperiores quas perferendis odit est doloremque. Nam, sunt! Illo voluptas voluptates error voluptatum possimus ducimus dolorem, beatae, sed blanditiis eveniet deserunt explicabo iure quibusdam nulla ut veritatis vitae aspernatur! Incidunt, minus nam. Architecto impedit ut, eius laborum laudantium expedita ratione natus esse tempora, sunt quia consequuntur. Cum molestiae eveniet placeat libero suscipit cupiditate veniam inventore nesciunt fugit. Dicta quod nesciunt cumque similique laborum, itaque non harum esse impedit dolorum omnis ex temporibus, aspernatur ratione. Eius quas doloremque praesentium rem accusantium? Aliquid unde voluptatem quos praesentium labore voluptatum? Ab quo beatae harum vel rem saepe dolor eveniet perspiciatis aut ipsum dicta quisquam hic, quia rerum, vitae deleniti. Ducimus illum aut porro cumque repudiandae, tempore nihil vitae cupiditate explicabo quidem adipisci quae nobis, accusamus facilis, commodi quod consectetur. At maxime rem expedita nam culpa error fugit, perspiciatis amet suscipit id? Animi aperiam placeat eius quia nihil? Impedit, mollitia! Sint.
            </div>
        </div>
    </div>
</body>


</html>
