<!doctype html>
<html lang="en">
  <head>
    <title>Resume</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- Custom Css --}}
    <link rel="stylesheet" href="style.css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">Check the form below for errors.</div>
        @endif
        <h1>Nsongurua Johnson</h1>
        <h2>Backend Developer</h2>
        <p>Backend developer proficient with PHP/Laravel and node.js . <br>
          Involved in the development,testing, and deployment of software solutions for companies.
        </p>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <a class="navbar-brand" href="#">Contacts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#"><i class="fa fa-envelope icon pr-2" aria-hidden="true"></i>nsonguruajohnson@gmail.com</a>
                <a class="nav-link" href="#"><i class="fa fa-phone icon pr-2" aria-hidden="true"></i>09027832208</a>
                <a class="nav-link" href="#"><i class="fa fa-location-arrow icon pr-2" aria-hidden="true"></i>Nigeria</a>
                <a class="nav-link" href="#"><i class="fa fa-twitter icon pr-2" aria-hidden="true">nsonguruaj</i></a>
                <a class="nav-link" href="#"><i class="fa fa-linkedin icon pr-2" aria-hidden="true"></i>www.linkedin.com/in/nsongurua-johnson</a>

              </div>
            </div>
        </nav>
        <h2>Skills</h2>
        <div class="row">
            <div class="col-md col-sm">
                <p>git</p>
                <p>github</p>
                <p>Research</p>
            </div>
            <div class="col-md col-sm">
                <p>html</p>
                <p>CSS</p>
                <p>PHP/Laravel</p>
            </div>
            <div class="col-md col-sm">
                <p>Slack</p>
                <p>Trello</p>
                <p>Video Conferencing</p>
            </div>
            <div class="col-md col-sm">
                <p>Decision making</p>
                <p>Team work</p>
                <p>Collaboration</p>
            </div>
        </div>
        <h2>Work Experience</h2>
        <div class="">
            <div>
                <h3 class="mb-3">Backend Developer</h3>
                <p>Yebox Technologies</p>
                <h6 class="text-muted">06/2022 - Present</h6>
            </div>
            <div>
                <p>Designed database architecture for products.</p>
                <p>Wrote server-side logic and APIs for products.</p>
            </div>
        </div>
        <h2>EDUCATION</h2>
        <div class="">
            <div>
                <p>B.Eng in Electrical/Electronics Engineering</p>
            </div>
            <div>
                <p>University of Uyo</p>
            </div>
            <div>
                <p class="text-muted">2014 - 2021</p>
            </div>
        </div>

        <h2 class="text-center">Contact Me</h2>

        <form style="width: 50rem; margin: 0 auto;" action="/contact-me" method="POST">
            @csrf
            <div class="">
                @if(session('msg'))
                <div style="width: 50rem; margin: 0 auto" class="text-center p-3 mb-2 bg-success text-white">
                    {{ session('msg') }}
                </div>
                @endif
                <div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') border border-danger @enderror" id="name"  name="name"
                        value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control @error('email') border border-danger @enderror" id="email"  name="email"
                        value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        {{-- <input type="text" class="form-control @error('info') border border-danger @enderror" id="info" name="info"
                        value="{{old('info')}}"> --}}
                        <textarea name="message" id="" cols="85" rows="10"> {{old('message')}}</textarea>
                        @error('message')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
