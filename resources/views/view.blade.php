<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Files</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
<div class="container">
    <h1>Files</h1>
    <ul class="list-group">
        <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>File Name</th>
                            <th>Number of downloads</th>
                            <th>Share</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                      

                        @foreach ($files as $file)
                            <tr>
                                
                                <td>{{ $i++ }}</td>
                                <td>{{ $file->file_name }}</td>
                                <td> {{ $file->downloads }}</td>

                                <td><a href="{{ route('file.share', $file->id) }}" target="_blank" class="btn btn-primary">Share</a></td>
                                <td><a href="{{ route('file.download', $file->id) }}" download class="btn btn-success">Download</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
        
    </ul>
</div>
</body>
</html>



