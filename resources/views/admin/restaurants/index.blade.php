<h1>Restaurantes</h1>
<hr>
<a href="{{route('restaurant.new')}}">Novo</a>
<table>
<thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Criado em</th>
        <th>Ações</th>
    </tr>
</thead>
<tbody>
    @foreach ($restaurants as $restaurant)
    <tr>
      <td>{{$restaurant->id}}</td>
      <td>{{$restaurant->name}}</td>
      <td>{{$restaurant->create_at}}</td>
      <td><a href="{{route('restaurant.edit',['restaurant' =>$restaurant->id])}}">Editar</td>
        <td><a href="{{route('restaurant.destroy',['id' =>$restaurant->id])}}">Excluir</td>
    </tr>
    @endforeach
</tbody>
</table>
