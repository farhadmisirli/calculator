@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Sildirik hissenin xarici diametri</h2>
    <p class="">Formula: D(xar) = D(dax) + 2*S</p>
    <br>
    <form action="/calculate/formula7" method="GET">
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>D(dax)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="d_dax" value="{{ $d_dax }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <label>S</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="s" value="{{ $s }}" placeholder="0.00">
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
                <button type="button" onclick="document.location.href = '/calculate/formula7'" class="btn btn-danger btn-block">Format</button>
            </div>
        </div>
    </form>
</div>
@stop