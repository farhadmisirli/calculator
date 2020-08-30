@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Tutumun faydali hecmi</h2>
    <p class="">Formula: V(fay) = V(tut) * 0.85</p>
    <br>
    <form action="/calculate/formula13" method="GET">
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>V(tut)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="v_tut" value="{{ $v_tut }}" placeholder="0.00">
            </div>
            
            <div class="col-xs-5 col-md-2">
                <label>V(fay)</label>
                <input class="form-control" type="text" disabled value="{{ $result }}" placeholder="0.00">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <button type="button" onclick="document.location.href = '/calculate/formula13'" class="btn btn-danger btn-block">Format</button>
            </div>
            <div class="col-xs-5 col-md-2">
                <button type="submit" class="btn btn-success btn-block">Calculate</button>
            </div>
        </div>
    </form>
</div>
@stop