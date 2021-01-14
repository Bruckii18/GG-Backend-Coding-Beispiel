<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
{{ $airline }}
<form method="POST" action="/api/airlines/{{ $airline->id }}">
@CSRF
    <input name="_method" type="hidden" value="PUT">
    <div class="form-group">
        <label for="id">Neuer Name der Airline</label>
        <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Enter Name" value="{{ $airline->name }}" required>
    </div>
        <button type="submit" class="btn btn-primary">Namen ändern</button>
</form>
