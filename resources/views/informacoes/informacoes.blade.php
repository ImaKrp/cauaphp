@extends('base.app')

@section('titulo', 'App')

@section('content')
<div
  style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 50px 30px; width: 100%">
  <div>
    <p
      style="font-weight: bold;font-size: 20px; display: block; margin: 0px 0px 0px 20px; color: #7E3586; text-transform: uppercase">
      {{ Auth::user()->name }}</p>
    <p style="font-size: 16px; display: block; margin: 10px 0px 0px 20px; color: #7E3586">{{ Auth::user()->email }}</p>
    </p>
  </div>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="dropdown-item" type="submit">
      <img src="../../imagens/logout.png" alt="Logo" style="width: 22px">
    </button>
  </form>
</div>

<x-responsive-nav-link :href="route('estoma')" :active="request()->routeIs('estoma')">
  <button style="padding: 10px 30px; 
          text-align: center; 
          display: inline-block; 
          font-size: 15px; margin-bottom: 13px; 
          background-color: #C770D1; 
          width: 100px;  
          border-radius: 10px;
          margin-right: 5px">
    <p style="font-weight: bold;color: white; text-decoration: none; font-size: 14px; margin: 2px">Estoma</p>
  </button>
</x-responsive-nav-link>

@endsection