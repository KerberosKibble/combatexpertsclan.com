<template>
    <div class="container text-light">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="row">
            <div class="jumbotron bg-transparent text-center">
                <div class="col-md-12">
                    <h1>Strength, determination, merciless, forever</h1>

                    <p class="mt-4">We are all here because we have an addiction to the greatest game ever created.
                        Like
                        you,
                        we want to be part of an international group of individuals who share this interest.</p>
                </div>
            </div>
        </div>
        <!-- End jumbotron -->

        <!-- Homepage flavor cards for displaying information about the clan -->
        <div class="row">
            <div class="card mb-5 p-3 bg-dark">
                <div class="row no-gutters">
                    <div class="col-md-4 text-center align-bottom">
                        <img class="rounded-circle align-bottom"
                            src="images/home/warthog_square.jpg"
                            width="50%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card-title">
                                <h1>Our Legacy</h1>
                            </div>
                            <div class="card-text">Our clan was formed in the fall of 2003. Lorem, ipsum dolor sit
                                amet
                                consectetur adipisicing elit. Laudantium modi
                                non tempore alias sed, dignissimos mollitia. Animi, eveniet quod quibusdam velit
                                maiores
                                porro aspernatur, ipsa praesentium molestiae ducimus labore sed?</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card mb-5 p-3 bg-dark">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card-title">
                                <h1>Community Spirit</h1>
                            </div>
                            <div class="card-text">
                                <p>Our clan consists of <span class="text-primary">100</span> members and <span
                                        class="text-primary">10</span> servers. Lorem, ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Laudantium modi
                                    non tempore alias sed, dignissimos mollitia. Animi, eveniet quod quibusdam velit
                                    maiores
                                    porro aspernatur, ipsa praesentium molestiae ducimus labore sed?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center align-bottom">
                        <img class="rounded-circle align-bottom"
                            src="images/home/343-guilty-spark.jpg"
                            width="50%">
                    </div>
                </div>
            </div>
        </div>
        <!-- End flavor cards -->

    </div>
</template>

<script>
    import TwitterWidget from '../components/TwitterFeedComponent';

    export default {
        components: {
            'twitter-widget': TwitterWidget
        }
    }

</script>
