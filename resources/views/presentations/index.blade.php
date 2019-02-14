@extends('layouts.app')

@section('content')
<section class="mt-10">
    <div class="container mx-auto">
        <div class="mb-5 text-right">
            <a class="no-underline text-white bg-blue py-2 px-4 border hover:bg-blue-light mr-1" href="/presentations/create">New Presentation</a>
        </div>
        <table class="table-auto rp-table bg-white shadow-md text-left">
            <thead>
                <tr class="uppercase font-bold">
                    <th width="25%">Title</th>
                    <th width="15%">Speaker</th>
                    <th width="10%">Date</th>
                    <th width="30%">Description</th>
                    <th class="text-center" width="20%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($presentations->count() < 1)
                    <tr>
                        <td colspan="5"> No presentations listet!</td>
                    </tr>
                @else
                    @foreach($presentations as $presentation)
                        <tr>
                            <td>{{ $presentation->title }}</td>
                            <td>{{ $presentation->speaker ? $presentation->speaker->fullName() : 'Name Missing.' }}</td>
                            <td>{{ $presentation->date->format('d.m.Y') }}</td>
                            <td>{{ $presentation->description }}</td>
                            <td class="text-center">
                                <small><a class="no-underline bg-transparent py-1 px-2 border hover:bg-blue-light mr-1 text-blue hover:text-white" href="/presentations/{{ $presentation->id }}/votes/create">Vote</a></small>
                                <small><a class="no-underline bg-transparent py-1 px-2 border hover:bg-blue-light text-blue hover:text-white" href="/presentations/{{ $presentation->id }}/votes">Results</a></small>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="mt-5">
            {{ $presentations->links() }}
        </div>
    </div>
</section>
@endsection