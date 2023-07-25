<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>File Sharing Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
<form method="post" enctype="multipart/form-data" action="{{ route('file.upload') }}"  style="width: 80%; margin:0 auto;">
    @csrf
    <h1>welcome</h1>
    <table class="table table-striped table-hover">
                  
                    <tbody>
                    <td><a href="{{ route('file.view') }}" class="btn btn-primary">Files</a></td>
                    <td><a href="{{ route('file.showUploadedFiles') }}" class="btn btn-primary">view files</a></td>
                    </tbody>
    </table>
      <div class="form-group">
        
    <input type="file" class="form-control" name="file" multiple id="photo">
    @error('photo')
    <span class="text-danger"> {{ $message }}</span> 
    @enderror
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
  </body>