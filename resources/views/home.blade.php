<!doctype html>
<html>
    <head>
        @env('production')
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-BKE27WN6EJ"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BKE27WN6EJ');
            </script>
        @endenv
        <title>Keith Brinks</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="text-slate-700 px-6 md:px-12 pt-12 transition-all bg-slate-100">

        <div class="max-w-screen-lg mx-auto relative">

            <header class="mb-12">
                <h1 class="text-2xl font-semibold">
                    <a class="hover:text-sky-600" href="{{ route('home') }}">Keith Brinks</a>
                </h1>
            </header>

            <main>

                <h2 class="text-2xl md:text-3xl mb-6 font-extrabold text-sky-600 transition-all">
                    Lean IT Leader<br>
                    Creating Business Value<br>
                    Learning Never Ends.
                </h2>

                <section class="flex flex-col md:flex-row-reverse">
                    <img class="w-24 h-24 absolute top-0 right-0 rotate-3 rounded-lg shadow-lg md:relative md:ml-8 md:w-40 md:h-40" src="images/Headshot.png">
                    <div>
                        <p class="text-xl mb-6">
                            Hi, I'm Keith. With over {{ $experience }} years of IT experience, I’m an IT director for a global manufacturing company based in West Michigan. My goal is to simplify every aspect of IT and develop a world-class team who delivers exceptional value through lean and agile methodologies.
                        </p>
                        <p class="text-xl">
                            Reach me at <a href="mailto:keith@brinks.me" class="font-semibold underline hover:text-sky-600">keith@brinks.me</a>, or connect with me below.
                        </p>
                        <div class="flex gap-3 mt-6 -ml-2">
                            <x-social-link href="https://linkedin.com/in/keithbrinks" icon="fa-brands fa-linkedin" />
                            <x-social-link href="https://github.com/keithbrinks" icon="fa-brands fa-github" />
                            <x-social-link href="https://instagram.com/keithbrinks" icon="fa-brands fa-instagram" />
                        </div>
                    </div>
                </section>

            </main>

        </div>

    </body>
</html>