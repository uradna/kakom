<x-app-layout>
    <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Kalender') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">

        </ol>
    </x-slot>
    {{-- @desktop --}}
    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row p-2">

                        <iframe
                            src="https://calendar.google.com/calendar/embed?src=5cbdb8fc8e5f0ea433973fa031cc09329d24931c309d889271d559905e810757%40group.calendar.google.com&ctz=Asia%2FBangkok"
                            style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    {{-- @enddesktop --}}

</x-app-layout>
