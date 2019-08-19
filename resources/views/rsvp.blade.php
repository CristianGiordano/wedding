@extends('master')

@section('body.classes', 'no-slider-page')

@section('vuejs')
    <script>
        Vue.config.debug = true;
        Vue.config.devtools = true

        new Vue({
            el: 'body',
            data: {
                selectedRsvp: '',
                noResultsFound: false,
                stage: 'searching',
                query: '',
                searchResults: [],
                rsvp: {
                    id: '',
                    guest_names: '',
                    surname: '',
                    is_attending: '',
                    preference_arrival_drink: '',
                    preference_table_drink: '',
                    has_dietry_requirements: '',
                    dietry_requirements: '',
                    comments: '',
                    guests: []
                },
            },

            methods: {
                searchForInvite: function () {

                    if (this.query.length < 3) {
                        return;
                    }

                    $('#js-search-invite').button('loading');

                    this.noResultsFound = false;
                    this.searchResults = [];

                    this.$http.get(this.urlForSearching)
                            .then(function (response) {
                                $('#js-search-invite').button('reset');

                                if (response.data.length === 0) {
                                    return this.noResultsFound = true;
                                }

                                if (response.data.length > 1) {
                                    return this.searchResults = response.data;
                                }

                                this.setRsvp(response.data[0]);

//                                this.rsvp.id = response.data[0].id;
//                                this.rsvp.guest_names = response.data[0].guest_names;
//                                this.rsvp.surname = response.data[0].surname;
//                                this.rsvp.is_attending = response.data[0].is_attending;
//                                this.rsvp.preference_arrival_drink = response.data[0].preference_arrival_drink;
//                                this.rsvp.preference_table_drink = response.data[0].preference_table_drink;
//                                this.rsvp.has_dietry_requirements = response.data[0].has_dietry_requirements;
//                                this.rsvp.dietry_requirements = response.data[0].dietry_requirements;
//                                this.rsvp.comments = response.data[0].comments;
//                                this.rsvp.guests = response.data[0].guests;
//                                this.stage = 'responding';
                            }, function (response) {
                                $('#js-search-invite').button('reset');
                            });
                },

                sendRsvp: function () {
                    this.$http.post(this.urlForSendingRsvp, this.rsvp)
                            .then(function (response) {
                                this.stage = 'completed';
                            });
                },

                setRsvp: function(rsvp) {
                    this.rsvp = rsvp;
                    this.stage = 'responding';
                },

                hasSearchResults: function() {
                    return this.searchResults.length > 0;
                },

                handleSelectRsvp: function() {
                    // Find rsvp from results
                    var selectedRsvpId = this.selectedRsvp;
                    var filteredResult = this.searchResults.filter(function(result) {
                        return result.id == selectedRsvpId;
                    })


                    this.setRsvp(filteredResult[0]);
                    this.searchResults = [];
                    this.selectedRsvp = '';
                }
            },

            computed: {
                urlForSearching: function () {
                    return '/rsvp/' + this.query;
                },
                urlForSendingRsvp: function () {
                    return '/rsvp/' + this.rsvp.id;
                },
                isSearching: function () {
                    return this.stage === 'searching';
                },
                isResponding: function () {
                    return this.stage === 'responding';
                },
                isComplete: function () {
                    return this.stage === 'completed';
                }
            }
        })
    </script>
@endsection

