@extends('template.default')

@section('content')
<div class="container">

<div class="row">
<div class="col-md-6">
<div style="text-align: center;"><img src="public/images/prestashop.png"/></div>
<h1 class="text-center fontDosis" style="font-weight:700;font-size:1.8em;color:#565956;"><span></span>Prestashop Development</h1>

 
 <p>PrestaShop provides more than 250,000 online store owners with the most powerful, dynamic and international ecommerce software enriched with hundreds of innovative tools to build and manage a successful online store at no cost. PrestaShop is simple, efficient and intuitive with unmatched power that enables users to thrive in a competitive market regardless of size, industry or revenue.</p>
 
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Easy Customization<br>
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Attractive Admin Panel<br>
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Better Ecommerce Management<br>
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Best for small Enterprise

</div>
<div class="col-md-6">
<div style="text-align: center;"><br><img  src="public/images/woocommerce_logo.png" height="120" width="100"/></div>
<h1 class="text-center fontDosis" style="font-weight:700;font-size:1.8em;color:#565956;"><span></span>&nbsp;Woocommerce Development</h1>

<p>The most customizable eCommerce
platform for building your online business.</p>

 <span class="glyphicon glyphicon-ok"></span>&nbsp;Easy SEO<br>
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Lots of free plugin<br>
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Used by Brand companies<br>
 <span class="glyphicon glyphicon-ok"></span>&nbsp;Best for large Enterprise
</div>
</div>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<br>
<a style="text-decoration:none;" align="center" class="btn btn-primary btn-lg"  href="{{ url('portfolio')}}"> e-commerce portfolio</a>
<br>
<br>
</div>
<div class="col-md-4">
</div>
</div>
</div>

@stop