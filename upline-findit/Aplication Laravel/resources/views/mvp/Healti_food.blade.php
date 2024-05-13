@extends('Mastering.m1')
@section('dotstylebody')
    style="width: 96dvw;"
@endsection
@section('content1')
    @include('Mastering.navtop1')
    @include('Componen.ListResep')
    @include('Mastering.navbtm')
@endsection

@section('jspaten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
{{-- @dump($resep) --}}
