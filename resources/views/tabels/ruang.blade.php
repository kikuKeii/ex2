<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tipe Ruangan</th>
            <th scope="col">Harga/Malam</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ruangan as $key => $p)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $p->type }}</td>
                <td>{{ 'Rp. ' . number_format($p->price, 0, ',', '.') }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
