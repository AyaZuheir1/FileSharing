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
<form method="post" enctype="multipart/form-data" action=""  style="width: 80%; margin:0 auto;">
    @csrf
    <div class="form-group">
      <label for="job_name"> file name </label>
      <input type="text" class="form-control" id="job_name"  name="job_name" value="{{ old('job_name') }}">
    @error('job_name')
    <span class="text-danger"> {{ $message }}</span> 
    @enderror
    </div>
    
     
      <div class="form-group">
        <label for="job_name"> jobs logo   </label>
    <input type="file" class="form-control" name="photo[]" multiple id="photo">
    @error('photo')
    <span class="text-danger"> {{ $message }}</span> 
    @enderror
      </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
  </body>