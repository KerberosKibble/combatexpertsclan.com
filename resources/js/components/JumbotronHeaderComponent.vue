<template>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="row">
        <div class="jumbotron text-center w-100 bg-transparent text-light">
            <div class="col-md-12 ">
                <h1>{{ text }}</h1>
            </div>
        </div>
    </div> <!-- End jumbotron -->
</template>

<style lang="scss" scoped>
    @import '~bootstrap/scss/bootstrap';

    @include media-breakpoint-up(xs) {
        .jumbotron h1 {
            font-size: 2rem;
        }
    }

    @include media-breakpoint-up(lg) {
        .jumbotron h1 {
            font-size: 4.5rem;
        }
    }

</style>

<script>
    export default {
        props: {
            text: String
        }
    }

</script>
