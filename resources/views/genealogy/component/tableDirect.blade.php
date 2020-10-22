<table class="table nowrap scroll-horizontal-vertical myTable table-striped">
    <thead class="">
        <tr class="text-center text-white bg-purple-alt2">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Ingreso</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr class="text-center">
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>