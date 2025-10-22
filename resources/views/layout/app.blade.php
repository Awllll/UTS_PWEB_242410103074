<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kepoin-AniManga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    body {
        background-image: url('https://i.pinimg.com/1200x/d0/72/cd/d072cd4b370900b96633ca2ee7e9d448.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .main-container {
        flex: 1;
        background-color: rgba(255, 255, 255, 0.85);
        border-radius: 12px;
        padding: 30px;
        margin: 30px auto;
        width: 90%;
        max-width: 1000px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        backdrop-filter: blur(6px);
        animation: fadeIn 0.7s ease-in-out;
    }

    footer {
        background-color: #198754;
        color: white;
        text-align: center;
        padding: 12px 0;
        margin-top: auto;
        width: 100%;
    }

     @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

</head>
<body>
     <x-navbar />

      <div class="content" id="mainContent">
        <div class="main-container">
            @yield('content')
        </div>
    </div>

    @include('components.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
