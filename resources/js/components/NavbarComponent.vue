<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="/">
                <img src="images/home/site_logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/charter">Charter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recruiting">Recruiting</a>
                    </li>
                </ul>

                <!--
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
                -->
            </div>
        </nav>
    </div>
</template>

<script>
    export default {}

</script>

<style lang="scss" scoped>
    @import '~bootstrap/scss/bootstrap';

    @include media-breakpoint-up(xs) {
        .navbar-brand img {
            width: 192px;
        }

    }

    @include media-breakpoint-up(lg) {
        .navbar-brand img {
            width: 386px;
        }

    }

</style>
