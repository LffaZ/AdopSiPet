<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ====== Error 404 Section Start -->
    <section class="relative z-10 bg-primary py-[120px] h-screen flex items-center justify-center">
        <div class="container mx-auto">
            <div class="-mx-4 flex">
                <div class="w-full px-4">
                    <div class="mx-auto max-w-[400px] text-center">
                        <h2 class="mb-2 text-[50px] font-bold leading-none text-white sm:text-[80px] md:text-[100px]">
                            404
                        </h2>
                        <h4 class="mb-3 text-[22px] font-semibold leading-tight text-white">
                            Oops! That page can’t be found
                        </h4>
                        <p class="mb-8 text-lg text-white">
                            The page you are looking for it maybe deleted
                        </p>
                        <a href="{{ url('/') }}" class="inline-block rounded-lg border border-white px-8 py-3 text-center text-base font-semibold text-white transition hover:bg-white hover:text-primary">
                            Go To Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
            <div class="h-full w-1/3 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            <div class="flex h-full w-1/3">
                <div class="h-full w-1/2 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
                <div class="h-full w-1/2 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
            </div>
            <div class="h-full w-1/3 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
        </div>
    </section>
    <!-- ====== Error 404 Section End -->
</body>

</html>