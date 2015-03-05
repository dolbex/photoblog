<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=u(e),f=c.length,s=i(a,o,r),p=0;f>p;p++)c[p].apply(s,n);return s}function a(t,e){f[t]=u(t).concat(e)}function u(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:u,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){l.proto="https"===p.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=l.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),u=window,c=u.document,f="addEventListener",s="attachEvent",p=(""+location).split("?")[0],l=e.exports={offset:i(),origin:p,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),u[f]("load",n,!1)):(c[s]("onreadystatechange",r),u[s]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}]},{},["G9z0Bl"]);</script>
        <meta name="description" content="The best Laravel screencasts on the web.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="stripe-key" content="pk_live_42cAcd2OvCDs4hpErd5ZscBT">

        <title>

            The Best Laravel and PHP Screencasts        </title>
        <link rel="alternate" type="application/atom+xml" title="Laracasts" href="https://laracasts.com/feed">

        <link href="https://laracasts.com/css/min.css?v=188" rel="stylesheet">


        <script src="https://use.typekit.net/zjb5wvv.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>

        @include('devise::styles')

            </head>

    <body class="home ">


        <form method="GET" action="https://laracasts.com/search" accept-charset="UTF-8" class="global-search">
    <input autocomplete="off" placeholder="Search..." name="q" type="search">

    <select name="q-where" id="q-where" class="hide">
        <option value="lessons">Lessons</option>
    </select>
</form>
        <script id="flash-template" type="text/template">
            <div class="flash_message alert alert-info">
                <a class="close" data-dismiss="alert" href="index.html#" aria-hidden="true">&times;</a>

                <p>
                    <i class="icon icon-2x icon-bullhorn"></i>
                    <a href="index.html#" class="flash_message__body"></a>
                </p>
            </div>
        </script>


        <div class="page   ">


            <nav class="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.html" class="navbar-brand logo">
                Laracasts
            </a>
        </div> <!-- navbar-header -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="">
                    <a href="https://laracasts.com/lessons" class="navbar-link">
                        <i class="icon-television"></i>
                        Lessons
                    </a>
                </li>

                <li class="">
                    <a href="https://laracasts.com/series" class="navbar-link">
                        <i class="icon-movie-play-1"></i>
                        Series
                    </a>
                </li>

                <li class="">
                    <a href="https://laracasts.com/collections" class="navbar-link">
                        <i class="icon-box-3"></i>
                        Collections
                    </a>
                </li>

                <li id="navbar-link-discussions" class="">
                    <a href="https://laracasts.com/discuss" class="navbar-link">
                        <i class="icon-chat-4"></i>
                        Discussions
                    </a>
                </li>

                            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                        <a href="https://laracasts.com/login?return=https://laracasts.com" class="navbar-link">Log In</a>
                    </li>

                    <li>
                        <a href="https://laracasts.com/join" class="navbar-link btn btn-join">Start Learning</a>
                    </li>
                            </ul>
        </div> <!-- collapse -->
    </div> <!-- container -->
</nav>


<nav class="secondary-nav">
    <div class="container">
        <ul class="zeroed secondary-nav--left">

            <!-- Browse -->
            <li class="dropdown ">
                <a href="https://laracasts.com/index" class="navbar-link dropdown-toggle" data-toggle="dropdown">
                    Browse <b class="caret"></b>
                </a>

                <ul class="dropdown-menu">
                    <li class=""><a href="https://laracasts.com/index">Site Index</a></li>
                    <li><a href="https://laracasts.com/all">Latest Content</a></li>
                </ul>
            </li>


             <!-- Discuss -->
            <li class="dropdown ">
                <a href="https://laracasts.com/discuss" class="navbar-link dropdown-toggle" data-toggle="dropdown">
                    Discuss <b class="caret"></b>
                </a>

                <ul class="dropdown-menu">
                    <li class=""><a href="https://laracasts.com/discuss">Forum</a></li>
                    <li><a href="http://www.laravelpodcast.com/">Laravel Podcast</a></li>
                    <!-- <li class=""><a href="/learn-with-jeffrey">Blog</a></li> -->
                    <li><a href="http://facebook.com/laracasts">Facebook</a></li>
                    <li><a href="http://twitter.com/laracasts">Twitter</a></li>
                </ul>
            </li>


            <!-- Deploy -->
            <li id="navbar-link--deploy">
                <a href="https://forge.laravel.com" class="navbar-link" target="_blank">Deploy</a>
            </li>


            <!-- Work -->
            <li id="navbar-link--work">
                <a class="navbar-link" href="https://larajobs.com?partner=36" target="_blank">Work</a>
            </li>


            <!-- Recommended Reading -->
            <li id="navbar-link--recommended-reading" class="">
                <a class="navbar-link" href="https://laracasts.com/recommended-reading">Recommended Reading</a>
            </li>
        </ul>


        <!-- Search -->
        <ul class="zeroed secondary-nav--right">
            <li>
                <div id="navbar-search-form">
                    <form role="search" action="https://laracasts.com/search" method="GET">
                        <i class="icon-magnifying-glass"></i>
                        <input type="text" id="q" name="q" placeholder="Search Laracasts">

                        <select name="q-where" id="q-where" class="hide">
                            <option value="lessons">Lessons</option>
                            <option value="forum" >Forum</option>
                        </select>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>


