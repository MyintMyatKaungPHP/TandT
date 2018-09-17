@extends('zone.layout.app')
@section('title','Zone | Contact ')
@section('content')
    <section class="inner-banner">
        <div class="zt-container">
            <div class="box clearfix">
                <img src="{{asset('images/map-marker.png')}}" alt="">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>

    <div class="zt-container">
        <div class="row">
            <br><br>
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30551.8751249416!2d96.16646345!3d16.82713045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194ca8f363c41%3A0x963fccdc45769af2!2sInfo+Myanmar+College!5e0!3m2!1sen!2smm!4v1519139148718" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="info">
                    <br>
                    <b>Contact</b> : +959 450020582 <br>
                    <b>Email</b> : myintmyatkaung.info@gmail.com <br>
                    <b>Address</b> : No.7, Pyi Yeik Thar Road, Kamayut Township, Yangon, Myanamar
                </div>
                <br>
        </div>
    </div>

@endsection