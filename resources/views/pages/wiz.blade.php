<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('seo.title', config('app.name', 'Elderberry.Info'))</title>

    <meta name="description" content="@yield('seo.description', 'Your default description goes here')">
    <meta name="keywords" content="@yield('seo.keywords', 'your, default, keywords')">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('seo.title', config('app.name', 'Laravel'))">
    <meta name="twitter:description" content="@yield('seo.description', 'Your default description goes here')">
    <meta name="twitter:image" content="@yield('seo.image', 'Your default description goes here')">
    <meta name="twitter:site" content="@yourtwitterhandle">
    <!-- OG-->
    <meta name="og:title" content="@yield('seo.title', config('app.name', 'Laravel'))">
    <meta name="og:description" content="@yield('seo.description', 'Your default description goes here')">
    <meta name="og:image" content="@yield('seo.image', 'Your default description goes here')">

    <link rel="canonical" href="{{ request()->url() }}">

    <!-- Auto Dark-Mode 
    <script>
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-theme', 'dim');
        }
    </script> -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

{{--    For LemonSqueezy--}}
{{--    @lemonJS--}}

{{--    For Paddle--}}
{{--    @paddleJS--}}
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>

  <livewire:coming-soon/>

  <div class="bg-violet-50 py-6">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
      <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Where we connect People to</p>
      <div class="mt-2 grid gap-4 lg:grid-cols-3 lg:grid-rows-1">
        <div class="relative lg:row-span-1">
          <div class="absolute inset-px rounded-lg bg-white  border-8 border-purple-600 rounded-lg"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
            <div class="px-8 pt-2 pb-3 ">
                <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">People</p>
                <ul class="mt-2 list-disc">
                    <li >Other consumers</li>
                    <li>Hobbyists (gardeners)</li>
                    <li>Farmers</li>
                    <li>Manufacturers</li>
                    <li>Suppliers</li>
                    <li>Local experts (Eddie Elderberries)</li>
                </ul>
                <p class="mb-6">More...</p>
            </div>
            
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]"></div>
        </div>
        <div class="relative max-lg:row-start-1">
          <div class="absolute inset-px rounded-lg bg-white  border-8 border-purple-600 rounded-lg"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
            <div class="px-8 pt-2 pb-3 ">
                <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">Information</p>
                <ul class="mt-2 list-disc">
                    <li>Home Remedies</li>
                    <li>Health research</li>
                    <li>Horticulture research</li>
                    <li>Growing elderberry</li>
                    <li>Recipes</li>
                    <li>Business Tax Incentives</li>
                </ul>
                <p class="mb-6">More...</p>
            </div>
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]"></div>
        </div>
        <div class="relative lg:row-span-1">
          <div class="absolute inset-px rounded-lg bg-white  border-8 border-purple-600 rounded-lg"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
            <div class="px-8 pt-2 pb-3 ">
                <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">Products</p>
                <ul class="mt-2 list-disc">
                    <li>Drinks</li>
                    <li>Wine & Mead</li>
                    <li>Gummies</li>
                    <li>Cuttings & Plants</li>
                    <li>Wholesale</li>
                    <li>Retail</li>
                </ul>
                <p class="mb-6">More...</p>
            </div>
            
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
        </div>
      </div>
    </div>
  </div>
  

{{-- Features --}}

