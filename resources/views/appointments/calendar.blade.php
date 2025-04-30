@extends('home')

@section('content-dinamico')
    <section>
        <h1 class="title">Calendarios de Citas</h1>

        <div>
            {{-- calendario --}}
        </div>
    </section>
@endsection
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
    <script>
        {{assets('js/calendar.js')}}
    </script>
@endpush