<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url('img/background.jpg');
            background-image: linear-gradient(to bottom, rgba(0, 51, 7, 0.897),rgba(0, 51, 7, 0.897)), url('img/background.jpg');
            background-position: center;
            background-size: cover
            /* background-color: rgb(0, 43, 4); */
        }
    </style>
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
