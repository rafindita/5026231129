<?php
// You can add PHP code here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>CSS Opacity</title>
{{-- Memastikan hanya satu link ke file CSS eksternal --}}
<link rel="stylesheet" href="{{ asset('css/style_css_opacity.css') }}" />
</head>
<body>

<h1>CSS Opacity</h1>

<h2>Basic Opacity Examples</h2>
<div class="container">
    <div class="img-box">
    <img src="https://picsum.photos/id/1018/400/200" class="opacity-02" alt="Opacity 0.2">
    <p>opacity 0.2</p>
    </div>
    <div class="img-box">
    <img src="https://picsum.photos/id/1018/400/200" class="opacity-05" alt="Opacity 0.5">
    <p>opacity 0.5</p>
    </div>
    <div class="img-box">
    <img src="https://picsum.photos/id/1018/400/200" class="opacity-1" alt="Opacity 1">
    <p>opacity 1 (default)</p>
    </div>
</div>

<h2>Transparent Hover Effect</h2>
    <div class="hover-effect">
    {{-- Gambar-gambar ini berasal dari w3schools, tidak perlu asset() jika tetap ingin pakai URL eksternal --}}
    <img src="https://www.w3schools.com/css/img_lights.jpg" alt="Lights">
    <img src="https://www.w3schools.com/css/img_mountains.jpg" alt="Mountains">
    <img src="https://www.w3schools.com/css/img_forest.jpg" alt="Forest">
</div>

<h2>Transparent Box (opacity applied to entire element)</h2>
<div class="transparent-box">
    <div class="box1">opacity 1</div>
    <div class="box2">opacity 0.6</div>
    <div class="box3">opacity 0.3</div>
    <div class="box4">opacity 0.1</div>
</div>

<h2>Transparency using RGBA (background only)</h2>
<div class="rgba-box">
    <div class="rgba1">100% opacity</div>
    <div class="rgba2">60% opacity</div>
    <div class="rgba3">30% opacity</div>
    <div class="rgba4">10% opacity</div>
</div>

<h2>Text in Transparent Box</h2>
{{-- Pastikan kelas .text-transparent-box memiliki background image yang didefinisikan di style_css_opacity.css --}}
<div class="text-transparent-box">
    <div class="text-box-content">
    Ini adalah tulisan yang muncul di box.
    </div>
</div>

<?php
// You can add more PHP code here
?>
</body>
</html>