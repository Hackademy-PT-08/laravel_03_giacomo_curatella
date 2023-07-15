<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
    
    <main>
        <!-- TESTATA -->
        <header>
            <div class="row py-1 m-0">
                <div class="col-12">
                    <p class="text-center">RICETTE ITALIANE</p>
                </div>
                <hr>
            </div>
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav w-100 justify-content-between">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><strong>Home</strong></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link robo" href="{{ route('home') }}"><strong>Features</strong></a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('home') }}"><img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/27302.png" alt="" class="img-fluid" style="width: 5vh;"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link robo" href="{{ route('home') }}"><strong>Pricing</strong></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link robo" href="{{ route('home') }}"><strong>About Us</strong></a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header>

       <section class="container-fluid p-5">
        <!-- PARTE 1 -->
        <div class="row">
            <!-- SINISTRA -->
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                <h2 class="text-center robo py-5"><strong>{{ $ricetta['title']}}</strong></h2>
                <div class="d-flex justify-content-center gap-5 border-0 bg-transparent py-5">
                    <p class=" corsivo"><i class="fa-solid fa-kitchen-set me-2 champange"></i>{{ $ricetta['difficulty']}}</p>
                    <p class=" corsivo"><i class="fa-solid fa-clock-rotate-left me-2 champange"></i>{{ $ricetta['timeToPrep']}}</p>
                    <p class=" corsivo"><i class="fa-solid fa-utensils me-2 champange"></i>{{ $ricetta['type']}}</p>
                </div>
                <p class="text-center corsivo">{{ $ricetta['description']}}</p>
                <p class="py-5"><i class="fa-solid fa-angles-down fa-3x" id="freccia"></i></p>
            </div>
            <!-- DESTRA -->
            <div class="col-md-6">
                <img src="{{ $ricetta['imgMain'] }}" alt="" class="img-fluid rounded-4">
            </div>
        </div>

        <!-- PARTE 2 -->
        <div class="row py-5 bg-white mt-5">
            <p class="text-center mb-5 corsivo">Ingredienti</p>
            @foreach($ricetta['ingredients'] as $ingredienti)
            <div class="col-md-6 py-3">
                <p class="corsivo">{{ $ingredienti}}</p>
                <hr>
            </div>
            @endforeach
            
            
        </div>

        <!-- PARTE 3 -->
        <div class="row py-5 bg-white">
            <!-- SINISTRA -->
            <div class="col-md-6 d-flex flex-column align-items-center">
                <p class="h4 robo text-center m-0 p-0">{{ $ricetta['usedProductTitle'] }}</p>
                <img src="{{ $ricetta['usedProductImg'] }}" alt="" class="img-fluid" style="width: 50vh;">
                <p class="h4 robo text-center">{{ $ricetta['usedProductDescription'] }}</p>
            </div>
            <!-- DESTRA -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <p class="h4 robo m-0 py-4">{{ $ricetta['preparation'][0]['preparationTitle']}}</p>
                @foreach($ricetta['preparation'][0]['procedures'] as $procedura)
                <div class="col-12">
                    <p>{{ $procedura}}</p>
                    <hr>
                </div>
                @endforeach
                <p class="corsivo text-center py-5">{{ $ricetta['tip'] }}</p>
            </div>
        </div>
       </section>

        


    </main>
    
    <script src="/js/main.js"></script>
    <script src="https://kit.fontawesome.com/018c0fd7b3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>