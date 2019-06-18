<template>
    <div class="container">

        <jumbotron-header text="Strength, determination, merciless, forever" />

        <!-- Information cards -->
        <div v-for="(card, index) in cards" v-bind:key="card.id" class="row text-light">
            <div class="card mb-5 p-3 bg-dark">
                <div class="row no-gutters">
                    <div v-if="(index % 2) === 0" class="col-md-4 text-center">
                        <img class="rounded-circle align-bottom" :src="card.image" alt="Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card-title">
                                <h1><fa-icon :icon="card.icon" />&nbsp;{{card.title}}</h1>
                            </div>
                            <p v-html="card.body" class="card-text" />
                        </div>
                    </div>
                    <div v-if="(index % 2) === 1" class="col-md-4 text-center">
                        <img class="rounded-circle align-bottom" :src="card.image" alt="Image">
                    </div>
                </div>
            </div>
        </div> <!-- End information cards -->

    </div>
</template>

<script>
 
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faHistory, faUsers } from '@fortawesome/free-solid-svg-icons'

    library.add(faHistory, faUsers);

    import JumbotronHeaderComponent from '../components/JumbotronHeaderComponent'

    export default {

        data: function () {
            return {
                cards: [{
                        id: 1,
                        title: 'Our Legacy',
                        body: 'We are all here because we have an addiction to the greatest game ever created.  Like you, we want to be part of an international group of individuals who share this interest.  Our clan was formed in the fall of 2003.',
                        image: 'images/home/warthog_square.jpg',
                        icon: 'history'
                    },
                    {
                        id: 2,
                        title: 'Community Spirit',
                        body: 'Our clan consists of <span class="text-primary">100</span> members and <span class="text-primary">10</span> servers.',
                        image: 'images/home/343-guilty-spark.jpg',
                        icon: 'users'
                    }
                ]
            }
        },

        components: {
            'jumbotron-header': JumbotronHeaderComponent,
            'fa-icon': FontAwesomeIcon
        }
    }

</script>

<style lang="scss" scoped>
    .card {
        width: 100%;
    }

    @import '~bootstrap/scss/bootstrap';

    @include media-breakpoint-up(xs) {
        .rounded-circle {
            width: 25%;
        }

        .card-title {
            text-align: center;
            margin: auto;
        }
    }

    @include media-breakpoint-up(lg) {
        .rounded-circle {
            width: 50%;
        }

        .card-title {
            text-align: left;
        }
    }

</style>
