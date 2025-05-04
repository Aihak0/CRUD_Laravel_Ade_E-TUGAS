<div class="text-center"></div>
    <h1 colspan="5" align="center">Data Tugas</h1>

    <h2 colspan="5" align="center">Tanggal : {{ $tanggal }}</h2>

    <h3 colspan="5" align="center">Pukul : {{ $jam }}</h3>

<hr>
<table width="100%" border="1px" style="border-collapse:collapse">
    <thead>
    <tr>
        <th width="20" align="center">Nama</th>
        <th width="20" align="center">Email</th>
        <th width="20" align="center">Tugas</th>
        <th width="20" align="center">Tanggal Mulai</th>
        <th width="20" align="center">Tanggal Selesai</th>
    </tr>
    </thead>
        <tbody>
            <tr>
                <td>{{ $tugas->user->nama }}</td>
                <td>{{ $tugas->user->email }}</td>
                <td>{{ $tugas->tugas }}</td>
                <td align="center">{{ $tugas->tanggal_mulai }}</td>
                <td align="center">{{ $tugas->tanggal_selesai }}</td>
                
            </tr>
        </tbody>
</table>