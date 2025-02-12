{{--You can update your theme directly here by changing the data-theme attribute value to your desired theme.--}}
{{--To see the full list of themes check here: https://daisyui.com/docs/themes/--}}

{{--<div class="hero min-h-screen bg-base-200" data-theme="bumblebee">
    <div class="hero-content flex w-full flex-col sm:flex-row"> --}}

        <main class="mx-auto mt-6 max-w-7xl px-4 px-6 sm:mt-24 lg:mt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-2">
              <div class="sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:text-left">
                <h1>
                  <span class="block text-base font-semibold bg-yellow-300 text-gray-500 sm:text-lg lg:text-base xl:text-lg">Coming soon</span>
                  <span class="mt-1 block text-4xl font-bold tracking-tight sm:text-5xl xl:text-6xl">
                    <span class="block text-gray-900">Welcome to</span>
                    <span class="block text-purple-800">American</span>
                    <span class="block text-gray-900">Elderberry.Info</span>
                  </span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Expect progress over the next few weeks!</p>
                <div class="mt-2 sm:mx-auto sm:max-w-lg sm:text-center lg:mx-0 lg:text-left">
                  <form class="card-body" wire:submit="save">
                    <div class="form-control">
                        <label class="label mb-4">
                            <span class="label-text text-xl">{{ __('Sign up to get notified when it’s ready.') }} 
                        </label>
                        <input class="rounded-lg mb-4 border-base-300" type="text" placeholder="Your@Email.com" wire:model="email">
                        <x-validation-errors class="mb-4" />
                        <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled">
                            {{ __('Sign up to be notified') }}
                            <div wire:loading>
                                <span class="loading loading-ring loading-xs"></span>
                            </div>
                        </button>
                    </div>
                </form>
               </div>
            </div>
              <div class="relative mt-12 sm:mx-auto sm:max-w-lg lg:col-span-6 lg:mx-0 lg:mt-0 lg:flex lg:max-w-none lg:items-center">
                
                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                    <img class="w-full object-fill" src="images/Hebrews 6-7.png" alt="" >
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>

 {{--       <div class="basis-1/3">
            <h3 class="text-4xl text-center mb-8">{{ __('Join the waitlist') }}</h3>
            <div class="card shadow-2xl bg-base-100">
                <form class="card-body" wire:submit="save">
                    <div class="form-control">
                        <label class="label mb-4">
                            <span class="label-text text-xl">{{ __('Add your email to be notified once') }} <span class="text-secondary">{{ __('Laravel Starter Kit') }}</span> {{ __('is ready') }}</span>
                        </label>
                        <input class="rounded-lg mb-4 border-base-300" type="text" placeholder="Email" wire:model="email">
                        <x-validation-errors class="mb-4" />
                        <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled">
                            {{ __('Subscribe') }}
                            <div wire:loading>
                                <span class="loading loading-ring loading-xs"></span>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
