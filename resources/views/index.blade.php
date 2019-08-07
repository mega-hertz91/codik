@extends('layout.index')

@section('content')
    <section>
        <div class="search">
            <form>
                <input type="text" value="Search..." onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                <input type="submit" value="">
            </form>
        </div>
        <div class="clearfix"> </div>
        <ul class="film-list">

        </ul>
        <h2 class="recent">Новые фильмы</h2>
        <ul class="main-carousel" id="flexiselDemo3">

        </ul>
    </section>
    <section>
        <div class="clearfix"> </div>
        <ul class="film-list">

        </ul>
        <h2 class="recent">Новые мультфильмы</h2>
        <ul class="main-carousel" id="flexiselDemo2">

        </ul>
    </section>
@stop