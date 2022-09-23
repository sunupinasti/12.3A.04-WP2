<html>

<head>
    <title> form input mata kuliah</title>
</head>

</head>
  <center>
    <form  action="<?=    base_url('matakuliah/cetak');   ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        form input data mata kuliah
                    </th>    
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama'
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Kode MTK</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="kode" id="kode">
                            </td>   
                        <tr>
                            <th>Nama MTK</th>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama" id="nama">
                            </td>  
                        </tr> 
                            <tr>
                                <th>SKS</th>
                                <td>:</td>
                                <td>
                                    <select name="sks" id="sks">
                                        <option value"">Pilih SKS</option>
                                        <option value=2">2</option>
                                        <option value=3">3</option>
                                        <option value=4">4</option>
                                    </select>
                                  </td>
                                 </tr>
                                 <tr>
                                    <td colspan="3" align="center">
                                        <input type="submit" value="submit">
                                    </td>
                                  </tr>
                                </table>
                                 </form>
                                </center>
</body>

</html>
class Matakuliah extends CI controller
{
    public function index()

    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode')
            'nama' => $this->input->post('nama')
            'sks' => $this->input->('sks')
];
$this->load->view('view-data-matakuliah', $data);

