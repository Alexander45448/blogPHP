<div {{$attributes->merge(['class' =>"bg-$color-lightest border-l-4 border-$color text-$color-dark p-4"])}} role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$slot}}</p>
    {{$prueba()}}
  </div>