@extends('layout')

@section('content')
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>HI, MY NAME IS FRANCISCO &amp; I AM </span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">JAVA DEVELOPER</b>
                        <b>C# DEVELOPER</b>
                        <b>ANDROID DEVELOPER</b>
                        <b>PHP DEVELOPER</b>
                        <b>JAVASCRIPT DEVELOPER</b>
                        <b>PYTHON DEVELOPER</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        Con muchas ganas de aprender no paro de hacer proyectos para mejorar mis conocimientos.
                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated btn btn-default btn-green hvr-bounce-to-right" data-wow-delay=".9s" href="frangf.tech" target="_blank">See more</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                    ABOUT ME
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
                    </p>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="images/about/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->

@stop
