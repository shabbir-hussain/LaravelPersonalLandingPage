@extends('layout')

@section('layoutBody')
<div class="position-ref full-height">

    <div class="content fadeIn">
        <div class="title m-b-md">
            Contact me
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <div class="smallform">
            <form method="post" action="/contact">
                @csrf

                <label for="fname">Name</label>
                <input type="text" id="fname" name="name" placeholder="Your name...">

                <label for="fname">Email</label>
                <input type="text" id="email" name="email" placeholder="You@email.com...">

                <label for="lname">Subject</label>
                <input type="text" id="lname" name="subject" placeholder="Subject">

                <label for="subject">Message:</label>
                <textarea id="message" name="message" placeholder="Your Message..." style="height:200px"></textarea>

                <input class="mvbutton" type="submit" value="Submit">
                <button class=mvbutton><a href="/">Cancel</a></button>

            </form>
        </div>

    </div>
</div>

