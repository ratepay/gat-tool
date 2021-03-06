@extends('layouts.app')

@section('content')
    <section class="mt-10">
        <div class="container mx-auto bg-white shadow-md w-full max-w-sm">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-1">Add new presentation</div>
                <form action="/presentations" method="POST">
                    {{ csrf_field() }}
                    <br />
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                            Title
                        </label>
                        <input class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="title" type="text" placeholder="Title">
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="first_name">
                            First Name
                        </label>
                        <input class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="first_name" type="text" placeholder="First Name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="name">
                            Last Name
                        </label>
                        <input class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="name" type="text" placeholder="Last Name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="desscription">
                            Description
                        </label>
                        <textarea class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="date">
                            Date
                        </label>
                        <input class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="date" type="date" placeholder="Choose Date">
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none" name="email" type="email" placeholder="Email">
                    </div>
                    <div>
                        <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 w-full mb-5">Save</button>
                        <a class="text-grey-darkest" href="/">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection