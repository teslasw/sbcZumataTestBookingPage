
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>SBC Travel Booking</title>
    <!-- Bootstrap core CSS, jQuery, Popper, Boostrap Core JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Datepicker CSS Datepicker JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js" crossorigin="anonymous"></script>

    <!-- fontawesome  css -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <script src="fontawesome/js/all.js"></script>

    <!-- bootstrap autocomplete -->
    <script src="bootstrap-autocomplete.js"></script>
<!--    <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.2.1/dist/latest/bootstrap-autocomplete.min.js"></script>-->

    <link rel="stylesheet" href="t-datepicker-master/public/theme/css/t-datepicker.min.css">
    <link rel="stylesheet" href="t-datepicker-master/public/theme/css/themes/t-datepicker-blue.css">
    <script src="t-datepicker-master/public/theme/js/t-datepicker.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>
<!-- Header -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">SBC Travel Booking</h5>
    <nav class="my-2 my-md-0 mr-md-3">
<!--        <a class="p-2 text-dark" href="#">Features</a>-->
<!--        <a class="p-2 text-dark" href="#">Enterprise</a>-->
<!--        <a class="p-2 text-dark" href="#">Support</a>-->
        <a class="p-2 text-dark" href="#">Login</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<!--Title-->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Find your Holiday Stay </i></h1>
    <p class="lead"></p>
</div>

<!--Body & Footer-->

<div class="container">

    <form id="travelDetailsForm" method="get">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="destination" class="col-form-label">Destination</label>
                <div class="input-group">
                    <input id="destination" type="text" class="form-control basicAutocomplete" autocomplete="off" placeholder="Destination">
                    <div class="bootstrap-autocomplete dropdown-menu" style="top: 38px; left: 5px; width: 830px;">
                    </div>
                </div>


            </div>
            <div class="form-group col-md-4">
                <label for="dates" class="col-form-label">Check In and Out.</label>
                <div class="input-group">
<!--                    <input id="fromDate" type="text" class="form-control" placeholder="Check In Date" data-provide="datepicker" data-date-format="yyyy-mm-dd">-->
                        <div id="dates" class="t-datepicker">
                            <div class="t-check-in"></div>
                            <div class="t-check-out"></div>
                        </div>
                </div>
            </div>
<!--            <div class="form-group col-md-2">-->
<!--                <label for="toDate" class="col-form-label">Check Out Date</label>-->
<!--                <div class="input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text"><i class="far fa-calendar-alt "></i></span>-->
<!--                    </div>-->
<!--                    <input id="toDate" type="text" class="form-control" placeholder="Check Out Date" data-provide="datepicker" data-date-format="yyyy-mm-dd">-->
<!--                    <div class="t-datepicker">-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="form-group col-md-1">
                <label for="adults" class="col-form-label">Adults</label>
                <div class="input-group">
                    <input id="adults" type="text" class="form-control" placeholder="Adults" value="2">
                </div>
            </div>
            <div class="form-group col-md-1">
                <label for="kids" class="col-form-label">Children</label>
                <div class="input-group">
                    <input id="kids" type="text" class="form-control" placeholder="Children" value="0">
                </div>
            </div>
            <div class="form-group col-md-1">
                <label for="rooms" class="col-form-label">Rooms</label>
                <div class="input-group">
                    <input id="rooms" type="text" class="form-control" placeholder="Rooms" value="1">
                </div>
            </div>
            <div class="form-group col-md-1">
                <label for="rooms" class="col-form-label">&nbsp</label>
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    <div>
        <input type="hidden" id="zumataRegionId">
        <input type="hidden" id="zumataSearchId">
<!--        <input type="hidden" id="">-->
    </div>




    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        let zumataRedirectBaseUrl = 'https://staging-lv.globaltripper.com/search/';

        $('#destination').autoComplete({
            resolver: 'custom',
            formatResult: function (item) {
                return item.locationQuery;
                // {
                    // value: item.id,
                    // text: "[" + item.id + "] " + item.text,
                    // html: [
                    //     $('<img>').attr('src', item.icon).css("height", 18), ' ',
                    //     item.text
                    // ]
                // };
            },
            events: {
                search: function (qry, callback) {
                    let zumataUrl = 'https://lv2.globaltripper.com/web/autosuggest';
                    let authToken = 'app_TESTeec3307e143e768c1983';
                    let data = {
                        q: qry
                    };
                    let settings = {
                        url : zumataUrl,
                        headers : {
                            'lv-app-access-key' : authToken
                        },
                        method : 'GET',
                        data : data,
                    };
                    $.ajax(settings)
                        .done(function (res) {
                            console.log("Results from Zumata: %o", res);
                            let destinations = [];
                            res.outlets.results.forEach((item) => {
                                let dest = {
                                    searchId: res.meta.reqId,
                                    regionId: item.data.region_id,
                                    locationQuery: item.term
                                };
                                destinations.push(dest);
                            });
                            callback(destinations);
                        })
                        .fail((xhr, status, error) => {
                            console.log("Call to Zumata auto suggest failed. Code: %o. Error Msg: %o", status, error);
                        });
                }
            }
        });

        //when a new value is seelcted.
        $('#destination').on('change', function (e) {
        });

        //triggered when the value is selected from the drop down list
        $('#destination').on('autocomplete.select', function (evt, item) {
            $('#zumataRegionId').val(item.regionId);
            $('#zumataSearchId').val(item.searchId);
        });

        //triggered when the value entered isn't in the list.
        $('#destination').on('autocomplete.freevalue', function (evt, value) {

        });

        $('#travelDetailsForm').submit((e) => {
            let params = {
                locationQuery : $('#destination').val(),
                regionId : $('#zumataRegionId').val(),
                checkInDate : $('[name="t-start"]').val() ,
                checkOutDate : $('[name="t-end"]').val(),
                roomCount : $('#rooms').val(),
                adultCount : $('#adults').val(),
                children : $('#kids').val(),
                currency : 'AUD',
                searchId : $('#zumataSearchId').val(),
            };
            console.log("Params: %o", params);
            let zumataFullUrl = zumataRedirectBaseUrl+encodeURIComponent($('#destination').val())+'?'+$.param(params);
            console.log("Full Submit Url: %s", zumataFullUrl);
            window.location.assign(zumataFullUrl);
            e.preventDefault();
        })

        $('.t-datepicker').tDatePicker({
            formatDate: 'yyyy-mm-dd'
        });
    });
</script>
</body>
</html>
