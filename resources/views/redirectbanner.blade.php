@extends('layout')

@section('layoutBody')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md fadeIn">
            {{ $title }}
        </div>

        <div class="subtitle fadeIn one">
            <p> You will be redirected home in 5 seconds</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    function Redirect()
    {
        window.location="/";
    }
    setTimeout('Redirect()', 5000);
</script>

