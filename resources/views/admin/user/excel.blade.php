<table>
    <thead>
        <tr>
            <th colspan="7" align="center">Data User</th>
        </tr>
        <tr>
            <th colspan="7" align="center">Tanggal :{{ $tanggal }}
        </tr>
        <tr>
            <th colspan="7" align="center">Pukul : {{ $jam }}</th>
        </tr>
        <tr>
            <th width="20" align="center">No</th>
            <th width="20" align="center">Nama</th>
            <th width="20" align="center">NPM</th>
            <th width="20" align="center">Email</th>
            <th width="20" align="center">Jabatan</th>
            <th width="20" align="center">Semester</th>
            <th width="20" align="center">Nama Perusahaan</th>
        </tr>
        </thead>
        <tbody>
            @foreach( $user as $item)
                <tr>
                    <td align="center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td align="center">{{ $item->npm }}</td>
                    <td align="center">{{ $item->email }}</td>
                    <td align="center">{{ $item->jabatan}}</td>
                    <td align="center">{{ $item->semester }}</td>
                    <td>{{ $item->nama_perusahaan }}</td>
                </tr>
            @endforeach
    </tbody>
</table>