<div class="home-banner">
        <h2 class="wow bounceInDown" class="search-toggle" data-devise="theAbsoluteBest, text, Intro Text">
            {!! $page->theAbsoluteBest->text('The Best PHP Screencasts on the Web') !!}
        </h2>

        <h1 id="home-learn-next-choices">
            <a href="https://laracasts.com/lessons">
                It's Like Netflix for Developers
            </a>
        </h1>

        <a href="https://laracasts.com/join" class="btn btn-join">
            Start Learning Now
        </a>

                    <footer>
                <a href="https://laracasts.com/login">Already a member? Sign in.</a>
            </footer>
        </div>


<!-- FEATURED LESSONS -->
<div class="piece">
    <div class="container wrap">
        <h2 class="section-heading">The most concise screencasts for the working developer, updated daily.</h2>

        <span class="section-heading-divider"></span>

        <div class="row lesson-set lessons__row">
                            <article class="col-md-4 lesson-block lesson-block-series lesson-20 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/build-your-first-app-in-laravel-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/build-your-first-app-in-laravel-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/build-your-first-app-in-laravel-tn.jpg); background-size: cover;">

                    <span class="lesson-block-status lesson-block-status__new label">
                Updated!
            </span>


        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-letter-5"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>intermediate</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>13</span></li>
                            </ul> -->

<!--                             <span class="label label-primary lesson-block-label-updated">Updated!</span>
             -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            intermediate
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/build-your-first-app-in-laravel" title="Build Your First App">Build Your First App</a>
                    </h3>

        <small class="lesson-block-length">
            104:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Mar. 2nd 2015
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>Made your way through <a href="https://laracasts.com/series/laravel-5-fundamentals">Laravel 5 Fundamentals</a>, and now feel ready to take the next step? Let's build our<a href="https://laracasts.com/series/build-your-first-app-in-laravel">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-19 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://s3.amazonaws.com/laracasts/images/video-thumbnails/laravel-5-fundamentals-series-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://s3.amazonaws.com/laracasts/images/video-thumbnails/laravel-5-fundamentals-series-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://s3.amazonaws.com/laracasts/images/video-thumbnails/laravel-5-fundamentals-series-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-bookmark-1"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>27</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/laravel-5-fundamentals" title="Laravel 5 Fundamentals">Laravel 5 Fundamentals</a>
                    </h3>

        <small class="lesson-block-length">
            336:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Feb. 12th 2015
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>Hi, I'm Jeffrey. Nice to meet you. So you're new to Laravel and modern PHP development? Interested in a guide<a href="https://laracasts.com/series/laravel-5-fundamentals">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-18 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/testing-jargon-series-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/testing-jargon-series-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/testing-jargon-series-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-check-circle-2-1"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>intermediate</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>8</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            intermediate
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/testing-jargon" title="Testing Jargon">Testing Jargon</a>
                    </h3>

        <small class="lesson-block-length">
            64:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Dec. 31st 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>There's no two ways about it: terminology in the testing world is incredibly overwhelming. Let's fix that! Bit by bit<a href="https://laracasts.com/series/testing-jargon">...</a></p>
    </div>
