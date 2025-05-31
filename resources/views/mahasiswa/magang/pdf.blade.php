<h1 align="center">Data Magang</h1>
<h3 align="center">Tanggal : {{ $tanggal }}</h3>
<h3 align="center">Pukul : {{ $jam }}</h3>
<hr>
<table width="100%">
    <tbody>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $magang->user->nama }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $magang->user->email }}</td>
        </tr>
        <tr>
            <td>Nama Perusahaan</td>
            <td>:</td>
            <td>{{ $magang->user->nama_perusahaan }}</td>
        </tr>
        <tr>
            <td>Tanggal Mulai</td>
            <td>:</td>
            <td>{{ $magang->tanggal_mulai }}</td>
        </tr>
        <tr>
            <td>Tanggal Selesai</td>
            <td>:</td>
            <td>{{ $magang->tanggal_selesai }}</td>
        </tr>
    </tbody>
</table>
<hr>