<div class="bg-white py-6">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8 border-8 border-purple-600 rounded-lg">
      <h2 class="text-base/7 font-semibold text-indigo-600">Why American Elderberry?</h2>
      <p class="mt-2 text-4xl text-center font-semibold tracking-tight text-pretty text-gray-950 sm:text-5xl">Everything you need to know</p>
      <div class="mt-10 grid grid-cols-1 gap-4 sm:mt-16 lg:grid-cols-6 lg:grid-rows-2">
        <div class="relative lg:col-span-3">
          <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
            <div class="p-10 pt-4">
              <h3 class="text-sm/4 font-semibold text-indigo-600">Meet</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Terry Durham & Chris Patton</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Exploring Elderberry Benefits - full webinar</p>
            </div>
            <div class="flex items-center center" >
            <iframe width="600" height="400" class="center"
                src="https://www.youtube.com/embed/xv2Mhs1iUzs">
            </iframe>
            </div>
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem] lg:rounded-tl-[2rem]"></div>
        </div>
        <div class="relative lg:col-span-3">
          <div class="absolute inset-px rounded-lg bg-white lg:rounded-tr-[2rem]"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)] lg:rounded-tl-[calc(2rem+1px)]">
            <div class="p-10 pt-4">
              <h3 class="text-sm/4 font-semibold text-indigo-600">Meet</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Terry Durham & David Buehler</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Living The Life They Love: Elder Farms</p>
            </div>
            <div class="flex items-center center" >
            <iframe width="600" height="400" class="center"
                src="https://www.youtube.com/embed/9XsBb8O5Iis">
            </iframe>
            </div>
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-tr-[2rem]"></div>
        </div>
        <div class="relative lg:col-span-2">
          <div class="absolute inset-px rounded-lg bg-white lg:rounded-bl-[2rem]"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-bl-[calc(2rem+1px)]">
            <img class="h-80 object-cover object-left" src="images/data-7681497_640.png" alt="">
            <div class="p-10 pt-4">
              <h3 class="text-sm/4 font-semibold text-indigo-600">Elderberry Supplements Market analysis</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Elderberry Supplement sales in 2022 was held at USD 1.1 Billion.</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-600">8.9% projected growth from 2023 to 2033,<br />
                the market is expected to reach a valuation of USD 2.9 Billion by 2033.<br />
                Capsules are expected to be the highest revenue-generating form of Elderberry Supplements, projected to grow at a CAGR of over 8.8% from 2023 to 2033.<br />
              </p>
                <a class="text-blue-500 underline" target="_blank"" href="https://www.futuremarketinsights.com/reports/elderberry-supplements-market">Source</a>
            </div>
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-bl-[2rem]"></div>
        </div>
        <div class="relative lg:col-span-2">
          <div class="absolute inset-px rounded-lg bg-white"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
            <img class="h-80 object-cover" src="images/elder-3640683_640.jpg" alt="">
            <div class="p-10 pt-4">
                <img class="h-80 object-cover" src="images/elderberry-5220580_640.jpg" alt="">
            </div>
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5"></div>
        </div>
        <div class="relative lg:col-span-2">
          <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-br-[calc(2rem+1px)]">
            <img class="h-80 object-cover" src="images/elder-2652570_640.jpg" alt="">
            <div class="p-10 pt-4">
              <h3 class="text-sm/4 font-semibold text-indigo-600">Latest Elderberry Health Research</h3>
              <p class="mt-2 text-lg font-medium tracking-tight text-gray-950">Elderberry juice shows benefits for weight management, metabolic health</p>
              <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Elderberry juice may be a potent tool for weight management and enhancing metabolic health, according to a recent Washington State University-led study.</p>
              <a class="text-blue-500 underline" target="_blank" href="https://news.wsu.edu/press-release/2025/01/08/elderberry-juice-shows-benefits-for-weight-management-metabolic-health/">Source</a>
            </div>
          </div>
          <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-br-[2rem]"></div>
        </div>
      </div>
    </div>
  </div>
    

<div class="relative isolate overflow-hidden px-6 py-24 sm:py-24 lg:overflow-visible lg:px-0">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                    <p class="text-base font-semibold leading-7">Elderberry.Info Home of the</p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">Eddie Elderberry Project</h1>
                    <p class="text-xl font-bold leading-7 mt-6 text-center">Eddie Elderberry: The Berry Planter</p>
                    <p class="mt-6 text-xl leading-8">
                            In the rolling hills of central USA, there lived a curious man with an adventurous soul, a heart as big as the sun, and a beard as wild as the untamed prairie - Eddie Elderberry. Every morning, Eddie would set out on foot, dressed in overalls, a wide-brimmed hat, and a sturdy pair of boots. He carried a sack filled with elderberry cuttings, ready to be planted in the fertile soil, and spent his days traveling with a smile on his face and a story to tell.
                        </p><p class="mt-6 text-xl leading-8">
                            Eddie had a dream: to <span class="font-bold">share the magical benefits of elderberries</span> with everyone he met. Just like Johnny Appleseed was known for spreading apple orchards across the land, Eddie wanted to plant elderberry bushes far and wide.  
                        </p><p class="mt-6 text-xl leading-8">
                            One crisp autumn day, Eddie came upon a village that had never seen an elderberry. He noticed the children playing in the fields, but they seemed tired and unwell. Eddie approached them and the villagers explained that many of them had been falling ill with colds and fevers. Eddie knew this was his chance to make a difference. 
                        </p><p class="mt-6 text-xl leading-8">
                            Eddie gathered the villagers and shared <span class="font-bold">the wonders of the elderberry plant. He explained how the berries were packed with vitamins and antioxidants that could boost their immune systems and help them feel better. He shared tales of the elderberry's magic. He told of how the berries could ward off the common cold, how the flowers made a tea that soothed the soul, and how the plant was a friend to the bees, providing them with nectar for their honey. </span>
                        </p><p class="mt-6 text-xl leading-8">
                            The people there were curious about this stranger who spoke of <span class="font-bold">plants that could heal and bring happiness.</span> With his nimble fingers, Eddie planted elderberries all around the village, telling stories of how each berry was like a little drop of kindness from the sky.
                        </p><p class="mt-6 text-xl leading-8">
                            With a group effort, the villagers helped till the ground and plant cuttings, watering them carefully and giving them plenty of sunlight. Eddie taught the villagers how to care for the plants and harvest the berries once they ripened. 
                        </p><p class="mt-6 text-xl leading-8">
                            Wherever Eddie planted his elderberries, he left behind more than just plants; he left laughter, joy, and a touch of whimsy. He'd often be seen with children, teaching them how to make elderflower crowns or how to carefully pick the dark, ripe berries without staining their hands too much.
                        </p><p class="mt-6 text-xl leading-8">
                            As time passed, the bushes thrived, and the villagers began to see the benefits. <span class="font-bold">The children were healthier and more energetic, and the villagers enjoyed making elderberry pies, syrups, and teas.</span> Even when Eddie's footsteps faded into the sunset, the spirit of Eddie Elderberry lingered. Every elderberry harvest, the villagers would remember the man with the wild beard and the gentle smile, who taught them that with a little care, a bit of magic could be found in every berry and flower. 
                        </p><p class="mt-6 text-xl leading-8">
                            Eddie's kindness and knowledge spread like wildfire, and soon other villages invited him to share his wisdom. He traveled far and wide, planting elderberries and teaching others how to cultivate and use them. Eddie Elderberry left a legacy, not of apples, but of elderberries, ensuring that his kindness and knowledge would be tasted and shared for generations to come. </p>
                            
                        <div class="mt-6 text-xl text-center">His legacy lived on in <br />the thriving elderberry bushes <br />that dotted the countryside,<br /> a testament to<br /> the power of nature and <br />one man's dream to<br /><span class="text-3xl font-extrabold"> make the world a better place,</span><br /> one berry at a time.</div>
                        <div class="text-3xl font-extrabold text-center mt-12 bg-purple-600 text-white">Be like Eddie!</div>    
                </div>
            </div>
        </div>
        <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <img class="w-[48rem] max-w-none rounded-xl sm:w-[57rem]"
                 src="images/USA_1200x1200.jpg" alt="">
        </div>
    </div>
