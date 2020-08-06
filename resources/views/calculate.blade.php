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
        <h2>Column Sizing</h2>
        <p>The form below shows input elements with different widths using different .col-xs-* classes:</p>
        <form action="/calculate" method="GET">
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>P(mm)</label>
                    <input class="form-control" type="number" min=0 step="0.01" name="p" value="{{ $p }}">
                </div>
                <div class="col-xs-2">
                    <label>D</label>
                    <input class="form-control" type="number" min=0 step="0.01" name="d" value="{{ $d }}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Siqma</label>
                    <input class="form-control" type="number" min=0 step="0.01" name="sigma" value="{{ $sigma }}">
                </div>
                <div class="col-xs-2">
                    <label>Fi</label>
                    <input class="form-control" type="number" min=0 step="0.01" name="fi" value="{{ $fi }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <input class="form-control" type="text" disabled value="{{ $result }}">
                </div>
                <div class="col-xs-2">
                    <button type="submit" class="btn btn-success">Calculate</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>