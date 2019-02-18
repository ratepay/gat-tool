@extends('layouts.app')

@section('content')
<section class="mt-10">
    <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
        <div class="px-6 py-4">
            <form class="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="mb-5">
                    <label for="email">E-Mail</label>
                    <input type="email" class="input focus:outline-none focus:shadow-outline" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-5">
                    <label for="password">Password</label>
                    <input type="password" class="input focus:outline-none focus:shadow-outline" name="password">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" class="input focus:outline-none focus:shadow-outline" name="password_confirmation">
                </div>

                <div>
                    <button type="submit" class="btn-blue">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
