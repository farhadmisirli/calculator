@extends('layouts.default')
@section('content')
<div class="container">
    <h2>Tutumun xarici sethinin sahesi</h2>
    <p class="">Formula: F(tut) = F(gov) + 2F(dib)</p>
    <br>
    <form action="/calculate/formula5" method="GET">
        <div class="form-group row">
            <div class="col-xs-5 col-md-2">
                <label>F(gov)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="f_gov" value="{{ $f_gov }}" placeholder="0.00">
            </div>
            <div class="col-xs-5 col-md-2">
                <label>F(dib)</label>
                <input class="form-control" type="number" min=0 step="0.0001" name="f_dib" value="{{ $f_dib }}" placeholder="0.00">
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
                <button type="button" onclick="document.location.href = '/calculate/formula5'" class="btn btn-danger btn-block">Format</button>
            </div>
        </div>
    </form>
</div>
@stop    