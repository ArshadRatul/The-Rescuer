
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <h1  class="font-weight-normal">Create your Account</h1>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="firstname" value="{{ __('First Name') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="lastname" value="{{ __('Last Name') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="username" value="{{ __('User name') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="adress" value="{{ __('Adress') }}" />
                <x-jet-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="nid" value="{{ __('NID') }}" />
                <x-jet-input id="nid" class="block mt-1 w-full" type="text" name="nid" :value="old('nid')" required />
            </div>
            <div class="mt-4">
                <label for="">Date of Birth</label>
            <input type="date" id="dob" class="block mt-1 w-full" type="text" name="dob" :value="old('dob')" required>
            </div>

            {{-- <div class="mt-4">
                <div class="dropdown">
                    <button class="btn btn-primarry dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Select your designation
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">User</a></li>
                      <li><a class="dropdown-item" href="#">Police</a></li>
                      <li><a class="dropdown-item" href="#">Doctor</a></li>
                    </ul>
                  </div>

            </div> --}}
            {{-- <div class="mt-4">
                <label for="formGroupExampleInput" id="ma" style="   ;">  Select your designation :</label>

                <br> <input type="radio"  name="usertype" value="User" name="usertype" required >

                 <label for="ma" >User</label>
                 <input type="radio" id="Police"  value="Police" name="usertype" >
                 <label for="fe">Police Station</label>
                 <input type="radio" id="FireStation"  value="FireStation" name="usertype" >
                 <label for="fe">Fire Station</label> </label>
                 <input type="radio" id="Hospital"  value="Hospital" name="usertype" >
                 <label for="fe">Hospital</label>
            </div> --}}
            <div class="mt-4">
                <label for="formGroupExampleInput" id="ma" style="   ;"> Gender :</label>

                <br> <input type="radio" name="gender" value="Male" name="gender" required>

                 <label for="ma" >Male</label>
                 <input type="radio" id="fe" value="Female" name="gender" >
                 <label for="fe">Female</label>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
