<form action="{{ route('dosen.store') }}" method="POST">
    @csrf

    <table class="table table-dark table-striped-columns">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Fullname"></td>
        </tr>

        <tr>
            <td>Nomor Induk Pegawai</td>
            <td>:</td>
            <td><input type="text" name="NIP"></td>
        </tr>

        <tr>
            <td>Nomor Induk Dosen Nasional</td>
            <td>:</td>
            <td><input type="text" name="NIDN"></td>
        </tr>

        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><input type="text" name="Pendidikan_Terakhir"></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Jurusan_id"></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tempat_Lahir"></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="Tanggal_Lahir"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="Alamat"></textarea></td>
        </tr>

        <tr>
            <td colspan="3">
                <input type="submit" value="Add">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>