<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Finder</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
        color: #fff;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                    url('https://source.unsplash.com/1600x900/?food,kitchen') no-repeat center center fixed;
        background-size: cover;
    }

    .container {
        max-width: 900px;
        margin: 30px auto;
        padding: 30px;
        background-color: rgba(0,0,0,0.6);
        border-radius: 15px;
    }

    h1, h2 {
        text-align: center;
        color: #ffcc00;
    }

    a {
        color: #ffcc00;
        text-decoration: none;
    }

    .button {
        background-color: #ffcc00;
        color: #000;
        padding: 10px 20px;
        border: none;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .button:hover {
        background-color: #e6b800;
        transform: scale(1.05);
    }

    img {
        border-radius: 10px;
    }
    .link-button {
    background-color: transparent;
    border: 2px solid #ffcc00;
    color: #ffcc00;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
    text-decoration: none;
}

.link-button:hover {
    background-color: #ffcc00;
    color: #000;
    transform: scale(1.05);
}

</style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- Modal -->
    <div id="modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
        background:rgba(0,0,0,0.7); z-index:9999; justify-content:center; align-items:center;">
        <div style="background:#fff; color:#000; padding:20px; border-radius:10px; text-align:center; max-width:300px;">
            <p id="modalMessage"></p>
            <button onclick="closeModal()" class="button" style="margin-top:10px;">OK</button>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