@section('content')

    <div class="container">

        @include('rsvp.intro')

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div v-show="isComplete" class="alert alert-success">
                    <p v-if="rsvp.is_attending">Thanks for letting us know! See you there! <3</p>
                    <p v-else>Sad we won't get to see you. Let's catch up soon.</p>
                </div>

                <form v-show="! isComplete" class="rsvp-wrapper">

                    <div v-show="isSearching">
                        <div v-show="noResultsFound" class="alert alert-danger">
                            We couldn't find an invite. Try checking the name (we might have spelt it wrong!).
                        </div>

                        <label>Enter your surname&hellip;</label>
                        <input type="text" class="form-control" v-model="query" placeholder="Enter your surname" v-on:keypress.enter.prevent="searchForInvite()">
                        <br>
                        <p class="text-center" style="margin-bottom: 0;">
                            <button type="button" id="js-search-invite" class="btn btn-primary" v-on:click.prevent="searchForInvite()">Find invitation</button>
                        </p>

                        <p v-if="hasSearchResults()">
                            <br>
                            <span style="color: #E53A3A">Looks like we found more than we expected, pick your RSVP below:</span>

                            <select class="form-control" v-on:change="handleSelectRsvp()" v-model="selectedRsvp">
                                <option>Select RSVP</option>
                                <option v-for="result in searchResults" :key="result.id" :value="result.id">
                                    @{{ result.recipients }}
                                </option>
                            </select>
                        </p>
                    </div>

                    <div v-show="isResponding">

                        <h2>Hey @{{ rsvp.recipients }}</h2>

                        <div class="form-group">
                            <label>Are you able to make the day?</label>
                            <div class="ajax-input ajax-radio">
                                <div>
                                    <label class="btn btn-primary no-icon" :class="{'active' : rsvp.is_attending }">
                                        <input type="radio" name="is_attending" id="accept" v-model="rsvp.is_attending" :value="true"> Free booze? Yes, please.
                                    </label>
                                    <label class="btn btn-primary no-icon" :class="{'active' : rsvp.is_attending === false }">
                                        <input type="radio" name="is_attending" id="decline" v-model="rsvp.is_attending" :value="false"> In a nutsell...I'm lame.
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div v-show="rsvp.is_attending">

                            <div class="form-group">
                                <label>Please confirm who is able to make it:</label>

                                <div class="ajax-input ajax-checkbox">
                                    <div class="checkbox" v-for="guest in rsvp.guests">
                                        <label class="btn btn-primary custom-option-icon" :class="{'active active-icon': guest.is_attending }">
                                            <input type="checkbox" v-model="guest.is_attending"> @{{ guest.name }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Do you or any guests have any special dietry requirements?</label>
                                <div class="ajax-input ajax-radio">
                                    <div>
                                        <label class="btn btn-primary no-icon" :class="{'active': rsvp.has_dietry_requirements === false }">
                                            <input type="radio" name="has_dietry_requirements" id="accept" v-model="rsvp.has_dietry_requirements" :value="false"> No
                                        </label>
                                        <label class="btn btn-primary no-icon" :class="{'active': rsvp.has_dietry_requirements }">
                                            <input type="radio" name="has_dietry_requirements" id="decline" v-model="rsvp.has_dietry_requirements" :value="true"> Yes
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" v-show="rsvp.has_dietry_requirements">
                                <label>Enter your requirements, we'll do our best to sort it.</label>
                                <textarea class="form-control" v-model="rsvp.dietry_requirements" style="min-height: 120px"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Any other comments or information we need to know?</label>
                                <textarea class="form-control" v-model="rsvp.comments" style="min-height: 120px"></textarea>
                            </div>

                        </div>

                        <div class="form-group text-center">
                            <button type="button" class="btn btn-primary" v-on:click.prevent="sendRsvp">Send RSVP</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>


    </div>

    {{--Questions:--}}

    {{--- Surname [Find invite]--}}

    {{--- Are you able to make the day? (Yes! Sadly no)--}}
    {{---- No: "Feel free to come to the evening though!"--}}

    {{---- Yes:--}}
    {{--- Pimms / Prosecco / Soft--}}
    {{--- Red / White / Soft--}}
    {{--- Special dietry requirement? (Yes|No)--}}
    {{--- Dietry requirements (Textarea)--}}
    {{--- General Comments--}}

    {{--__ HIDDEN __--}}
    {{--- Guest Name (Gavin, Emma & Isla Cumber / Drew, Ryte & Bella Harding)--}}
    {{--- Guest Surname (i.e. Cumber / Harding)--}}
    {{--- Guest Day Count--}}


@endsection