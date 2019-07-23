<!doctype html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="t-datepicker-master/public/theme/css/t-datepicker.min.css">
        <link rel="stylesheet" href="t-datepicker-master/public/theme/css/themes/t-datepicker-blue.css">
        <script src="t-datepicker-master/public/theme/js/t-datepicker.min.js"></script>
    </head>

    <body>
    <div class="t-datepicker">
        <div class="t-check-in"></div>
        <div class="t-check-out"></div>
    </div>
        <script>
            $(document).ready(function(){
                $('.t-datepicker').tDatePicker({
                    // options here
                });
            });
        </script>

    </body>
</html>