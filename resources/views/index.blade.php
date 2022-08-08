@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')

@include('layouts.includes.header')
  
<div id="body" class="pt-20 pb-20 pl-14 pr-14 bg-slate-200"><div id="partidos-table"><table class=" w-full">
            <thead class="border-b bg-teal-500">
            <tr>
              <th class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                #
              </th>

              <th  class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                Equipo local
              </th>
              <th  class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                Equipo visitante
              </th>
              <th  class="text-base font-medium text-gray-900 px-6 py-6 text-left">
                Hora
              </th>
                            <th class="text-base font-medium text-gray-900 px-6 py-4 text-left">
                Fecha
              </th>
                            </th>
                            <th  class="text-base font-medium text-gray-900 px-6 py-4 text-left">
                Ubicacion
              </th>
                            </th>
                            </th>
                            <th  class="text-base font-medium text-gray-900 px-6 py-4 text-left">
                Resultado
              </th>
            </tr>

          </thead>

          @foreach ($partidos as $partido)
          <ul><li>{{$partido}}</li></ul>
          @endforeach

                    <tbody>
            <tr class=" bg-teal-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class=" text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Barcelona FC
              </td>
              <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Real Madrid
              </td>
              <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                20:00
              </td>
                            <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                20/09/22
              </td>
                            </td>
                            <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Camp Nou
              </td>
                            </td>
                            </td>
                            <td class="text-base text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                2-2
              </td>
            </tr>
  
  
  </table></div></div>

 @include('layouts.includes.footer') 

@endsection