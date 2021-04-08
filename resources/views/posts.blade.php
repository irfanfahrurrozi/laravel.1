<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</head>
<body>
   
     

     <section>
         <div class="container">
             <Div class="row">
                 <div class="col-md-12">
                     <div class='card'>
                         <div class="card-header">
                             All Posts
                         </div>

                         <div class="card-body">
                         @if (Session::has('post_deleted'))
                         <div class="alert alert-success" role="alert">
                                    {{Session::get('post_deleted')}}
                                </div>
                         @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                        <th>Data Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($posts as $posts)
                                    <tr>
                                    <td> {{$posts -> title}}</td>
                                    <td> {{$posts -> post}}</td>
                                    <td>
                                    
                                        <a href="/posts/{{$posts->id}}" class="btn btn-success">View</a>
                                        <a href="/edit-post/{{$posts->id}}" class="btn btn-warning">Edit</a>
                                        <a href="/delete-post/{{$posts->id}}" class="btn btn-danger">Delete</a>
                                        
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            <a href="/add-post" class="btn btn-success btn-block ">Create Post</a>
                         </div>
                     </div>
                 </div>
             </Div>
         </div>
     </section>
</body>
</html>