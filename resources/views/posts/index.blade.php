@extends('layouts.layout')


@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">

                    <ul>
                        @foreach($posts as $post)
                            <li>
                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>

            <div class="col-sm-3 offset-sm-1 blog-sidebar">

                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>

            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->

    @endsection



