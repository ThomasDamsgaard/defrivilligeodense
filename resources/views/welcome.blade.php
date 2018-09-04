<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>De Frivillige Odense</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Styles -->
  <style>
  html, body {
    color: #444;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .title {
    font-size: 44px;
  }

  .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  .m-b-md {
    margin-bottom: 30px;
  }
  </style>
</head>
<body>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Hjem</a>
      @else
      <a href="{{ route('login') }}">Administrator Login</a>
      @endauth
    </div>
    @endif

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="{{ asset('storage/images/1.png') }}"
          alt="logo" class="img-fluid mb-3" width="25%" height="25%">
        </div>
        <div class="col-2">

        </div>
        <div class="col-md-8 text-center">
          <div class="title m-b-md">
            Foreningen De Frivillige Odense
          </div>
          <p class="font-weight-normal">
            Vores opgave er at samle frivillige til koncerter og events som
            er i Odense og på Fyn.
          </p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info mb-3"
          data-toggle="modal" data-target="#Modal">
          Læs om os her
        </button>
        <p>
          Har dette fanget din interesse, så klik videre til vores
          facebookside via linket i bunden af siden. <br>Vi vil herefter
          godkende dig, så du får muligheden for at være en del af vores team.
          <br>Står du og mangler frivillige til netop dit næste arrangement,
          <br>så kan du kontakte os og høre nærmere på
          <a href="mailto:dfo.info.odense@gmail.com">dfo.info.odense@gmail.com</a>.
          <br>Vi er også meget interesseret i andre foreninger, der har lyst
          til at tjene penge til klubkassen.
        </p>
        <a href="https://www.facebook.com/groups/1051004544947659/" target="blank">
          Facebook side
        </a>


      </div>
      <div class="col-2">

      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Foreningsbeskrivelse</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><u>Start</u><br>
              Vi har været i gang siden sommeren 2016 og herefter er det
              gået stærkt.
            </p>

            <p><u>Faste samarbejdspartnere</u><br>
              Vi har forskellige faste samarbejdspartnere som
              f.eks. OS&E, LiveCulture og Grøn Koncert, dertil kommer der
              diverse weekend og endags arrangementer, samt andre spændende
              ting. Vi er tilstede på Nature Energy Park hver gang OB spiller
              hjemmekampe. Her har vi en bod, hvor der trofast møder 20-25
              mand hver gang.
            </p>

            <p><u>Større arrangementer</u><br>
              Vi har til større arrangementer et fast og godt samarbejde med
              andre foreninger, der arbejder på lige fod med os, da vi
              altid ser os som et samlet hold, når vi er ude, og disse
              foreninger afregnes også efter dette.
            </p>

            <p><u>Om os</u><br>
              Vi har en god og fast flok af frivillige, der altid møder op
              til arrangementerne med godt humør og gå på mod, og som tager
              tingene som de kommer. Noget vi ofte får meget ros for.
              Vi mener selv, at vi har Danmarks bedste frivillige, men der
              er altid plads til nye ansigter.
              Vi bruger nogle af de tjente penge til at støtte de Danske
              Hospitalsklove. Vi deltager bl.a. aktivt i Højby Klovneløb.
            </p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Luk</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</body>
</html>
