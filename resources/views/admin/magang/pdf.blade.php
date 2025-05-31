<h1 align="center">Data Magang</h1>
<h3 align="center">Tanggal : {{ $tanggal }}</h3>
<h3 align="center">Pukul : {{ $jam }}</h3>
<hr>
<table width="100%" border="1px" style="border-collapse: collapse;">
    <thead>
        <tr>
            <th width="20" align="center">No</th>
            <th width="20" align="center">Nama</th>
            <th width="20" align="center">NPM</th>
            <th width="20" align="center">Email</th>
            <th width="20" align="center">Semester</th>
            <th width="20" align="center">Nama Perusahaan</th>
            <th width="20" align="center">Status Magang</th>
            <th width="20" align="center">Tanggal Mulai</th>
            <th width="20" align="center">Tanggal Selesai</th>
        </tr>
        </thead>
        <tbody>
            @foreach( $magang as $item)
                <tr>
                    <td align="center">{{ $loop->iteration }}</td>
                    <td>{{ $item->user->nama }}</td>
                    <td align="center">{{ $item->user->npm }}</td>
                    <td align="center">{{ $item->user->email }}</td>
                    <td align="center">{{ $item->user->semester }}</td>
                    <td>{{ $item->user->nama_perusahaan }}</td>
                    <td align="center">{{ $item->magang }}</td>
                    <td align="center">{{ $item->tanggal_mulai }}</td>
                    <td align="center">{{ $item->tanggal_selesai }}</td>
                </tr>
            @endforeach
    </tbody>
</table>
