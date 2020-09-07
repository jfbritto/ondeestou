@extends('includes.base')

@section('body')

<div class="card mb-3">
    <div class="card-header">
        Total de visitas!
    </div>
    <div class="card-body text-center">
        <span style="font-size: 40px;" id="tot-views"></span>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        Total de clicks por link!
    </div>
    <div class="card-body" id="lista-links">

    </div>
</div>

@stop

@section('js')
<script src="/js/home/analytic.js"></script>
@stop