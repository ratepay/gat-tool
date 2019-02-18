@extends('layouts.app')

@section('content')
    <section class="mt-10">
        <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
            <div class="px-6 py-4">
                <form class="form" method="POST" action="{{ url('/setup') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="mb-5">
                        <label for="name">App Name</label>
                        <input type="text" class="input focus:outline-none focus:shadow-outline" name="name" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="mb-5">
                        <label for="logo">Logo</label>
                        <input type="file" class="input focus:outline-none focus:shadow-outline" name="logo">
                    </div>

                    <div>
                        <button type="submit" class="btn-blue">
                            Next Step
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection