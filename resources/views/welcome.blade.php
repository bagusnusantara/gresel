@extends('layout.main')
@section('stylesheets')
<!-- <link href="{{ asset('webcodecamjs/css/bootstrap.min.css') }}" rel="stylesheet"> -->
<link href="{{ asset('webcodecamjs/css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="section-header">
    <h1>Presensi QR Code</h1>
</div>
<div class="section-body">
    <div class="card card-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Pilih Kamera</label>
                    <select class="form-control" id="camera-select"></select>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <button title="Aktifkan kamera" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><i class="fas fa-power-off"></i> Aktifkan Kamera</button>
                <button title="Matikan kamera" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><i class="fas fa-power-off"></i> Matikan Kamera</button>
                <input id="image-url" type="hidden" class="form-control" placeholder="Image url">
                <button title="Decode Image" class="btn btn-default btn-sm d-none" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                <button title="Image shoot" class="btn btn-info btn-sm disabled d-none" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                <button title="Pause" class="btn btn-warning btn-sm d-none" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span></button>
            </div>
            <br><br><br><br>
        </div>
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="well" style="position: relative;display: inline-block;">
                    <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                    <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                    <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                    <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                    <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                </div>
                <div class="well d-none" style="width: 100%;">
                    <label id="zoom-value" width="100">Zoom: 2</label>
                    <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                    <label id="brightness-value" width="100">Brightness: 0</label>
                    <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                    <label id="contrast-value" width="100">Contrast: 0</label>
                    <input id="contrast" onchange="Page.changeContrast();" type="range" min="0" max="64" value="0">
                    <label id="threshold-value" width="100">Threshold: 0</label>
                    <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                    <label id="sharpness-value" width="100">Sharpness: off</label>
                    <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                    <label id="grayscale-value" width="100">grayscale: off</label>
                    <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                    <br>
                    <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                    <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                    <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                    <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="thumbnail" id="result">
                    <div class="well" style="overflow: hidden;">
                        <img width="320" height="240" id="scanned-img" src="">
                    </div>
                    <div class="caption">
                        <h3>Hasil Scan</h3>
                        <p id="scanned-QR"></p>
                        <form method="POST" action="{{ url('presensi/qrcode/search') }}">
                            @csrf
                            <input id="qr_code" type="hidden" name="qr_code">
                            <button type="submit" class="btn btn-primary btn-block">Lihat Data</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('webcodecamjs/js/filereader.js') }}"></script>
<script type="text/javascript" src="{{ asset('webcodecamjs/js/qrcodelib.js') }}"></script>
<script type="text/javascript" src="{{ asset('webcodecamjs/js/webcodecamjs.js') }}"></script>
<script type="text/javascript" src="{{ asset('webcodecamjs/js/main.js') }}"></script>
<script type="text/javascript">
    setInterval(update, 1);
    function update() {
        var qr_code = document.getElementById("scanned-QR").innerHTML;
        document.getElementById("qr_code").value = qr_code;
    }
    update();
</script>
@endsection