<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/css/myown.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Web Template with Inverted Border Radius</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
</head>

<body>
    <section class="flex flex-row w-full h-screen bg-white justify-between p-5">
        <div class="flex flex-col w-1/2 p-5 gap-5">
            <!-- <h1 class="bg-white text-black w-20 shadow-md">INI LOGO</h1> -->
            <img src="{{ asset('img/logo/logo-text.png') }}" alt="logo" class="w-40">
            <h1 class="mt-15 telegraf text-6xl text-left text-dark">
                <span class="text-7xl text-left">Hewan peliharaan</span>
                <span class="">pantas mendapatkan</span>
                <span class="text-right text-5xl block mr-5 mt-3">tempat layak</span>
            </h1>
            <!-- <div class="flex flex-row relative -mt-[4.5rem] rounded-full w-12 h-12 ">
                <img src="https://i.pinimg.com/564x/10/47/10/104710347d00cdd3716ca6d2db57da43.jpg" class="w-full h-full object-cover rounded-full border-2 border-transparent">
                <img src="https://i.pinimg.com/236x/0f/c7/8d/0fc78d541028eb859cebf0aad120ff4d.jpg" class="absolute ml-7 w-full h-full object-cover rounded-full border-2 border-transparent">
                <img src="https://i.pinimg.com/236x/e0/7d/e3/e07de3286a1cc4b6ae7c1bdbb19c9898.jpg" class="absolute ml-16 w-full h-full object-cover rounded-full border-2 border-transparent">
                <img src="https://i.pinimg.com/236x/7a/9c/c3/7a9cc36f478969da92e2e9fee391a5b2.jpg" class="absolute ml-24 w-full h-full object-cover rounded-full border-2 border-transparent">
                <img src="https://i.pinimg.com/236x/cb/ed/47/cbed47f5813eb04359c6b032a6f4b17d.jpg" class="absolute ml-32 w-full h-full object-cover rounded-full border-2 border-transparent">
                <div class="absolute ml-[10.75rem] bg-dark-2 rounded-full p-3 w-28 h-12 text-white text-sm">400 penyedia hewan</div>
            </div> -->
            <div class="flex flex-row w-72 mt-[-70px] bg-black rounded-full items-center">
                <div class="flex flex-row p-1">
                    <img src="https://i.pinimg.com/564x/10/47/10/104710347d00cdd3716ca6d2db57da43.jpg" alt="" class="rounded-full w-10 border border-black h-10">
                    <img src="https://i.pinimg.com/564x/10/47/10/104710347d00cdd3716ca6d2db57da43.jpg" alt="" class="rounded-full -ml-5 w-10 border border-black h-10">
                    <img src="https://i.pinimg.com/564x/10/47/10/104710347d00cdd3716ca6d2db57da43.jpg" alt="" class="rounded-full -ml-5 w-10 border border-black h-10">
                    <!-- <img src="https://i.pinimg.com/564x/10/47/10/104710347d00cdd3716ca6d2db57da43.jpg" alt="" class="rounded-full -ml-5 w-10 border border-black h-10">
                    <img src="https://i.pinimg.com/564x/10/47/10/104710347d00cdd3716ca6d2db57da43.jpg" alt="" class="rounded-full -ml-5 w-10 border border-black h-10"> -->
                </div>
                <h1 class="text-white text-lg">4000 penyedia hewan</h1>
            </div>

            <a href="{{ route('petcontributor.login') }}" class="w-3/4 flex flex-row">
                <div class="bg-black w-full py-2 flex justify-center items-center rounded-full">
                    <p class="text-white text-lg">Masuk</p>
                </div>
                <div class="bg-black w-auto -ml-1 py-2 flex justify-center items-center rounded-full">
                    <svg width="53" height="40" viewBox="0 0 63 60" fill="none" currentColor="#fff" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.08046 32.5H6L4 32.5L4 30.5C4 29.6311 4.04274 28.7642 4.1276 27.9026L4.32364 25.9122L6.39115 26.1158C6.13793 27.5175 6.00394 28.9607 6.00009 30.4345C6.00004 30.4531 6.00001 30.4717 6 30.4903V30.5C6 30.5 6 30.5 6 30.5C6 31.1734 6.02717 31.8404 6.08046 32.5ZM9.90522 17.2241C8.33103 19.6611 7.17761 22.3954 6.54774 25.3242L4.5605 24.7214L5.14107 22.8075C5.39241 21.9789 5.68465 21.1617 6.01719 20.3589C6.34972 19.5561 6.72093 18.7716 7.12907 18.008L8.07187 16.2442L9.90522 17.2241ZM16.5538 10.354C14.1345 12.0319 12.0319 14.1345 10.3539 16.5539L8.74643 15.2346L10.0152 13.6886C10.5645 13.0193 11.1472 12.3761 11.7617 11.7617C12.3761 11.1472 13.0193 10.5645 13.6886 10.0152L15.2346 8.74644L16.5538 10.354ZM25.3241 6.54775C22.3954 7.17762 19.6611 8.33104 17.2241 9.90524L16.2441 8.07189L18.008 7.12909C18.7716 6.72095 19.5561 6.34974 20.3589 6.0172C21.1617 5.68466 21.9789 5.39242 22.8074 5.14108L24.7213 4.56051L25.3241 6.54775ZM34.8842 6.39116C33.4617 6.13418 31.9965 6 30.5 6C29.0035 6 27.5383 6.13418 26.1158 6.39116L25.9122 4.32364L27.9025 4.12761C28.7642 4.04274 29.631 4 30.5 4C31.3689 4 32.2358 4.04274 33.0974 4.1276L35.0878 4.32364L34.8842 6.39116ZM43.7759 9.90523C41.3389 8.33103 38.6046 7.17761 35.6758 6.54774L36.2787 4.56051L38.1925 5.14108C39.0211 5.39241 39.8383 5.68465 40.6411 6.01719C41.4439 6.34973 42.2284 6.72094 42.992 7.12908L44.7559 8.07188L43.7759 9.90523ZM50.646 16.5539C48.9681 14.1345 46.8655 12.0319 44.4461 10.354L45.7654 8.74643L47.3114 10.0152C47.9807 10.5645 48.6239 11.1472 49.2383 11.7617C49.8528 12.3761 50.4355 13.0193 50.9848 13.6886L52.2536 15.2346L50.646 16.5539ZM54.4523 25.3242C53.8224 22.3954 52.669 19.6611 51.0948 17.2241L52.9281 16.2441L53.8709 18.008C54.2791 18.7716 54.6503 19.5561 54.9828 20.3589C55.3153 21.1617 55.6076 21.9789 55.8589 22.8075L56.4395 24.7213L54.4523 25.3242ZM54.6088 26.1158L56.6764 25.9122L56.8724 27.9025C56.9573 28.7642 57 29.631 57 30.5V32.5H55H54.9195C54.9728 31.8404 55 31.1734 55 30.5C55 29.0035 54.8658 27.5383 54.6088 26.1158Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.08046 28.5C6.02716 29.1597 6 29.8267 6 30.5C6 44.031 16.969 55 30.5 55C37.2354 55 43.336 52.2821 47.7649 47.8832C47.7847 47.8635 47.8044 47.8438 47.8241 47.8241C47.8438 47.8044 47.8635 47.7847 47.8832 47.7649C52.2821 43.336 55 37.2354 55 30.5C55 29.8267 54.9728 29.1596 54.9195 28.5L55 28.5L57 28.5L57 30.5C57 33.98 56.3146 37.426 54.9828 40.6411C53.6511 43.8562 51.6991 46.7776 49.2383 49.2383C46.7776 51.6991 43.8563 53.6511 40.6411 54.9828C37.426 56.3146 33.98 57 30.5 57C27.02 57 23.574 56.3146 20.3589 54.9828C17.1438 53.6511 14.2224 51.6991 11.7617 49.2384C9.30092 46.7776 7.34895 43.8563 6.01719 40.6411C4.68544 37.426 4 33.9801 4 30.5V28.5H6H6.08046Z" fill="white" />
                        <path d="M44.7071 31.7071C45.0976 31.3166 45.0976 30.6834 44.7071 30.2929L38.3431 23.9289C37.9526 23.5384 37.3195 23.5384 36.9289 23.9289C36.5384 24.3195 36.5384 24.9526 36.9289 25.3431L42.5858 31L36.9289 36.6569C36.5384 37.0474 36.5384 37.6805 36.9289 38.0711C37.3195 38.4616 37.9526 38.4616 38.3431 38.0711L44.7071 31.7071ZM17 32L44 32V30L17 30V32Z" fill="white" />
                    </svg>
                </div>
            </a>

            <div class="flex flex-row w-full h-full gap-3 justify-start">
                <img src="https://i.pinimg.com/564x/d9/9d/83/d99d83796af9b81cc94296c7a9b8eae6.jpg" alt="pet" class="w-1/3 h-full rounded-2xl">
                <div class="flex flex-row gap-2 w-1/3">
                    <div class=" w-1/4 h-full bg-black text-gray-50 text-lg rounded-full">
                        <div class="w-full">
                            <p class="transform -rotate-90 mt-28">Instagram</p>
                            <p class="-ml-1 -mt-32 rotate-[270deg] text-start text-3xl">»</p>
                        </div>
                    </div>
                    <div class=" w-1/4 h-full bg-black text-gray-50 text-lg rounded-full">
                        <div class="w-full">
                            <p class="transform -rotate-90 mt-28">Facebook</p>
                            <p class="-ml-1 -mt-32 rotate-[270deg] text-start text-3xl">»</p>
                        </div>
                    </div>
                    <div class=" w-1/4 h-full bg-black text-gray-50 text-lg rounded-full">
                        <div class="w-full">
                            <p class="transform -rotate-90 mt-28">Telegram</p>
                            <p class="-ml-1 -mt-32 rotate-[270deg] text-start text-3xl">»</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-full w-full">
                    <img src="https://i.pinimg.com/564x/d9/9d/83/d99d83796af9b81cc94296c7a9b8eae6.jpg" alt="pet" class="w-full h-full rounded-2xl">
                </div>
            </div>
            <!-- <br> -->
            <!-- <span class="text-6xl">tapi kamu bisa menyelamatkannya</span></p>
            <div class="flex flex-col"></div> -->
        </div>
        <div class="relative w-1/2 h-full pl-10 rounded-xl">
            <img src="{{ asset('img/petcontributor/hero.jpg') }}" class="object-cover h-full rounded-xl shadow-md">
            <div class="flex flex-row absolute top-5 right-5 justify-between gap-3">
                <a href="{{ route('petcontributor.about') }}">
                    <button class="rounded-full py-1 px-5 border-solid border-2 border-white text-white text-lg">Tentang Kami</button>
                </a>
                <a href="{{ route('petcontributor.howitwork') }}">
                    <button class="rounded-full py-1 px-5 border-solid border-2 border-white text-white text-lg">Cara Kerja</button>
                </a>
                <a href="{{ route('petcontributor.register') }}">
                    <button class="rounded-full py-1 px-5 border-solid border-2 border-white text-white text-lg">Daftar</button>
                </a>
            </div>
        </div>
    </section>
</body>

</html>