<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Penyakit</th>
            <th scope="col">Dokter</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasien as $key => $p)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $p->name }}</td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->dokter_name }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
