<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Spesialis</th>
            <th scope="col">Kontak</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dokter as $key => $p)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $p->name }}</td>
                <td>{{ $p->spesialis }}</td>
                <td>{{ $p->contact }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
