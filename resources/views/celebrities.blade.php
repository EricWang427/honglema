@extends('layouts.app')

@section('content')


<!--@if (count($celebrities) > 0)-->
<!--        <div class="panel panel-default">-->
<!--            <div class="panel-heading">-->
<!--                红人列表-->
<!--            </div>-->
<!---->
<!--            <div class="panel-body">-->
<!--                <table class="table table-striped task-table">-->
<!---->
<!--                    <thead>-->
<!--                    <th>id</th>-->
<!--                        <th>昵称</th>-->
<!--                        <th>图片</th>-->
<!--                    </thead>-->
<!---->
<!--                    <tbody>-->
<!--                        @foreach ($celebrities as $celebrity)-->
<!--                            <tr>-->
<!---->
<!--                                <td>-->
<!--                                    <div>{{ $celebrity->id }}</div>-->
<!--                                </td>-->
<!--                                <td class="table-text">-->
<!--                                    <div>{{ $celebrity->nickname }}</div>-->
<!--                                </td>-->
<!--                                <td class="table-text">-->
<!--                                        @foreach ( $celebrity->pictures as $picture)-->
<!--                                            <div>{{ $picture->url }}</div>-->
<!--                                        @endforeach-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                        @endforeach-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->

<!--        {!! $celebrities->links() !!}-->
<!--    @endif-->

    <!-- TODO: Current Tasks -->
<!DOCTYPE HTML>
<html  lang="zh-CN">
<head>
    <title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/images/fav-icon.png')}}" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}"/>
        <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        var $ = jQuery.noConflict();
        $(function() {
            $('#activator').click(function(){
                $('#box').animate({'top':'0px'},500);
            });
            $('#boxclose').click(function(){
                $('#box').animate({'top':'-700px'},500);
            });
        });
        $(document).ready(function(){
            //Hide (Collapse) the toggle containers on load
            $(".toggle_container").hide();
            //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
            $(".trigger").click(function(){
                $(this).toggleClass("active").next().slideToggle("slow");
                return false; //Prevent the browser jump to the link anchor
            });

        });
    </script>
</head>
<body>
<!---start-wrap---->
<!---start-header---->
<!-- <div class="header">
    <div class="wrap">
    <div class="logo">
        <a href="index.html"><img src="images/logo.png" title="pinbal" /></a>
    </div>
    <div class="clear"> </div>
    </div>
</div> -->
<!---//End-header---->
<!---start-content---->
<div class="content">
    <div class="wrap">
        <div id="main" role="main">
            <ul id="tiles">
                <!-- These are our grid blocks -->
                <li onclick="location.href='single-page.html';">
                    <img src="{{URL::asset('assets/images/img1.jpg')}}" width="200" height="200">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                        <!-- <div class="post-info-rate-share">
                            <div class="rateit">
                                <span> </span>
                            </div>
                            <div class="post-share">
                                <span> </span>
                            </div>
                            <div class="clear"> </div>
                        </div> -->
                    </div>
                </li>
                <li onclick="location.href='single-page.html';">
                    <img src="{{URL::asset('assets/images/img2.jpg')}}" width="200" height="299">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                    </div>
                </li>
                <li onclick="location.href='single-page.html';">
                    <img src="{{URL::asset('assets/images/img3.jpg')}}" width="200" height="214">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                    </div>
                </li>
                <li onclick="location.href='single-page.html';">
                    <img src="{{URL::asset('assets/images/img4.jpg')}}" width="200" height="333">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                    </div>
                </li>
                <li onclick="location.href='single-page.html';">
                    <img src="{{URL::asset('assets/images/img4.jpg')}}" width="200" height="333">
                    <div class="post-info">
                        <div class="post-basic-info">
                            <h3><a href="#">Animation films</a></h3>
                            <span><a href="#"><label> </label>Movies</a></span>
                            <p>Lorem Ipsum is simply dummy text of the printing & typesetting industry.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!---//End-content---->
<!----wookmark-scripts---->
<script src="{{URL::asset('assets/js/jquery.imagesloaded.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.wookmark.js')}}"></script>
<script type="text/javascript">
    (function ($){
        var $tiles = $('#tiles'),
            $handler = $('li', $tiles),
            $main = $('#main'),
            $window = $(window),
            $document = $(document),
            options = {
                autoResize: true, // This will auto-update the layout when the browser window is resized.
                container: $main, // Optional, used for some extra CSS styling
                offset: 20, // Optional, the distance between grid items
                itemWidth:280 // Optional, the width of a grid item
            };
        /**
         * Reinitializes the wookmark handler after all images have loaded
         */
        function applyLayout() {
            $tiles.imagesLoaded(function() {
                // Destroy the old handler
                if ($handler.wookmarkInstance) {
                    $handler.wookmarkInstance.clear();
                }

                // Create a new layout handler.
                $handler = $('li', $tiles);
                $handler.wookmark(options);
            });
        }
        /**
         * When scrolled all the way to the bottom, add more tiles
         */
        function onScroll() {
            // Check if we're within 100 pixels of the bottom edge of the broser window.
            var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
                closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);

            if (closeToBottom) {
                // Get the first then items from the grid, clone them, and add them to the bottom of the grid
                var $items = $('li', $tiles),
                    $firstTen = $items.slice(0, 10);
                $tiles.append($firstTen.clone());

                applyLayout();
            }
        };

        applyLayout();

        $window.bind('scroll.wookmark', onScroll);
    })(jQuery);
</script>
<!-- <div class="footer">
    <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
</div> -->
</body>
</html>
@endsection