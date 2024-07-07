
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Starter</title>
<link rel="stylesheet" href="/css/app.css">


<script nonce="bd740ce1-c736-461d-a424-326210f48bcc">try{(function(w,d){!function(c,d,e,f){if(c.zaraz)console.error("zaraz is loaded twice");else{c[e]=c[e]||{};c[e].executed=[];c.zaraz={deferred:[],listeners:[]};c.zaraz._v="5714";c.zaraz.q=[];c.zaraz._f=function(g){return async function(){var h=Array.prototype.slice.call(arguments);c.zaraz.q.push({m:g,a:h})}};for(const i of["track","set","debug"])c.zaraz[i]=c.zaraz._f(i);c.zaraz.init=()=>{var j=d.getElementsByTagName(f)[0],k=d.createElement(f),l=d.getElementsByTagName("title")[0];l&&(c[e].t=d.getElementsByTagName("title")[0].text);c[e].x=Math.random();c[e].w=c.screen.width;c[e].h=c.screen.height;c[e].j=c.innerHeight;c[e].e=c.innerWidth;c[e].l=c.location.href;c[e].r=d.referrer;c[e].k=c.screen.colorDepth;c[e].n=d.characterSet;c[e].o=(new Date).getTimezoneOffset();if(c.dataLayer)for(const p of Object.entries(Object.entries(dataLayer).reduce(((q,r)=>({...q[1],...r[1]})),{})))zaraz.set(p[0],p[1],{scope:"page"});c[e].q=[];for(;c.zaraz.q.length;){const s=c.zaraz.q.shift();c[e].q.push(s)}k.defer=!0;for(const t of[localStorage,sessionStorage])Object.keys(t||{}).filter((v=>v.startsWith("_zaraz_"))).forEach((u=>{try{c[e]["z_"+u.slice(7)]=JSON.parse(t.getItem(u))}catch{c[e]["z_"+u.slice(7)]=t.getItem(u)}}));k.referrerPolicy="origin";k.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(c[e])));j.parentNode.insertBefore(k,j)};["complete","interactive"].includes(d.readyState)?zaraz.init():c.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
</ul>

<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
<img src="./img/logo.png" alt="larastart Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Lara Start</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Starter Pages
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Active Page</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inactive Page</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Simple Link
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Starter Page</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Starter Page</li>
</ol>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">
Some quick example text to build on the card title and make up the bulk of the card's
content.
</p>
<a href="#" class="card-link">Card link</a>
<a href="#" class="card-link">Another link</a>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">
Some quick example text to build on the card title and make up the bulk of the card's
content.
</p>
<a href="#" class="card-link">Card link</a>
<a href="#" class="card-link">Another link</a>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5 class="m-0">Featured</h5>
</div>
<div class="card-body">
<h6 class="card-title">Special title treatment</h6>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="m-0">Featured</h5>
</div>
<div class="card-body">
<h6 class="card-title">Special title treatment</h6>
<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
<a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
</div>

</div>

</div>
</div>

</div>





<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Anything you want
</div>

<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>



<script src="/js/app.js"></script>
</body>
</html>
