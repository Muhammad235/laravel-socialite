<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center">
        <a href="{{ route('github.login') }}">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAB6CAMAAABHh7fWAAAAaVBMVEX///8XFRUAAAATERH8/PwNCgry8vIGAAAJBQX4+Pjm5uaGhobZ2dmioqLv7+8RDg7Ozs5XVlZBQECcnJxMS0tlZWWOjY1ubm6ysrIuLi6AgIA2NTVfXl4qKSmUk5OsrKzCwsIeHR13dnboOKy3AAAFHElEQVRoge1aW6OyKhCtQUxJ00zNtNT2//+RR7MLDBoX7Xs5rqd2O1gyzGUxuNmsWLFixYoVK34N54F/zOkGRV6er8cO1/NfXgTuP3kCt9gn8IDnUep5w+ekbNzf8rKwp6VbCbT7ujoFv+J1inSUlqNPi19Y3m0u4E3zDvDgEh4WJvbDCiIVcY+oI/eXZG4TPeKBvGoXI/bP37ZYBoVsIXdvAUyIewC0CxA7eyCmzNstgXK2rx9S4yU/F56yeczsYsnccd9mZZhgqwzlaXgktmeOiZFnY0RgzR3MY+64PUtudp/J3EX43Wq//crawz7wLjbJ5cgxE6PQ5n8NqTlzzTHTPj/tNNfZ5T5+pyA3ZQ445ujGWFwcQZ3WSFeym5ixhOc2dDXnxlUqOD2+80PynbwjPg3VuuE3a2tWRPe8i8HbTZv78D2hO3hjR4cHAhq+8jYThv+ZMPPm7hbz+YebQ0/qJdlffmo6nOrynEb9V7DnnFkwj5HJee/eRhfhqdIsDJgQMj4LmnMqzH/kE/DuqF/FWiGiITN46CdKcYZCe2AiFA2zvRpQC9Q00V22uOgFqPWXLS56C2dzatHgW1rpDYtR7qaJOfUV5T5NJ0dPLASXLijKPZqbJqUs84rPpKIHOo7WysP0Y2PeHNjeVm62lybRsLi/RfamlY2ixhqaUHURCaTnbS2YN4HkaGqpdELUcLVh3mz+8Dy1csgZD7EUldh6O6XH+IkoQ2lqe1q+ijkxSlQCke3EPYK9JTPeOQKqMxi204wDBJ5J5Wc4GYB1a8TH9lMllRCZ6W7dGHESsQfyFJfTQLks0i7yMpCfQan4PYotaiCrMDKxcCp1Fiq0NF2MeqfKTZloJX1VJQMZ3FOtGlFHF3s3S6kZNTK46amFg38Tg0tt8MXi2kVqR+lmUsGxbgNhkaQUCzUe0NhSS3lRVTUbPMBCHQ3AGkm5CCzC1bVuAs4RNYGUhUiSsbabLU+kKpqHG9ZUlgUbOw25qWLFQTmoSypW4eVXqHfvXZV5UZbhqmI3Cuyu6sI1cnAg1GLZLlbzOpralc8sR3NqnBS7WTQiBQeFTdcNi/m+8FsNM05pxcgUOh4jH1BNXS0cm0HrOiIZ6UVDpu1rB3mftTsTb3M9eoHk9fmkpVecevRqSvOI7rwaj+eYtSV5zkRgVytzalCP93AJ1dRZ+cAGYf/H4V3BCdC0jtnEJA6L84RO9G+1Y4QN+YA8rfRxeUIBbum5lGpQXGbpHQCfqd/jttp3Xs9SSyB7KDOhEnT08uHTTydpH4vWL0Hs/nKuQZCmYuNyZMvZt045uRtc9L0jEx5BceAnHtdYUt+Gf9ZQn5k74A8OUnDc42pDasF8QBMjQR1/3Pph3tPnBhtGJ3KkUqV41mnkb5MP9m0rgCiKPJiS01hifJiNi0/1XObLR9zierlc0jyeiOupzdZtCnN4+6xG1+kLtbqFMoL2yU08rcH5KDWxa/i9shi960jxcWo7Yfexoadz/z5Kbd/6eqlTCrnS6GPUGipUyd1VzKxuA8biNp8QSyPUc5g5VU7eN4kTNpSp5zH3voZOEVMZAgdXZOthH8QUbKiBzng94wV2Fe9GJwwuUBO4znwhZoAT8kpPhxogXOqVt+DIFS4lNYXjkm/6Fbd3SldQE7gZ300p0JBh5d+pO0lq3ff5gv6txohMFbIaSNS/1/gD4h5BWY3I0QGdKK3Kn73N2cGdOgH0Z4Afv8S6YsWKFStW/G/xH2yGOemG27+EAAAAAElFTkSuQmCC" alt="Github icon" width="50px" class="mx-auto scale-100 hover:scale-125 ease-in duration-200">
        </a>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
