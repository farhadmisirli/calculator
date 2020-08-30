<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Calculator</h2>
        <p>Formula: (p * d) / (2 * sigma * fi - p)</p>
        <br>
        <form action="/calculate" method="GET">
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
                    <button type="button" onclick="document.location.href = '/calculate'" class="btn btn-danger btn-block">Format</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>