<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>mini-database</title>
    @extends('cssheader')
</head>

<body>

<div class="container-fluid" style="margin-top: 5%;">
  <div class="row">
     <div class="col-8">
      <table class="table">
         <thead>
            <tr> 
        @foreach ($data as $cols)
        
        <th scope="col"> {{ $cols}} </th>   
   
        @endforeach
             </tr>
    </thead>
    <tbody>
        @foreach ($theTable as $table)
    <tr>
    <th scope="row">{{$table->id}}</th>
      <td>{{$table->row1}}</td>
      <td>{{$table->row2}}</td>
      <td>{{$table->row3}}</td>
    </tr>
     @endforeach
</table>
    </div>
    
    
     <div class="col-4">
     <form method="POST">
   @csrf
    

     <div class="form-group">
     <label for="exampleFormControlSelect1"></label>
    <select name ="select-id" class="form-control" id="exampleFormControlSelect1">
      @foreach ($theTable as $table)
      <option>{{$table->id}}</option>
       @endforeach
    </select>
  </div>
 

 @foreach ($lastRecord as $record => $val)
   

  <div class="form-group">
    <label for="exampleInputEmail1"> </label>
  <input type="rowData" class="form-control" id="{{$val}}-ID" name="{{$val}}" placeholder="{{ $val }}">
  </div>
 
    @endforeach


  

<button type="submit" class="btn btn-success">Insert Data</button>
</form>
</div>


       

</body>

@extends('jsInclude')

</html>