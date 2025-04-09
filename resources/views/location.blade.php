<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UserLocation</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="flex justify-center pt-25 bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#000] dark:text-[#FFF] ">
    <main>
        <section class="container rounded p-10 flex justify-center bg-[#fdfdfc73] br-5">

            <div class="flex items-start gap-6">

                <figure class="mt-1">
                    <img src="https://placehold.co/175x100" alt="{{-- CountryName --}}"
                        class="border border-gray-300" />
                </figure>

                <div>

                    <header>
                        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white mb-1 pt-5 pb-2 ">
                            {{ 'Birmingham, US' }}
                        </h2>
                    </header>

                    <div class="text-lg text-gray-700 dark:text-white pb-2">
                        <p>Current Weather: {{ 'Sunny' }}</p>
                        <p>Temperature: {{ '75' }} °F</p>
                        <p>Humidity: {{ '45' }} %</p>
                        <p>Wind Speed: {{ '3.5' }} m/s</p>
                        <p>Last Updated: {{ '2025-04-08 14:30:00' }}</p>
                    </div>

                </div>

            </div>

        </section>
    </main>
</body>

</html>
