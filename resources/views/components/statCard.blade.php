
@props(['titlle','value','head'])


<div class="card" style="width: 18rem;">
  <div class="card-header">
    {{ $head }}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $titlle }}</li>
    <li class="list-group-item">{{ $value }}</li>

  </ul>
</div>
