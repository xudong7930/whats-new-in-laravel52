<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://ehd4.f3322.net/youtube/bootstrap337/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form method="post" action="/invitation">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email-1" class="control-label">Email #1:</label>
                <input type="text" id="email-1" name="email[]" class="form-control" value="{{ old('email.0') }}" />
                @if ($errors->has('email.0'))
                    <span class="help-block text-danger">{{ $errors->first('email.0') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email-2" class="control-label">Email #2:</label>
                <input type="text" id="email-2" name="email[]" class="form-control" value="{{ old('email.1') }}" />
                @if ($errors->has('email.1'))
                    <span class="help-block text-danger">{{ $errors->first('email.1') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email-3" class="control-label">Email #3:</label>
                <input type="text" id="email-3" name="email[]" class="form-control" value="{{ old('email.2') }}" />
                @if ($errors->has('email.2'))
                    <span class="help-block text-danger">{{ $errors->first('email.2') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
