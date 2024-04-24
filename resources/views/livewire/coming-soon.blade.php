<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex w-full flex-col sm:flex-row">
        <div class="basis-2/3 text-left mr-8">
            <h1 class="text-5xl sm:text-6xl font-bold leading-12">
                Launch your Startup with <br> <span class="text-secondary">Laravel Starter Kit</span> in Days. <br>Save time and money.
            </h1>
            <h2 class="py-6"><b>Laravel Starter Kit</b> is your Laravel Jetstream, Tailwind,
                Inertia.js, Vue boilerplate. <br>Streamline your SaaS app development with ready-to-go components for
                payments, emails, OpenAI, Blog, Admin and many more. </h2>
        </div>
        <div class="basis-1/3">
            <h3 class="text-4xl text-center mb-8">Join the waitlist</h3>
            <div class="card shadow-2xl bg-base-100">
                <form class="card-body" wire:submit="save">
                    <div class="form-control">
                        <label class="label mb-4">
                            <span class="label-text text-xl">Add your email to be notified once <span class="text-secondary">Laravel Starter Kit</span> is ready</span>
                        </label>
                        <input class="rounded mb-2 border-base-300" type="text" placeholder="Email" wire:model="email">
                        <x-validation-errors class="mb-4" />
                        <button type="submit" class="btn btn-secondary"
                                wire:loading.attr="disabled">Subscribe
                            <div wire:loading>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
