<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The official website for the Combat Experts Halo clan">
    <meta name="author" content="Combat Experts Clan">
    <title>=CE= Combat Experts</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="canonical" href="https://www.combatexpertsclan.com/">

    <!--
        Welcome!  Submit a pull request for our website at our Github page located
        at https://github.com/combat-experts-clan/combatexpertsclan.com
    -->
</head>

<body>
    <div id="application" class="container">

        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="/"><img width="250"
                    src="{{ asset('images/home/site_logo.png') }}"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/charter">Charter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recruiting">Recruiting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members">Members</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav> <!-- /Navigation Bar -->

        <!-- Main wrapper -->
        <main role="main" id="application">
            <router-view></router-view>
        </main>

        <!-- Footer -->
        <footer>
            <cookie-law theme="royal"></cookie-law>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