</article>                    </div>
            <div class="row lesson-set lessons__row">
                            <article class="col-md-4 lesson-block lesson-block-series lesson-11 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/code-katas-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/code-katas-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/code-katas-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-check-1"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>6</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/code-katas-in-php" title="Code Katas in PHP">Code Katas in PHP</a>
                    </h3>

        <small class="lesson-block-length">
            114:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Dec. 12th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>If martial artists use kata as a method for exercise and practice, what might be the equivalent for coders, like<a href="https://laracasts.com/series/code-katas-in-php">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-16 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/how-to-build-command-line-apps-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/how-to-build-command-line-apps-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/how-to-build-command-line-apps-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-window-3"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>intermediate</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>6</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            intermediate
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/how-to-build-command-line-apps-in-php" title="How to Build Command-Line Apps">How to Build Command-Lin...</a>
                    </h3>

        <small class="lesson-block-length">
            43:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Dec. 6th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>In this series, we'll learn how how to build command-line apps from scratch, using Symfony's excellent <a href="http://symfony.com/doc/current/components/console/introduction.html">console component</a>. In<a href="https://laracasts.com/series/how-to-build-command-line-apps-in-php">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-17 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/laravel-and-the-frontend-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/laravel-and-the-frontend-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/laravel-and-the-frontend-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-wrench"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>7</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/laravel-5-and-the-front-end" title="Laravel and the Front-end">Laravel and the Front-en...</a>
                    </h3>

        <small class="lesson-block-length">
            38:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Dec. 4th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>Let's take a break from the back-end, and instead focus on that other world: the front-end! Don't worry, Laravel 5<a href="https://laracasts.com/series/laravel-5-and-the-front-end">...</a></p>
    </div>
</article>                    </div>
            <div class="row lesson-set lessons__row">
                            <article class="col-md-4 lesson-block lesson-block-series lesson-15 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/simple-rules-for-simpler-code-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/simple-rules-for-simpler-code-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/simple-rules-for-simpler-code-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-pencil-3"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>intermediate</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>5</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            intermediate
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/simple-rules-for-simpler-code" title="Simple Rules for Simpler Code">Simple Rules for Simpler...</a>
                    </h3>

        <small class="lesson-block-length">
            52:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Nov. 20th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>If you've ever heard a developer use the term, "object calisthenics," you might have assumed that they were referring to<a href="https://laracasts.com/series/simple-rules-for-simpler-code">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-14 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/object-oriented-bootcamp-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/object-oriented-bootcamp-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/object-oriented-bootcamp-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-binocular"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>10</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/object-oriented-bootcamp-in-php" title="Object-Oriented Bootcamp">Object-Oriented Bootcamp</a>
                    </h3>

        <small class="lesson-block-length">
            117:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Nov. 11th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>As wonderful as Laravel is, it does assume that you have a basic understanding of object-oriented programming. If you don't<a href="https://laracasts.com/series/object-oriented-bootcamp-in-php">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-12 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/whats-new-in-laravel-5-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/whats-new-in-laravel-5-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/whats-new-in-laravel-5-tn.jpg); background-size: cover;">


                    <span class="lesson-block-status lesson-block-status__archived label">Archived</span>

        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-clipboard-1"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>intermediate</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>12</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            intermediate
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/whats-new-in-laravel-5" title="What&#039;s New in Laravel 5.0 (Alpha)">What&#039;s New in Laravel 5....</a>
                    </h3>

        <small class="lesson-block-length">
            122:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Oct. 16th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>Each new release of Laravel feels like a mini-Christmas, and version 5 is no different! Though some of these changes<a href="https://laracasts.com/series/whats-new-in-laravel-5">...</a></p>
    </div>
