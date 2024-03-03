<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Pasien</th>
            <th scope="col">Dokter</th>
            <th scope="col">Tipe Ruang</th>
            <th scope="col">Masuk-Keluar</th>
            <th scope="col">Durasi</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($payment as $key => $p)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $p->name }}</td>
                <td>{{ $p->dokter_name }}</td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->checkin . ' - ' . $p->checkout }}</td>
                <td>{{ $p->stay_duration . ' Days' }}</td>
                <td>{{ 'Rp. ' . number_format($p->total_price, 0, ',', '.') }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
