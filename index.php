<form id="form_mahasiswa">
    <label for="prodi">Prodi</label>
    <select name="prodi" id="prodi">
    <option value="" hidden disable>Pilih Program Studi</option>
    <option value="Teknik Informatika"> Teknik Informatika </option>
    <option value="Filsafat"> Filsafat </option>
    <option value="Sastra"> Sastra </option>
    </select>
</form>
<div id="tampilan">
    <table border="1">
        <tr>
            <th> No. </th>
            <th> NIM </th>
            <th> Nama </th>
            <th> Program Studi </th>
        </tr>
    </table>
</div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
    $(document).ready(function () {
        $("select").on('change', function() {
            $prodi = this.value;
            $('#tampilan').load("koneksi.php", {prodi : $prodi});
        })
    })
</script>