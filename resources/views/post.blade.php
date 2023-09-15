@extends('layout.master')
@push('style')
<style src="/hello.css"> </style>
@endpush
<h1>Post Pages</h1>
<a href="{{route('about-me')}}">About</a>
<br>
<a href="/">Home page</a>

@verbatim
<div id="app">{{ message }}</div>
@endverbatim

<br>
{{"Hi"}}
{!!"<h1>I love you Laravel</h1>"!!}

@php
$user = "Rabhim";
$fruits =["Am", "Jam", "Licchi"];
@endphp

<script>
var data = {{Js::from($fruits)}};

data.forEach(function(entry){
console.log(entry);
});

@prepend('style')
<style>
h1{
color:red;
}
</style>
@endprepend


@push('limon')
<script src="/master.js"> </script>
@endpush
</script>

@push('Mony')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp } = Vue

  createApp({
   data() {
      return {
        message:'Hello Laravel'
      }
    }
  }).mount('#app')
</script>
@endpush
