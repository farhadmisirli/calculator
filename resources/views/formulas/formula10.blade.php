@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Tutumun govdesinin hecmi</h2>
    <p class="">Formula: V(gov) = π * R * R * L(gov)</p>
    <br>
    <form action="/calculate/formula10" method="GET">
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>π</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="pi" value="{{ $pi }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <label>R</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="r" value="{{ $r }}" placeholder="0.00">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>L(gov)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="l_gov" value="{{ $l_gov }}" placeholder="0.00">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <input class="form-control" type="text" disabled value="{{ $result }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <button type="submit" class="btn btn-success btn-block">Calculate</button>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <button type="button" onclick="document.location.href = '/calculate/formula10'" class="btn btn-danger btn-block">Format</button>
            </div>
        </div>
    </form>
</div>
@stop