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

        <!-- SLOGAN -->
        <section class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase text-center robo">Ricette Italiane: I milgiori piatti del mondo</h1>
                    <p class="text-center corsivo">Cucina Mediterranea, ricette veloci e piatti della grande tradizione italiana, regione per regione!</p>
                </div>
            </div>
        </section>

        <!-- HERO -->
        <hr>
        <section class="container-fluid py-5">
            <div class="row">
                <div class="col-12 hero p-0">
                    
                </div>
            </div>
        </section>
        <hr>

        <!-- LSIT OF PRODUCT -->
        <section class="container-fluid p-md-5 p-0">
            <div class="row">
                @foreach ($ricette as $index)
                    @foreach ($index as $ricetta)
                        <div class="col-md-6 px-4">
                            <div class="card mb-5 border-0 p-3 bg-transparent">
                                <div class="cardImg p-0 rounded-3 border-0" style="background-image: url('{{ $ricetta['imgMain'] }}')">
                                    <img src="{{ $ricetta['imgMain'] }}" alt="" class="img-fluid d-none">
                                </div>
                                <div class="card-body py-4">
                                    <p class="h4 text-center text-truncate robo">{{ $ricetta['title']}}</p>
                                    <p class="text-center small text-truncate corsivo">{{ $ricetta['description']}}</p>
                                </div>
                                <div class="card-footer py-1 d-flex justify-content-center gap-5 border-0 bg-transparent">
                                    <p class=" corsivo"><i class="fa-solid fa-kitchen-set me-2 champange"></i>{{ $ricetta['difficulty']}}</p>
                                    <p class=" corsivo"><i class="fa-solid fa-clock-rotate-left me-2 champange"></i>{{ $ricetta['timeToPrep']}}</p>
                                    <p class=" corsivo"><i class="fa-solid fa-utensils me-2 champange"></i>{{ $ricetta['type']}}</p>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="{{ route('dettaglio', ['id'=>$ricetta['id']]) }}" class="text-center text-black text-decoration-none robo">Leggi tutto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach



                <!-- @dd($ricette) -->
            </div>
        </section>


    </main>
    
    <script src="https://kit.fontawesome.com/018c0fd7b3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>