</div>

<div class="bg-violet-50 py-6">
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
    <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Coming Soon...</p>
    <div class="mt-2 grid gap-4 lg:grid-cols-3 lg:grid-rows-1">
      <div class="relative lg:row-span-1">
        <div class="absolute inset-px rounded-lg bg-white  border-8 border-purple-600 rounded-lg"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
          <div class="px-8 pt-2 pb-3 ">
              <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">Connect with People</p>
              <ul class="mt-2 list-disc">
                  <li>Your public page</li>
                  <li>Comment everywhere<br />On other people's pages<br />On Wiki pages<br />On any information page</li>
                  <li>Local Eddie Elderberry Groups<br />County and State</li>
                  <li>Local experts (Eddie Elderberries)</li>
              </ul>
              <p class="mb-6">More...</p>
          </div>
          
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]"></div>
      </div>
      <div class="relative max-lg:row-start-1">
        <div class="absolute inset-px rounded-lg bg-white  border-8 border-purple-600 rounded-lg"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
          <div class="px-8 pt-2 pb-3 ">
              <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">Connect with Information</p>
              <ul class="mt-2 list-disc">
                  <li>Wiki will include:<br />Recipes<br />Research links<br />Detailed How Tos<br />Start a business<br /></li>
                  <li>FAQs</li>
                  <li>Surveys</li>
                  <li>Downloads</li>
              </ul>
              <p class="mb-6">More...</p>
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]"></div>
      </div>
      <div class="relative lg:row-span-1">
        <div class="absolute inset-px rounded-lg bg-white  border-8 border-purple-600 rounded-lg"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-2 pb-3 ">
              <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">Connect with Products</p>
              <ul class="mt-2 list-disc">
                  <li>Business Directory</li>
                  <li>Product information</li>
                  <li>Elderberry Products</li>
                  <li>Cuttings & Plants</li>
                  <li>Wholesale</li>
                  <li>Local experts (Eddie Elderberries)<br />will stock products <br />and supplies</li>
              </ul>
              <p class="mb-6">More...</p>
          </div>
          
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
      </div>
    </div>
  </div>
</div>

<div class="container py-2 px-10 mx-0 min-w-full flex flex-col items-center"">  
    <button type="button" onclick="location.href='#top';" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900" href="#">Get an email alert as we add new features to Elderberry.Info</button>
    </form>
</div>

<div class="container py-2 px-10 mx-0 min-w-full flex flex-col items-center"">  
  <p class="mt-2 mb-2 text-lg font-bold tracking-wide text-gray-950 text-center bg-purple-300 rounded">Help support this site. This page sponsored by...</p>
  <a href="https://www.amazon.com/dp/BT00LN946S?externalReferenceId=0b18fbbc-e180-46c4-a0c6-ff57c46f72f6" target="_blank" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
    <img src="images/prime.png" alt=""></a>
</div>

<livewire:copyright/>

@livewireScripts

{{--for SweetAlert2  test--}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />

@include('schema')
</body>
</html>
  