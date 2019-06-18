<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The official website for the Combat Experts Halo clan">
    <meta name="author" content="Combat Experts Clan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>=CE= Combat Experts</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="canonical" href="https://www.combatexpertsclan.com/">

    <!--
        Welcome!  Submit a pull request for our website at our Github page located
        at https://github.com/combat-experts-clan/combatexpertsclan.com
    -->
</head>

<body>
    <div id="application">

        <!-- Navigation bar -->
        <navigation-bar></navigation-bar>
        

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
