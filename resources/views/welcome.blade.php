<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Kalam:wght@400;700&family=Mynerve&family=Salsa&family=Zeyada&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="image-placer">
                <img class="logo" src="{{ asset('images/logo.png') }}">
            </div>
            
            <div class="between middle-section">
                <a href="#" class="a"> ABOUT </a>
                <a href="#" class="a"> INSIGHT </a>
                <a href="#" class="a"> PRODUCT </a>
                <a href="#" class="a"> CONTACT </a>
            </div>
    
            @if (Route::has('login'))
                <div class="sign-page">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="button">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="button login">LOGIN</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button register">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div>
                <img class="hamburger" id="hamburger" src="{{ asset('images/hamburger.png') }}">
                <img class="close" id="close" src="{{ asset('images/close.png') }}">
            </div>
        </nav>
    </header>

    <div class="mobile-nav" id="mobile-nav">
        <div class="mobile-header">
            <a href="#" class="a"> ABOUT </a>
            <a href="#" class="a"> INSIGHT </a>
            <a href="#" class="a"> PRODUCT </a>
            <a href="#" class="a"> CONTACT </a>
        </div>

        @if (Route::has('login'))
            <div class="mobile-sign-page">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="button login">LOGIN</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button register">REGISTER</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <main>
        <div class="section-1">
            <div class="section-1-div">
                <img class="glitter" src="{{ asset('images/glitter.png') }}">
                <img class="image-1" src="{{ asset('images/image-1.png') }}">
                <div class="right-section-1">
                    <h1 class="slogan"> WONDER INTO THE WORLD OF IMPOSSIBLE. </h1>
                    <h2 class="slogan-text"> WITH <span class="rednox">REDNOX</span> ON HAND</h2>
                    <div class="btn-stuck">
                        <button class="get-btn"> GET IT NOW!</button>
                        <img class="sparkle" src="{{ asset('images/sparkle.png') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="section-2">
            <!-- Add content for section 2 here -->
        </div>

        <div class="section-3">
            <!-- Add content for section 3 here -->
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>