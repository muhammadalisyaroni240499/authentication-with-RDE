<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        body{
            font-family: 'poppins';
        }
        h3{
            color: purple;
            text-align: center;
        }
        button{
        	padding: 10px;
        	margin: 5px auto;
        	display: block;
        	text-decoration: none;
        	font-family: 'poppins';
        	background-color: snow;
        	border: 2px solid purple;
        	border-radius: 8px;
        }

        button:hover{
        	background-color: purple;
        	color: white;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h3>PEMBAHARUAN STEGO IMAGE</h3>
    <p>Halo kak, link dibawah adalah link untuk memperbaharui stego image kakak yang tidak bisa digunakan. Sebelum memperbaharui stego image, mohon perhatikan langkah langkah berikut yaa...</p>
    <ol>
        <li>Mengisi data diri dengan sesungguhnya, guna menghindari kelupaan terutama pada katasandi</li>
        <li>Pastikan mengunduh stego image yang baru sebelum 30 menit setelah pembaharuan dilakukan</li>
    </ol>
    <a href="{{ URL::signedRoute('recovery', ['user'=> $slug]) }}" class="dropdown-item"><i class="bi bi-pencil-square"></i><button>Perbaharui stego image</button></a>
</body>
</html>