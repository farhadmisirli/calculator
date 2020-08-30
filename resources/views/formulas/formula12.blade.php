@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Tutumun hecmi</h2>
    <p class="">Formula: V(tut) = V(gov) + 2*V(dib)</p>
    <br>
    <form action="/calculate/formula12" method="GET">
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>V(gov)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="v_gov" value="{{ $v_gov }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <label>V(dib)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="v_dib" value="{{ $v_dib }}" placeholder="0.00">
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
                <button type="button" onclick="document.location.href = '/calculate/formula12'" class="btn btn-danger btn-block">Format</button>
            </div>
        </div>
    </form>
</div>
@stop