</article>                    </div>
            <div class="row lesson-set lessons__row">
                            <article class="col-md-4 lesson-block lesson-block-series lesson-13 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/laravel-5-from-scratch-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/laravel-5-from-scratch-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/laravel-5-from-scratch-tn.jpg); background-size: cover;">


                    <span class="lesson-block-status lesson-block-status__archived label">Archived</span>

        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-award-4"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>14</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/laravel-5-from-scratch" title="Laravel 5 From Scratch (Alpha)">Laravel 5 From Scratch (...</a>
                    </h3>

        <small class="lesson-block-length">
            121:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Oct. 14th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>So you've chosen to learn Laravel? Excellent choice! I can't recommend it enough. In this series, step by step, I'll<a href="https://laracasts.com/series/laravel-5-from-scratch">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-10 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/understanding-regular-expressions-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/understanding-regular-expressions-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/understanding-regular-expressions-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-setting-gears-1"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>6</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/understanding-regular-expressions" title="Understand Regular Expressions">Understand Regular Expre...</a>
                    </h3>

        <small class="lesson-block-length">
            54:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Sep. 19th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>Does the thought of a confusing regular expression send chills down your back? Don't worry; you're in the majority. But<a href="https://laracasts.com/series/understanding-regular-expressions">...</a></p>
    </div>
</article>                            <article class="col-md-4 lesson-block lesson-block-series lesson-6 ">

    <div class="full-center lesson-block-inner" style="background: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/be-awesome-in-phpstorm-tn.jpg); background: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/be-awesome-in-phpstorm-tn.jpg); background: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(https://laracasts.s3.amazonaws.com/images/video-thumbnails/be-awesome-in-phpstorm-tn.jpg); background-size: cover;">



        <div class="lesson-block-thumbnail">
            <i class="lesson-thumbnail icon-award-2"></i>
        </div>

        <!-- <div class="lesson-block-details"> -->

           <!--  <ul class="full-center-inner">

                <li><i class="ss-skull"></i>Difficulty: <span>beginner</span></li>


                                    <li><i class="ss-playfilm"></i>Episode Count: <span>25</span></li>
                            </ul> -->

<!--              -->        <!-- </div> -->

        <h5 class="lesson-block-difficulty">
            beginner
        </h5>

        <h3 class="lesson-block-title  not-watched">

                            <a href="https://laracasts.com/series/how-to-be-awesome-in-phpstorm" title="Be Awesome in PHPStorm">Be Awesome in PHPStorm</a>
                    </h3>

        <small class="lesson-block-length">
            72:00
        </small>
    </div>

    <div class="lesson-block-meta">
        <div class="lesson-date">
            Sep. 15th 2014
        </div>



        <!-- This displays the favorited form and heart icon thing -->
    </div>

    <div class="lesson-block-excerpt">
        <p>Think about how many hours each week you spend within your editor. Doesn't it make sense to unlock every inch<a href="https://laracasts.com/series/how-to-be-awesome-in-phpstorm">...</a></p>
    </div>
</article>                    </div>

    </div>
</div>


<!-- RENAISSANCE -->
<div id="buy-lunch">
    <div class="text-center container wrap">
        <h2 class="wow fadeIn alone">
            <a href="https://laracasts.com/join">Buy me lunch</a> once a month, and I'll teach you<br>
            everything about <a href="http://laracasts.com">Laravel</a> and modern PHP workflow.
        </h2>
    </div>
</div>


<!-- TESTIMONIALS -->
<div class="testimonials" id="home-reviews">
    <div class="container wrap wow fadeIn">

    <h2 class="section-heading">
        <a href="https://laracasts.com/testimonials">These folks think Laracasts is pretty dang cool.</a>
    </h2>

    <span class="section-heading-divider"></span>

    <div class="row">
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://laravel.com">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/taylor-otwell.jpg" alt="Taylor Otwell">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://laravel.com">Taylor Otwell</a></h4>
                        <p class="testimony-body">Laracasts is insane!</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://heybigname.com/">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/shawn-mccool.jpg" alt="Shawn McCool">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://heybigname.com/">Shawn McCool</a></h4>
                        <p class="testimony-body">Laracasts is the shit.</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://besnappy.com">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/ian-landsman.jpg" alt="Ian Landsman">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://besnappy.com">Ian Landsman</a></h4>
                        <p class="testimony-body">Really, Laracasts is totally off the hook. Jeffrey Way is an amazing teacher.</p>
                    </div>
                </div>
            </div>
            </div>
    <div class="row">
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://driesvints.com">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/dries-vints.jpg" alt="Dries Vints">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://driesvints.com">Dries Vints</a></h4>
                        <p class="testimony-body">Probably the most "must-watch" web development screencasts on the internet.</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://ericlbarnes.com">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/eric-barnes.jpg" alt="Eric Barnes">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://ericlbarnes.com">Eric Barnes</a></h4>
                        <p class="testimony-body">Laracasts is the premier learning tool for Laravel. The tutorials are always concise and relevant. If you use Laravel, subscribing is a must!</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://fideloper.com">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/chris-fidao.jpg" alt="Chris Fidao">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://fideloper.com">Chris Fidao</a></h4>
                        <p class="testimony-body">Even when developing something I "know," I review Laracasts on the topic. There's always something new Jeff talks about, even if it's just a different point of view.</p>
                    </div>
                </div>
            </div>
            </div>
    <div class="row">
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="http://www.ricardof.com.br/">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/ricardo-fuhrmann.jpg" alt="Ricardo Fuhrmann">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="http://www.ricardof.com.br/">Ricardo Fuhrmann</a></h4>
                        <p class="testimony-body">The best resource to learn Laravel! Jeffrey did an amazing job. This was exactly what was missing for the community.</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="https://github.com/ionut-tanasa">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/ionut-tanasa.jpg" alt="Ionut Tanasa">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="https://github.com/ionut-tanasa">Ionut Tanasa</a></h4>
                        <p class="testimony-body">Laracasts was the missing piece in learning Laravel. Yeah there were some series on other websites, but none of them was at this level.</p>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 testimonial">
                <div class="row">
                    <div class="avatar col-md-5">
                        <a href="https://github.com/tolu360">
                            <img class="img-circle" src="https://laracasts.com/images/reviews/tolu-olowu.jpg" alt="Tolu Olowu">
                        </a>
                    </div>

                    <div class="testimonial-main col-md-7">
                        <h4 class="media-heading"><a href="https://github.com/tolu360">Tolu Olowu</a></h4>
                        <p class="testimony-body">Jeffrey is simply a one-of-a-kind tutor - teaching is obviously his calling. Laravel and Laracasts, twice as nice!!</p>
                    </div>
                </div>
            </div>
            </div>

    <h3 class="text-center zeroed"><a href="https://laracasts.com/testimonials">Want more? Check out a massive catalog of testimonials.</a></h3>
    </div>
</div>


<!-- HI I'M JEFFREY -->
<div class="piece" id="meet-jeffrey">
    <div class="container wrap">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-3">
                <img src="{!! $page->myCrazyVariableName->image_url('https://www.gravatar.com/avatar/6fa6f0343e6c25ab7d7a68ae018fa5df?s=200&amp;d=https://laracasts.com/images/default-avatar.png') !!}" class="avatar" data-devise="myCrazyVariableName, image, Profile Image, Bio">
            </div>

            <div class="col-md-9">
                <h2 class="pulse" data-devise="hiImWhoever, textarea, Hi!, Bio">{{ $page->hiImWhoever->text('Hi, I\'m Jeffrey!') }}</h2>

                <div data-devise="descriptionParagraph, wysiwyg, Description of Whatever, Bio">

                    @if(isset($page->descriptionParagraph->text))
                        {!! $page->descriptionParagraph->text !!}
                    @else
                    <p>
                        There's a chance that you may already know me! Well-respected in the PHP community, I am a co-host on the <a href="http://www.laravelpodcast.com/">Laravel podcast</a>, have written a number of <a href="https://leanpub.com/laravel-testing-decoded">successful books</a>, built <a href="https://github.com/laracasts/TestDummy">popular packages</a>,
                        contributed to many open-source projects, spoken at <a href="http://userscape.com/laracon/2014/jeffreyway.html">every Laracon conference</a>, been a guest on countless podcasts (including <a href="http://phptownhall.com/blog/2014/02/15/episode-19-jeffrey-laracasts-bdfls/">PHP Town Hall</a>,
                        <a href="http://shoptalkshow.com/episodes/005-with-jeffrey-way/">Shop Talk</a>, <a href="https://www.youtube.com/watch?v=ozMoUp1wU0E">No Capes</a>, and <a href="http://bootstrapped.fm/bootstrapped-episode-46-jeffrey-way-of-laracasts/">Bootstrapped.fm</a>),
                        and have contributed to the largest web development <a href="http://www.creativebloq.com/net-magazine">magazines</a> in the world.
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<!-- GET GOING -->
<div class="text-center piece" id="level-up">
    <div class="container wrap">
        <h2 class="wow pulse alone">
            <a href="https://laracasts.com/lessons">Start browsing,</a> or <a href="https://laracasts.com/join">make the decision to level up!</a>
        </h2>
    </div>
</div>

<footer id="footer" class="wrap">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h4 class="logo">Laracasts</h4>

                <p class="footer__site-description">
                    The best PHP screencasts on the web. Buy me lunch once a month, and I'll teach you everything about modern PHP workflow.
                </p>

                <ul class="footer__connect">
                    <li><a href="http://facebook.com/laracasts"><i class="icon-facebook"></i></a></li>
                    <li><a href="http://twitter.com/laracasts"><i class="icon-twitter"></i></a></li>
                    <li><a href="https://github.com/laracasts"><i class="icon-github"></i></a></li>
                </ul>
            </div>


            <div class="col-md-2">
                <h5>Learn</h5>

                <ul class="zeroed">
                    <li><a href="https://laracasts.com/lessons">Lessons</a></li>
                    <li><a href="https://laracasts.com/series">Series</a></li>
                    <li><a href="https://laracasts.com/collections">Collections</a></li>
                    <li><a href="https://laracasts.com/recommended-reading">Recommended Reading</a></li>
                    <li><a href="https://laracasts.com/latest">What's New</a></li>
                    <li><a href="https://laracasts.com/index">Site Index</a></li>
                </ul>
            </div>


            <div class="col-md-2">
                <h5>Discuss</h5>

                <ul class="zeroed">
                    <li><a href="https://laracasts.com/discuss">Forum</a></li>
                    <li><a href="http://laravelpodcast.com">Laravel Podcast</a></li>
                    <!-- <li><a href="/learn-with-jeffrey">Blog</a></li> -->
                </ul>
            </div>


            <div class="col-md-4">
                <h5>Related</h5>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="zeroed">
                            <li><a href="https://forge.laravel.com/">Laravel Forge</a></li>
                            <li><a href="https://larajobs.com/?partner=36#">Larajobs</a></li>
                            <li><a href="https://laracasts.com/testimonials">Testimonials</a></li>
                            <li><a href="https://laracasts.com/faq">FAQ</a></li>
                            <li><a href="mailto:laracasts@helpful.io"
                               data-helpful="laracasts"
                               data-helpful-title="Got a question?"
                               data-helpful-name=""
                               data-helpful-email="">Customer Support</a></li>
                            <li><a href="https://laracasts.com/feed">RSS</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="zeroed">
                            <li><a href="https://laracasts.com/stats">Statistics</a></li>
                            <li><a href="https://laracasts.com/join">Sign Up</a>
                            <li><a href="https://laracasts.com/login">Log In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <p class="pull-left">
                &#169; Laracasts 2015. All rights reserved.
            </p>

            <div class="pull-right">
                Proudly hosted with <a href="https://forge.laravel.com">Laravel Forge</a> and <a href="https://www.digitalocean.com/?refcode=d2070a2d5f35">DigitalOcean</a>.
            </div>
        </div>
    </div>
</footer>

</div> <!-- close page div -->

<script>var Views = {};</script>
<script src="https://js.pusher.com/2.2/pusher.min.js"></script>
<script src="https://laracasts.com/js/all.js?v=49"></script>
<script>new WOW().init();</script>
<script src="https://cdn.sublimevideo.net/js/si1yxxq3.js"></script>
<script async src="https://assets.helpful.io/assets/widget.js"></script>


<!-- Google Analytics -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));

    ga('create','UA-44120322-1');ga('send','pageview');
</script>




<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"63eeee14d0","applicationID":"3670257","transactionName":"ZARTYhYAWBJQW0ReVl1OZEQNTl8PVV1IGUlbEQ==","queueTime":0,"applicationTime":302,"ttGuid":"","agentToken":"","userAttributes":"","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script>

@include('devise::scripts')

</body>
</html>
