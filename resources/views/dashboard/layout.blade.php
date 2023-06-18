<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
    
    {{-- font awesome --}}
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/themes/prism.min.css">
    <link rel="stylesheet" href="/css/bootstrap-image-checkbox.css">
    
    <title>{{ $tittle_page }}</title>
    
    <style>
        html,body{
            font-family: 'poppins';
            height: 100%;
        }
        .header{
            background-color: white;
            color: #212529;
            padding-bottom: 2vh;
            padding-top: 2vh;
        }
        .header .salam{
            font-weight: bolder;
        }
        .list-coverdata{
            background-image: linear-gradient(#45007a, #16007a);
            padding: 5vh;
        }
        .list-coverdata a{
            text-decoration: none;
            color: grey;
        }
        .hasil-PSNR{
            
        }




        .form-registration {
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 6%;
            height: 100%;
            border-radius: 10px;
        }
        
        .form-signin {
            background-color: rgba(255, 255, 255, 0.7);
            margin: 0;
            padding: 4%;
            height: 100%;
            border-radius: 10px;
        }
        
        
        .cont-custom {
            margin-top: 1%;
            height: 100%;
        }
        
        .full-height {
            height: 100vh;
        }
        
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }
        
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        
        .form-registration input {
            border-radius: 0;
            margin-bottom: 3px;
        }
        
    </style>
</head>
<body style="background-color:  linear-gradient(turquoise, black)">
    @include('dashboard.navbar')
    @yield('container')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>