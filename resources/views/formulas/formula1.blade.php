@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Govdenin hesabi qaligi</h2>
    <p class="">Formula: (p * d) / (2 * sigma * fi - p)</p>
    <br>
    <form action="/calculate/formula1" method="GET">
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>P(mm)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="p" value="{{ $p }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <label>D</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="d" value="{{ $d }}" placeholder="0.00">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>Siqma</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="sigma" value="{{ $sigma }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <label>Fi</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="fi" value="{{ $fi }}" placeholder="0.00">
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
                <button type="button" onclick="document.location.href = '/calculate/formula1'" class="btn btn-danger btn-block">Format</button>
            </div>
        </div>
    </form>
</div>
@stop    