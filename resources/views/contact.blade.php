<x-guest-layout>
    {{-- hero section --}}
    <div class="h-screen max-h-[170px] sm:max-h-[445px] bg-cover bg-center pt-20"
        style="background-image: url('{{ asset('images/abouthero.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center  text-white h-full">
            <div class="text-center w-full">
                <h1 class="font-mont font-regular text-4xl sm:text-7xl uppercase"><span
                        class="font-bold ml-4">Contact</span> </h1>
            </div>
        </div>
    </div>


    {{-- Welcome --}}
    <div class="py-12 sm:py-24 bg-cream">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:flex">
            {{-- heading --}}
            <div class="sm:w-1/2">
                <h2 class="font-mont font-bold text-3xl sm:text-6xl mb-10">Get In Touch</h2>
                <p class="mb-3">Don’t be hesitate! <span class="text-seagreen">Say Hello!</span></p>
                <p class="mb-3">Thank you for your interest in Shada Pixel.</p>
                <p class="mb-4">We are excited to hear from you and discuss how we can assist you in achieving your
                    digital objectives. Feel free to reach out to us using the contact information provided below.</p>

                <div class="">
                    <p><span class="text-seagreen">Phone:</span> <a href="tel:+8801956113999">+880 1956 113 999</a></p>
                    <p><span class="text-seagreen">Email:</span> <a
                            href="mailto:shadapixel@gmail.com">shadapixel@gmail.com</a></p>
                    <p><span class="text-seagreen">Location:</span> 75 TB Boundary Road, Moulovipara, Khulna - 9000 </p>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="text-center sm:w-1/2 mt-10 sm:mt-0">
                <form method="POST" action="{{ route('queries.store') }}" id="contactusform">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autocomplete="name" placeholder="Name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="Email Address" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Subject -->
                    <div class="mt-4">
                        <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject"
                            :value="old('subject')" required autocomplete="subject" placeholder="Subject" />
                        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                    </div>

                    <!-- Message -->
                    <div class="mt-4">
                        <x-textarea id="message" class="block mt-1 w-full" type="message" name="message" required
                            autocomplete="message" placeholder="Message" />

                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <div class="flex items-end justify-end mt-4">
                        <button
                            class="font-mont mt-8 px-10 py-4 bg-black text-white font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 relative after:absolute after:content-['Submit_Now'] after:flex after:justify-center after:items-center after:text-white after:w-full after:h-full after:z-10 after:top-full after:left-0 after:bg-seagreen overflow-hidden hover:after:top-0 after:transition-all after:duration-300">
                            Submit Now
                        </button>
                    </div>
                </form>
                <p class="text-left text-seagreen" id="subscriptionsuccess"></p>
            </div>
        </div>
    </div>

    <x-slot name="script">

        <script>
            let cf = $('form#contactusform');


            cf.submit(function(e) {
                e.preventDefault();

                let subscribed = $('#subscriptionsuccess');
                $.ajax({
                    method: 'POST',
                    url: BASE_URL + 'queries',
                    data: cf.serialize(),

                    success: function(response) {

                        if (response.status == "success") {
                            subscribed.html(response.message);
                            cf.trigger("reset");
                            setTimeout(function() {
                                subscribed.html('');
                            }, 5000);
                        } else if (response.status == "error") {
                            subscribed.html(response.message);
                            setTimeout(function() {
                                subscribed.html('');
                            }, 5000);
                        }
                    }
                });
            });
        </script>
    </x-slot>


</x-guest-layout>
