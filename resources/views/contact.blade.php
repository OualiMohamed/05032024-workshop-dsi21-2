   @extends('layouts.app')

   @section('content')
       <h1>Hello DSI21</h1>
       <h2>{{ $message }}</h2>
       @php
           $counter = 1;
       @endphp
       <div>
           @if (count($details) !== 0)
               <ul>
                   @foreach ($details as $detail)
                       <li>{{ $detail }} ({{ $counter++ }})</li>
                   @endforeach
               </ul>
           @else
               <p>No details</p>
           @endif
       </div>
       <div>
           @unless (count($details) === 0)
               <ul>
                   @foreach ($details as $detail)
                       <li>{{ $detail }}</li>
                   @endforeach
               </ul>
           @else
               <p>No details</p>
           @endunless
       </div>
       <div>
           <ul>
               @forelse ($details as $detail)
                   <li>{{ $detail }}</li>
               @empty
                   <p>No details</p>
               @endforelse
           </ul>
       </div>
   @endsection
