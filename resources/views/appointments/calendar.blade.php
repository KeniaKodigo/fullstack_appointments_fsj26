@extends('home')

@section('content-dinamico')
    <section>
        <h1 class="title">Calendarios de Citas</h1>

        <div class="mt-4" id="calendar">
            {{-- calendario --}}
        </div>
    </section>
@endsection
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
    <script>
        window.calendarAppointments = @json($appointments);
        console.log(window.calendarAppointments);
    </script>
    <script src="{{ asset('js/calendar.js') }}"></script>
@endpush