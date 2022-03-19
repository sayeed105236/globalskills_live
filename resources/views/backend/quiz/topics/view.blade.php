<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('frontend.partials.styles')
    <title>Document</title>
</head>
<body>
   
    <style>
        .fixme {
            position: fixed;
        z-index: 3;
        width: 100%;
        left: 0;
        top: 0;
        }

    </style>
    <div class="container-fluid" style="margin-top: 50px;">
        @if ($topic)
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row card">
                <div class="col-md-12">
                    <div class="content"></div>
                    <div class="fixme" style="background-color:black;">
                        <div class="container d-flex" style="font-size: 22px; font-weight:700;color: #fff;">
                            <div class="mr-auto p-2">{{ $topic->title }}</div>
                           <div class="time p-2" id="navbar" style="color:#BD1D2D">Time Left :<span id="timer"></span></div>
                          
                        </div>
                        
                   
                    </div>
                     <div class="clearfix"></div>
                     <div class="container">
                    <form action="{{ route('results.store') }}" method="post" id="form">
                        @csrf
                        <div>
                            <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                            @foreach ($topic->questions as $question)
                                <div class="border border-5 border-secondary mt-2">
                                    <div style="font-size: 24px; font-weight:700; background-color:#163B4A;">
                                        <div style="margin-left: 15px; color:#fff;">
                                        {{$loop->index+1}}.&nbsp; {{ $question->question_text }}
                                        </div>
                                    </div>
                                    <input type="hidden" name="question_id[]" value="{{ $question->id }}">
                                    @foreach ($question->options as $option)
                                        <div style="margin-left:45px; font-size:20px;">
                                            <input type="checkbox" name="option[{{ $question->id }}][{{ $option->id }}]"
                                                value="{{ $option->correct }}">
                                            {{ $option->option }}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div>
                        <div class="mb-4 mt-2" >
                        <a href="{{ route('results.show', $topic->id) }}"><input type="submit" value="Submit"
                                class="btn btn-success" style="padding: 10px 40px 10px 40px;"></a>
                                </div>

                    </form>
</div>

                </div>

            </div>
        @else
            <h1>No Topic</h1>
        @endif


    </div>


    <?php
    $con = mysqli_connect('localhost', 'globals1_sayeed', '#Q=ZcSn.?z[,', 'globals1_db1');

    // Check connection
    if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    }
    $id = $topic->id;
    $fetchtime = "SELECT `timer` FROM `topics` WHERE id = '$id'";
    $fetched = mysqli_query($con, $fetchtime);
    $time = mysqli_fetch_array($fetched, MYSQLI_ASSOC);
    $settime = $time['timer'];
    ?>



    <script>
        window.onload = function() {
            document.getElementById('myDIV').style.display = 'none';
        };
    </script>

    <script type="text/javascript">
        startTimer();
        document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
        //03 + ":" + 00 ;

        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if (s == 59) {
                m = m - 1
            }
            if (m == 0 && s == 0) {
                document.getElementById("form").submit();
            }
            document.getElementById('timer').innerHTML =
                m + ":" + s;
            setTimeout(startTimer, 1000);
        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec
            }; // add zero in front of numbers < 10
            if (sec < 0) {
                sec = "59"
            };
            return sec;
            if (sec == 0 && m == 0) {
                alert('stop it')
            };
        }
    </script>



    <script>
        var fixmeTop = $('.fixme').offset().top;
        $(window).scroll(function() {
            var currentScroll = $(window).scrollTop();
            if (currentScroll >= fixmeTop) {
                $('.fixme').css({
                    position: 'fixed',
                    top: '0',
                    left: '0'
                });
            } else {
                $('.fixme').css({
                    position: 'static'
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @include('frontend.partials.scripts')
    <!-- contact area END -->

</div>


</body>
</html>
