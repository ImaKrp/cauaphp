@extends('base.app')

@section('titulo', 'App')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #F5F5F5">

  <div
    style="background-color: #F2D1F5; display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 15px 30px; width: 100%">
    <div>
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        <img style="width: 6em; display: inline-block;" src="../../imagens/gota-sangue.png" alt="imagem">
      </x-responsive-nav-link>

      <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
        Cadastro de Clínica
      </p>
    </div>
  </div>

  <div class="mx-auto py-12 divide-y md:max-w-4xl" style="align-items: center">
    <form action="" method="post" enctype="multipart/form-data"
      class="bg-white shadow-md rounded px-12 mx-5 pt-6 pb-6 mb-4">

      <h3 class="pt-4 text-2xl font-medium">Formulário de clínica</h3>
      <div
        style="display: flex; align-items: center; justify-content: space-between; gap: 12px; width: 100%; margin-top: 24px ">
        <label style="font-size:16px; 
              color: black; 
              background-color: #C770D1; 
              width:100%; 
              padding: 30px;
              border-radius: 10px; display: flex; align-items: center; gap: 12px; ">
          <input type="radio" id="Colostomia" name="estomia" value="Colostomia" checked />
          <b>Colostomia</b></label>
        <label style="font-size:16px; 
              color: black; 
              background-color: #C770D1; 
              width:100%; 
              padding: 30px; 
              border-radius: 10px; display: flex; align-items: center; gap: 12px;">
          <input type="radio" id="Ileostomia" name="estomia" value="Ileostomia" checked />
          <b>Ileostomia</b></label>
        <label style="font-size:16px; 
              color: black; 
              background-color: #C770D1; 
              width:100%; 
              padding: 30px; 
              border-radius: 10px; display: flex; align-items: center; gap: 12px;">
          <input type="radio" id="Urostomia" name="estomia" value="Urostomia" checked />
          <b>Urostomia</b></label>
      </div>
      <div style="display: flex; width: 100%; flex-direction: column; margin: 18px 0; gap: 16px">
        <div style="display: flex; gap: 12px">
          <label style="font-size:20px;" for="data">Data da
            cirurgia:</label>
          <input style="border-radius: 10px; flex-grow: 1; height: 42px" type="date" name="data"
            value="<?php echo date('d-m-y'); ?>" />
        </div>
        <div style="display: flex; width: 100%; gap: 12px">
          <label style="font-size:20px;" for="bolsa">Sistema de
            bolsas:</label>
          <select style="border-radius: 10px; flex-grow: 1; " name="bolsa" id="bolsa">
            <option value="uma">Uma peça</option>
            <option value="duas">Duas peças</option>
          </select>
        </div>
      </div>

      <div style="display: flex; align-items: center; justify-content: center; gap: 12px; width: 100%;">
        <button
          style="align-content:center; font-weight:bold; border-radius: 10px; background-color:#F2D1F5; width:120px; height:40px"
          type="button">Voltar</button>
        <button
          style="align-content:center; font-weight:bold; border-radius: 10px; background-color:#F2D1F5; width:120px; height:40px"
          type="submit">Salvar</button>
      </div>
    </form>

  </div>
  @endsection